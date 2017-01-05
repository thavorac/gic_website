<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Timetable
 * package App
 */
class Timetable extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'timetables';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name',
        'trimester',
        'file',
        'description',
        'academic_year_id',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at'
    ];

    public function academic_year(){
        return $this->belongsTo(AcademicYear::class,'academic_year_id');
    }
    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }
    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}