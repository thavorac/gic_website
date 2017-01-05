<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ScholarshipWinner
 * package App
 */
class ScholarshipWinner extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'scholarship_winners';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name_kh',
        'name_latin',
        'photo',
        'degree',
        'duration',
        'description',
        'is_staff',
        'obtain_year',
        'university',
        'scholarship_id',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at'
    ];

    public function scholarship(){
        return $this->belongsTo(Scholarship::class,'scholarship_id');
    }
    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }
    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}