<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * package App
 */
class Event extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'events';

    protected  $dates = ['start','end'];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name',
        'date_start',
        'date_end',
        'time_start',
        'time_end',
        'require_register',
        'pending',
        'file',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at',
        'about',
        'location'
    ];

    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }
    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}