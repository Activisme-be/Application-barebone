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
        $data['tickets']            = Ticket::all();
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
        //
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
