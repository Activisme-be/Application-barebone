<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Profile management.
 *
 * @author    Tim Joosten
 * @license:  MIT license
 * @since     2016
 * @package   Activisme-BE resources
 */
 class Account extends CI_Controller
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
      * @see
      * @return
      */
     public function index()
     {

     }

     /**
      * Update a account.
      *
      * @see
      * @return
      */
     public function insert()
     {

     }
 }
