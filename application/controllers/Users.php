<?php defined('BASEPATH') OR exit('No diçrect script access allowed');

/**
 * User management
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
class Users extends MY_Controller
{
    /**
     * Authencated user session.
     *
     * @var array
     */
    public $User = [];

    /**
     * Users constructor
     *
     * @var void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['email', 'blade', 'session', 'form_validation']);
        $this->load->helper(['url', 'string', 'language']);
        $this->lang->load('users');

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
     * Users overview.
     *
     * @see    GET|HEAD: http://www.domain.tld/users
     * @return blade view.
     */
    public function index()
    {
        $data['title']            = lang('title_index');
        $data['page_title']       = lang('title_page_index');
        $data['page_description'] = lang('page_description_index');
        $data['users']            = Login::all();

        $this->blade->render('users/index', $data);
    }

    /**
     * Insert the user to the platform.
     *
     * @see    POST: http://www.domain.tld/users/insert
     * @return redirect
     */
    public function insert()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == true) { // validation passes
            $input['name']     = $this->input->post('name');
            $input['username'] = $this->input->post('username');
            $input['email']    = $this->input->post('email');
            $input['password'] = md5($this->input->post('password'));
            $input['blocked']  = 0;

            if (Login::create($input)) { // The user has been created
                $class   = 'alert alert-success';
                $message = lang('flash_insert');
            }
        } else { // Validation fails
            $class   = 'alert alert-danger';
            $message = lang('flash_error_validation')
        }

        $this->session->set_flashdata('class', $class);
        $this->session->set_flashdata('message', $message);

        redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Update the user status.
     *
     * @see    GET|HEAD: http://www.domain.tld/users/status/{userId}/{statusId}
     * @return redirect
     */
    public function status()
    {
        $userId = $this->uri->segment(3);
        $status = $this->uri->segment(4);

        if (Login::find($userId)->update(['blocked' => $status])) { // Try to update the user.
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', lang('flash_status'));
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Reset a login password.
     *
     * @see    GET|HEAD: http://www.domain.tld/users/reset/{userId}
     * @return redirect
     */
     public function reset()
     {
         $data['user'] = Login::find($this->uri->segment(3));
         $data['pass'] = random_string('alnum', 18);

         if ($data['user']->update(['password' => md5($data['pass'])])) { // Update the account.
             // Email init
             $config['smtp_host'] = "send.one.com";
             $config['smtp_port'] = "465";
             $config['mailtype']  = 'html';
             $config['charset']   = 'utf-8';
             $this->email->initialize($config);

             // Set the mail notification.
             $this->email->from($this->config->item('dev_email'), $this->config->item('dev_name'));
             $this->email->to($data['user']->email);
             $this->email->subject($this->config->item('app_name') . ' - Reset wachtwoord.');
             $this->email->message($this->blade->render('email/reset', $data));
             $this->email->set_mailtype('html');

             // Sending the mail notification.
             if (! @$this->email->send()) { // Check if the mail has been send.
                show_error($this->email->print_debugger());
             }

             // Clear the mail cache.
             $this->email->clear();

             // Set the flash message
             $this->session->set_flashdata('class', 'alert alert-success');
             $this->session->set_flashdata('message', lang('flash_reset'));

         }

         redirect($_SERVER['HTTP_REFERER']);
     }

    /**
     * Delete a login out off the system;
     *
     * @see    GET|HEAD: http://www.doamin.tld/users/destroy/{userId}
     * @return redirect
     */
    public function destroy()
    {
        if (Login::destroy($this->uri->segment(3))) { // Tring to destroy the user.
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', lang('flash_delete'));
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Log the user out off the system.
     *
     * @see    GET|HEAD: http://www.domain.tld/users/logout
     * @return redirect
     */
    public function logout()
    {
        // Destroy the user session.
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();

        // Set the flash session.
        $this->session->set_flashdata('class', 'alert alert-success');
        $this->session->set_flashdata('message', lang('flash_logout'));

        redirect('/');
    }
}
