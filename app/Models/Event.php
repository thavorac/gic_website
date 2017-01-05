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

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name',
        'start',
        'end',
        'require_register',
        'pending',
        'file',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at',
        'about'
    ];

    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }
    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}