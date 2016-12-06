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
    protected $table = 'SYS_applications';

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

    /**
     * Author relation for the applications.
     *
     * @return array|collection
     */
    public function creator()
    {
        return $this->belongsTo('Login', 'user_id');
    }

    /**
     * Ticket -> relation relationship.
     *
     * @return array|collection
     */
    public function tickets()
    {
        return $this->belongsTo('Ticket');
    }
}
