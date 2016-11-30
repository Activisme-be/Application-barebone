<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Application management.
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
 class App extends MY_Controller
 {
     /**
      * Authencated user session array.
      *
      * @var array
      */
     public $User = [];

     /**
      * Application constructor.
      */
     public function __construct()
     {
         parent::__construct();
         $this->load->library(['session', 'blade', 'form_validation']);
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
      * Insert a new application in the database.
      *
      * @see    POST: http://www.domain.tld/application/insert
      * @return redirect
      */
     public function insert()
     {
         $this->form_validation->set_rules('name', 'Naam', 'trim|required');
         $this->form_validation->set_rules('server_url', 'server_url', 'trim|required');

         if ($this->form_validation->run() === false) { // Validation fails
             // printf(validation_errors());    // For debugging propose
             // die();                          // For debugging propose

            $this->session->set_flashdata('class', 'alert alert-danger');
            $this->session->set_flashdata('message', 'Wij konden de invoer niet verwerken');
         } else { // Validation passes
            $input['name']       = $this->input->post('name');
            $input['user_id']    = $this->User['id'];
            $input['git_url']    = empty($this->input->post('git_url')) ? 'none given' : $this->input->post('git_url');
            $input['server_url'] = $this->input->post('server_url');

            // Insert the application.
            Applications::create($input);

            // Set the flash message
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', 'De applicatie is aangemaakt in het systeem.');
         }

         redirect($_SERVER['HTTP_REFERER']);
     }

     /**
      * Delete a application out off the system.
      *
      * @see    GET|HEAD: http://www.domain.tld/applications/destroy/{appId}
      * @return redirect
      */
     public function destroy()
     {
        $appId = $this->uri->segment(3);

        if (! empty($appId)) { // The application id is set.
            Applications::destroy($appId);

            $class   = 'alert alert-success';
            $message = 'De applicatie is verwijderd.';
        } else { // The application id isn't set.
            $class   = 'alert alert-danger';
            $message = 'Kan de applicatie niet verwijderen.';
        }

        // Set flash message.
        $this->session->set_flashdata('class', $class);
        $this->session->set_flashdata('message', $message);

        redirect($_SERVER['HTTP_REFERER']);
     }
 }
