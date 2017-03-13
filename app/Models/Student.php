<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * package App
 */
class Student extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'students';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name_kh',
        'name_latin',
        'photo',
        'dob',
        'personal_phone',
        'parent_phone',
        'email',
        'id_card',
        'address',
        'description',
        'promotion',
        'about',
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