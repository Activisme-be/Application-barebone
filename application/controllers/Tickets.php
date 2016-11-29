<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Ticket management.
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
class Tickets extends MY_Controller
{
    /**
     * Authencated session collection.
     *
     * @var array
     */
    public $User = [];

    /**
     * Tickets constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url']);
        $this->load->library(['session', 'form_validation', 'blade']);

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
        return ['logged_in|except:insert'];
    }

    /**
     * Ticket overview for the tickets.
     *
     * @see    GET|HEAD: http://www.domaiçn.tld/tickets
     * @return blade view
     */
    public function index()
    {
        $data['title']             = 'tickets';
        $data['page_title']        = 'Ticket Management';
        $data['page_description']  = 'Ticket module voor activisme BE';
        $data['relation']          = ['application', 'category', 'assignee', 'reactions.author'];

        // Query statements
        $data['tickets']    = Ticket::where('status', 0)->with($data['relation'])->get();
        $data['users']      = Login::all();
        $data['categories'] = Category::all();

        // printf($data['tickets']);  // For debugging propose
        // die();                     // For debugging propose

        $this->blade->render('tickets/index', $data);
    }

    /**
     * Insert a new ticket into the system.
     *
     * @see    POST: http://www.domain.tld/tickets/insert
     * @return redirect
     */
    public function insert()
    {
        $this->form_validation->set_rules('heading', 'Heading', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('category', 'Category', 'trim|required');

        if ($this->form_validation->run() === false) { // Validation fails
            // var_dump(validation_errors()); // For debugging propose.

            $this->session->set_flashdata('class', 'alert alert-danger');
            $this->session->set_flashdata('message', 'Wij konden de creatie van het ticket verwerken.');

            redirect($_SERVER['HTTP_REFERER']);
        } else { // Validation passes
            $input['assignee_id']    = empty($this->input->post('assignee_id')) ? 0 : $this->input->post('assignee_id');
            $input['application_id'] = empty($this->input->post('application_id')) ? 0 : $this->input->post('application_id');
            $input['heading']        = $this->input->post('heading');
            $input['description']    = $this->input->post('description');
            $input['category_id']    = $this->input->post('category');
            $input['status']         = 0;

            $insert = Ticket::create($input);

            if ($insert) {
                $this->session->set_flashdata('class', 'alert alert-success');
                $this->session->set_flashdata('message', 'Het ticket is aangemaakt.');
            }

            redirect(base_url('tickets/show/' . $insert->id));
        }
    }

    /**
     * Push a ticket to github.
     *
     * @see    GET|HEAD: http://www.domain.tld/tickets/github/{ticketId}
     * @return redirect
     */
    public function github()
    {
        $ticket = Ticket::find($this->uri->segment(3));

        // GitHub hook config.
        $config['username'] = 'Tjoosten';
        $config['password'] = '0474834880Tim!';
        $config['method']   = \Github\Client::AUTH_HTTP_PASSWORD;

        // GitHub hook
        $github = new \Github\Client();
        $github->authenticate($config['username'], $config['password'], $config['method']);

        $params = ['title' => $ticket->heading, 'body' => $ticket->description];

        if ($github->api('issue')->create('Activisme-be', 'Server-tickets', $params)) {
            // Ticket created.
            $this->session->set_flashdata('class', 'Alert alert-success');
            $this->session->set_flashdata('message', 'Het ticket is naar github verplaatst.');
        }

        redirect(base_url('tickets'));
    }

    /**
     * Show a specific ticket.
     *
     * @see    GET|HEAD: http://www.domain.tld/tickets/show/{ticketId}
     * @return blade view.
     */
    public function show()
    {
        $ticketId = $this->uri->segment(3);

        $data['ticket']             = Ticket::with(['application', 'category', 'assignee'])->find($ticketId);
        $data['page_title']         = '<code>#T'. $data['ticket']->id .'</code> ' . $data['ticket']->heading;
        $data['page_description']   = 'Ticket informatie';

        // printf($data['ticket']);  // For debugging propose.
        // die();                    // For debugging propose.

        $this->blade->render('tickets/show', $data);
    }

    /**
     * Destroy a ticket in the system.
     *
     * @see    GET|HEAD: http://domain.tld/tickets/destroy/{ticketId}
     * @return redirect
     */
    public function destroy()
    {
        $ticketId = $this->uri->segment(3);

        if (Ticket::find($ticketId)->update(['status' => 1])) {
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', 'Het ticket is verwijderd.');
        }

        redirect($_SERVER['HTTP_REFERER']);
    }
}
