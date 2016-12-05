<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Login verification.
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
class Welcome extends MY_Controller
{
    /**
     * Welcome constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['blade', 'session']);
        $this->load->helper(['url', 'language']);
        $this->lang->load('auth');
    }

    /**
     * The front page for the resources application.
     *
     * @return blade view.
     */
    public function index()
    {
        $data['title'] = lang('title_login');
        $this->blade->render('home', $data);
    }
}
