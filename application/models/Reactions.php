<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Comments
 */
class Reactions extends Eloquent
{
    /**
     * Database table/
     *
     * @var string
     */
    protected $table = 'sys_reactions';

    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['author_id', 'comment'];

    /**
     * Disable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * belongsTo relation for the author
     *
     * @return array|collection
     */
    public function author()
    {
        return $this->belongsTo('Login');
    }
}
