<?php defined('BASEPATH') OR exit('No diçrect script access allowed');

/**
 * User management
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
class Users extends CI_Controller
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
        $this->load->helper(['url']);

        $this->User = $this->session->userdata('logged_id');
    }

    /**
     * Users overview.
     *
     * @see    GET|HEAD: http://www.domain.tld/users
     * @return blade view.
     */
    public function index()
    {
        $data['title']            = "Users overview.";
        $data['page_title']       = 'Gebruikers beheer';
        $data['page_description'] = 'Login module';
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
            $input['password'] = $this->input->post('password');
            $input['blocked']  = 0;

            if (Login::create($input)) { // The user has been created
                $class   = 'alert alert-success';
                $message = 'De gebruiker is opgesla&gen in het systeem.';
            }
        } else { // Validation fails
            $class   = 'alert alert-danger';
            $message = 'Wij konden de gebruiker niet opslaan in het systeem.';
        }

        $this->session->set_flashdata('class', $class);
        $this->session->set_flashdata('message', $message);

        return redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Update the user status.
     *
     * @see    http://www.domain.tld/users/status/{userId}/{statusId}
     * @return redirect
     */
    public function status()
    {
        $userId = $this->uri->segment(3);
        $status = $this->uri->segment(4);

        if (Login::find($userId)->update(['blocked' => $status])) { // Try to update the user.
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', 'De gebruiker zijn status is aangepast.');
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
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();

        redirect('/');
    }
}
