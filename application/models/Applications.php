<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class applications
 */
class Applications extends Eloquent
{
    /**
     * Database table
     *
     * @var string
     */
    protected $table = 'applications';

    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'git_url', 'server_url'];

    /**
     * Disable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;
}
