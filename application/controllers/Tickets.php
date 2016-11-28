<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Ticket management.
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
class Tickets extends CI_Controller
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
     * Ticket overview for the tickets.
     *
     * @see    GET|HEAD: http://www.domaiçn.tld/tickets
     * @return blade view
     */
    public function index()
    {
        $data['title']              = 'tickets';
        $data['page_title']         = 'Ticket Management';
        $data['page_description']   = 'Ticket module voor activisme BE';

        // Query statements
        $data['tickets']            = Ticket::where('status', 0)->get();
        $data['users']              = Login::all();
        $data['categories']         = Category::all();

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
            $input['assignee_id'] = empty($this->input->post('assignee_id')) ? 0 : $this->input->post('assignee_id');
            $input['heading']     = $this->input->post('heading');
            $input['description'] = $this->input->post('description');
            $input['category_id'] = $this->input->post('category');
            $input['status']      = 0;

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
        //
    }

    /**
     * Show a specific ticket.
     *
     * @see    GET|HEAD: http://www.domain.tld/tickets/show/{ticketId}
     * @return blade view.
     */
    public function show()
    {
        //
    }

    /**
     * Destroy a ticket in the system.
     *
     * @see
     * @return
     */
    public function destroy()
    {
        //
    }
}
