<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentMessage
 * package App
 */
class StudentMessage extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'student_messages';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'message',
        'post_date',
        'student_id',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at'
    ];


    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }
    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}