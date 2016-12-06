<?php defined('BASEPATH') OR exit('No diçrect script access allowed');

/**
 * Comment management.
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
class Comment extends MY_Controller
{
    /**
     * Authencated user seesion array.
     *
     * @var array
     */
    public $User = [];

    /**
     * Comment constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['blade', 'session', 'form_validation']);
        $this->load->helper(['url', 'language']);
        $this->lang->load('comment');

        $this->User = $this->session->userdata('logged_in');
    }

    /**
     * Middleware controller.
     *
     * @return array
     */
    public function middleware()
    {
        /**
         * Return the list of middlewares you want to be applied,
         * Here is list of some valid options
         *
         * loggged_in                    // As used below, simplest, will be applied to all
         * someother|except:index,list   // This will be only applied to posts()
         * yet_another_one|only:index    // This will be only applied to index()
         */
        return ['logged_in'];
    }

    /**
     * Create a new comment in the system.
     *
     * @see    POST: http://www.domain.tld/comment/create/{ticketId}
     * @return redirect
     */
    public function insert()
    {
        // FIXME: Set flash data to variables. and set the flash data out off the if/else structures.

        $this->form_validation->set_rules('comment', 'Comment', 'trim|required');

        if ($this->form_validation->run() === false) { // Validation fails
            $class   = 'alert alert-danger';
            $message = lang('flash_error_validation_insert');
        } else { // Validation passes
            $input['author_id'] = $this->User['id'];
            $input['comment']   = $this->input->post('comment');

            $insert   = Reactions::create($input);
            $relation = Ticket::find($this->uri->segment(3))->reactions()->attach($insert->id);

            if ($relation && $insert) { // Check if the comment is inserted and connected.
                $class   = 'alert alert-success';
                $message = lang('flash_insert');
            }
        }

        $this->session->set_flashdata('class', $class);
        $this->session->set_flashdata('message', $message);

        redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Update the comment.
     *
     * @see    http://www.domain.tld/comment/edit/{commentId}
     * @return redirect
     */
    public function edit()
    {
        $this->form_validation->set_rules('comment', 'Comment', 'trim|required');

        if ($this->form_validation->run() === false) { // Validation fails
            $class   = 'alert alert-danger';
            $message = lang('flash_error_validation_edit');
        } else { // Validation passes
            $commentId = $this->uri->segment(3);
            $comment   = Reactions::find($commentId);

            if ($comment->author_id !== $this->User['id']) { // The requester is not the author.
                $class   = 'alert alert-danger';
                $message = flash('flash_error_no_rights');

                $input['comment'] = $this->input->post('comment');

                if (Reactions::find($commentId)->update($input)) { // The author has changed his comment.
                    $class   = 'alert alert-success';
                    $message = lang('flash_edit');
                }
            }
        }

        $this->session->set_flashdata('class', $class);
        $this->session->set_flashdata('message', $message);

        redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Destroy a comment.
     *
     * @see    GET|HEAD: http://www.domain.tld/comment/{ticketId}/{commentId}
     * @return redirect
     */
    public function destroy()
    {
        $ticketId  = $this->uri->segment(3);
        $commentId = $this->uri->segment(4);

        $relation = Ticket::find($ticketId)->reactions()->sync([]);
        $delete   = Reactions::destroy($commentId);

        if (isset($ticketId) && isset($commentId)) { // Check if both params are set.
            if ($relation && $delete) { // Test if the comment is deleted & remove the relation.
                $class   = 'alert alert-success';
                $message = flash('flash_delete');
            }
        } else { // The parameters are incorrect.
            $class   = 'alert alert-success';
            $message = flash('flash_error_params');
        }

        $this->session->set_flashdata('class', $class);
        $this->session->set_flashdata('message', $message);

        redirect($_SERVER['HTTP_REFERER']);
    }
}
