<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Personnel
 * 
 * @property int $id_personnel
 * @property string $nom_personnel
 * @property string $email_personnel
 * @property string $password_personnel
 *
 * @package App\Models
 */
class Personnel extends Model
{
	protected $table = 'personnel';
	protected $primaryKey = 'id_personnel';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_personnel' => 'int'
	];

	protected $fillable = [
		'nom_personnel',
		'email_personnel',
		'password_personnel'
	];
}
