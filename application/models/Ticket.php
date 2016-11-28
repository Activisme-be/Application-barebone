<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Login
 */
class Ticket extends Eloquent
{
    /**
     * Database table
     *
     * @var string
     */
    protected $table =  'tickets';

    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['assignee_id', 'heading', 'description', 'status'];

    /**
     * Disable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;
}
