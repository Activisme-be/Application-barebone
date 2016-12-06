<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Ticket
 */
class Ticket extends Eloquent
{
    /**
     * Database table
     *
     * @var string
     */
    protected $table =  'SYS_tickets';

    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = [
        'assignee_id', 'heading', 'description', 'category_id', 'status', 'application_id'
    ];

    /**
     * Disable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * OneToMany relationship for the comments.
     *
     * @return array|collection
     */
    public function reactions()
    {
        return $this->belongstoMany('Reactions');
    }


    /**
     * Assigned user relation.
     *
     * @return array|collection
     */
    public function assignee()
    {
        return $this->belongsTo("Login");
    }

    /**
     * Category relation.
     *
     * @return array|collection
     */
    public function category()
    {
        return $this->belongsTo('Category');
    }

    /**
     * Application category.
     *
     * @return array|collection
     */
    public function application()
    {
        return $this->belongsTo('Applications');
    }
}
