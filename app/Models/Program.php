<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Program
 * package App
 */
class Program extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'programs';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name',
        'description',
        'about',
        'syllabus',
        'program_type_id',
        'reference_text',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at'
    ];

    public function program_type(){
        return $this->belongsTo(ProgramType::class,'program_type_id');
    }
    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }
    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}