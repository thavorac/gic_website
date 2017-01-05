<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SlideShow
 * package App
 */
class AcademicYear extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'academic_years';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'year',
        'description',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at'
    ];

    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }
    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}