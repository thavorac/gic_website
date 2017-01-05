<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * package App
 */
class Project extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name',
        'job_responsibility',
        'about',
        'description',
        'is_finished',
        'sponsor_id',
        'partner_id',
        'create_uid',
        'write_uid',
        'created_at',
        'updated_at'
    ];

    public function partner(){
        return $this->belongsTo(Partner::class,'partner_id');
    }
    public function sponsor(){
        return $this->belongsTo(Partner::class,'sponsor_id');
    }
    public function creator(){
        return $this->belongsTo(User::class,'create_uid');
    }
    public function lastModifier(){
        return $this->belongsTo(User::class,'write_uid');
    }
}