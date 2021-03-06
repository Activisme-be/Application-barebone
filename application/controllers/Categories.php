<?php defined('BASEPATH') OR exit('No diçrect script access allowed');

/**
 * Category management.
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
class Categories extends MY_Controller
{
    /**
     * Authencated user session.
     *
     * @var array -
     */
    public $User = [];

    /**
     * Category constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['blade', 'session', 'form_validation']);
        $this->load->helper(['url', 'language']);
        $this->lang->load('category');

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
     * Insert a new ticket category.
     *
     * @see    GET|HEAD: http://www.domain.tld/category/insert
     * @return redirect
     */
    public function insert()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        if ($this->form_validation->run() === false) { // Validation fails
            // printf(validation_errors());     // For debugging propose
            // die();                           // For debugging propose

            $class   = 'alert alert-danger';
            $message = lang('flash_error_validation_insert');
        } else { // Validation passes
            $input['user_id']     = $this->User['id'];
            $input['name']        = $this->input->post('name');
            $input['description'] = $this->input->post('description');

            if (Category::create($input)) { // The category is inserted.
                $class   = 'alert alert-success';
                $message = lang('flash_insert');
            }
        }

        // Set flash messages
        $this->session->set_flashdata('class', $class);
        $this->session->set_flashdata('message', $message);

        redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Delete a ticket category
     *
     * @see    GET|HEAD: http://www.domain.tld/category/destroy/{categoryId}
     * @return redirect
     */
    public function destroy()
    {
        $categoryId = $this->uri->segment(3);

        if (! empty($categoryId)) { // The category id isn't empty
            $class   = 'alert alert-success';
            $message = lang('flash_error_param');

            Category::destroy($categoryId);
        } else { // The category is empty
            $class   = 'alert alert-danger';
            $message = lang('flash_delete');
        }

        // Set the flash message.
        $this->session->set_flashdata('class', $class);
        $this->session->set_flashdata('message', $message);

        redirect($_SERVER['HTTP_REFERER']);
    }
}
