<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Login
 */
class Login extends Eloquent
{
    /**
     * Database table
     *
     * @var string
     */
     protected = 'users';

     /**
      * Mass-assign fields
      *
      * @var array
      */
      protected $fillable = ['username', 'name', 'email', 'password', 'blocked'];

     /**
      * Disable timestamps.
      *
      * @var bool
      */
      protected $timestamps = false;
}
