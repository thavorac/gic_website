<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SlideShow
 * package App
 */
class Department extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'departments';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name_kh',
        'name_en',
        'name_fr',
        'code',
        'description',
        'phone',
        'email',
        'address',
        'facebook',
        'gplus',
        'twitter',
        'youtube',
        'logo',
        'headline',
        'about_dept',
        'mission',
        'vision',
        'contact_us',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at'
    ];

    public function courses(){
        return $this->hasMany(Course::class,'department_id');
    }

    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }
    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}