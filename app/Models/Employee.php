<?php namespace App\Models;

use App\Models\Access\User\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 * package App
 */
class Employee extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'employees';

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
        'start_working_date',
        'stop_working_date',
        'cv',
        'address',
        'phone',
        'email',
        'about_me',
        'publication',
        'project',
        'academic',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at'
    ];

    public function setDobAttribute($value)
    {
        $dob = Carbon::createFromFormat("d/m/Y",$value);
        $this->attributes['dob'] = $dob->format("m/d/Y");
    }
    public function getDobAttribute($value)
    {
        $dob = Carbon::createFromFormat("m/d/Y",$value);
        return $dob;
    }

    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }
    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}