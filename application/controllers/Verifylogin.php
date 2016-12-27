<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Login verification.
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
class Verifylogin extends MY_Controller
{
    /**
     * Verifylogin constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

        $this->load->library(['session', 'blade', 'form_validation']);
        $this->load->helper(['string', 'url', 'language', 'cookie']);
        $this->lang->load('auth');
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

        if ($this->form_validation->run() === false) { // Validation fails
            // printf(validation_errors());    // For debugging propose
            // die();                          // For debugging propose

            $data['title'] = 'Index';
            $this->blade->render('home', $data);
        } else { // Validation passes
            redirect(base_url('/tickets'));
        }
    }

    /**
     * Run the login against the database.
     *
     * @todo: save the user data to a session that can be used accross platforms.
     *
     * @param  string $password
     * @return bool
     */
    public function check_database($password)
    {
        $input['email'] = $this->input->post('email');

        // AUthencation query
        $query = Login::where('email', $input['email'])
            ->with('permissions')
            ->where('blocked', 0)
            ->where('password', md5($password));

        if ($query->count() == 1) { // Result is found and now we can build up the session.
            $authencation = []; // Empty session array.
            $permissions  = []; // Empty permission array.

            // Build up the session token.
            foreach ($query->get() as $user) { // Define the data to the session array.
                // Build up the permission array
                foreach ($user->permissions as $perm) { // Set every key to the array.
                    array_push($permissions, $perm->role); // Push every key invidual to the permissions array.
                }

                $authencation['id']     = $user->id;
                $authencation['name']   = $user->name;
                $authencation['email']  = $user->email;
                $authencation['roles']  = $permissions;
            }

            $this->session->set_userdata('logged_in', $authencation);

            return true;
        } else { // There are no user find with the given data.
            $this->form_validation->set_message('check_database', lang('wrong_crendetails'));
            return false;
        }
    }
}
