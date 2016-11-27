<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Login verification.
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
class Verifylogin extends CI_Controller
{
    /**
     * Vaerifylogin constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

        $this->load->library(['session', 'blade', 'form_validation', 'email']);
        $this->load->helper(['string', 'url']);
    }

    /**
     * Validate the credentials.
     *
     * @see https://domain.tld/verifylogin
     */
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

        if ($this->form_validation->run() === false) {
            // Validation fails
            $data['title'] = 'Index';
            $this->blade->render('home', $data);
        } else {
            // Validation passes
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    /**
     * Run the login against the database.
     *
     * @param  string $password
     * @return bool
     */
    public function check_database($password)
    {
        $input['email'] = $this->input->post('email');

        // AUthencation query
        $query = Login::where('email', $input['email'])
            ->where('blocked', 0)
            ->where('password', md5($password))
            ->get();

        if (count($query) === 1) { // Result is found and now we can build up the session.
            $authencation = []; // Empty session array.

            foreach ($query as $info) { // Define the data to the session array.

            }

            $this->session->set_userdata('logged_in', $authencation);
            return true;
        } else {
            $this->form_validation->set_message('check_database', 'Wrong password or username.');
            return false;
        }
    }
}
