<?php namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PartnerType
 * package App
 */
class PartnerType extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'partner_types';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name',
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