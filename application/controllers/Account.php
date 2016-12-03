<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Profile management.
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
 class Account extends MY_Controller
 {
     /**
      * Authencated user session.
      */
     public $User = [];

     /**
      * Account constructor
      *
      * @return void
      */
     public function __construct()
     {
         parent::__construct();
         $this->load->library(['blade', 'session', 'form_validation']);
         $this->load->helper(['url']);

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
      * Gee the Users profile.
      *
      * @see    GET|HEAD: http://www.domian.tld/account
      * @return blade view.
      */
     public function index()
     {
         $data['title']            = 'Profiel';
         $data['page_title']       = 'Profiel';
         $data['page_description'] = '';
         $data['user']             = Login::find($this->User['id']);

         $this->blade->render('account/index', $data);
     }

     /**
      * Update a account.
      *
      * @see    PATCH|UPDATE: http://www.domain.tld/account/update
      * @return redirect
      */
     public function update()
     {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() === false) { // Form validation fails.
            // printf(validation_errors());  // For debugging propose.
            // die();                        // For debugging propose.

            $class   = 'alert alert-alert';
            $message = 'Wij konden de invoer niet goed verwerken.';
        } else { // Form validation success
            // Begin user insert.
            $user            = Login::find($this->User['id']);
            $user->name     = $this->input->post('name');
            $user->username = $this->input->post('username');
            $user->email    = $this->input->post('email');

            if (! empty($this->input->post('password'))) { // Check if the POST attribute for password is empty.
                $user->password = $this->input->post('password');
            }

            if ($user->save()) { // can update the user.
                $class   = 'alert alert-success';
                $message = 'Je profiel is successvol aangepast.';
            } else { // Could not update the user.
                $class   = 'alert alert-danger';
                $message = 'Wij konden de gebruiker niet aanpassen.';
            }
        }

        // Set flash session data.
        $this->session->set_flashdata('class', $class);
        $this->session->set_flashdata('message', $message);

        redirect($_SERVER['HTTP_REFERER']);
     }
 }
