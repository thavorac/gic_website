<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Scholarship
 * package App
 */
class Scholarship extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'scholarships';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name',
        'about',
        'description',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at'
    ];

    public function scholarship_winners(){
        return $this->hasMany(ScholarshipWinner::class,'scholarship_id');
    }

    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }

    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}