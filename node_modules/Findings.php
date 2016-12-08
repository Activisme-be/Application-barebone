<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Logins
 */
class Findings extends Eloquent
{
    /**
     * Specify the database connection.
     * @var string
     */
    // protected $connection = '';

    /**
     * Database table.
     *
     * @var string
     */
    protected $table = 'findings';

    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'finding', 'source'];

    /**
     * Disable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;
}