<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomLab
 * package App
 */
class RoomLab extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'room_labs';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name',
        'about',
        'person_in_charge',
        'description',
        'department_id',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at'
    ];

    public function department(){
        return $this->belongsTo(Department::class,'department_id');
    }
    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }
    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}