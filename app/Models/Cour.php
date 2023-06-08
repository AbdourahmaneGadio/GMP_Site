<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cour
 * 
 * @property int $id_cours
 * @property string $nom_cours
 * 
 * @property Collection|Pdf[] $pdfs
 *
 * @package App\Models
 */
class Cour extends Model
{
	protected $table = 'cours';
	protected $primaryKey = 'id_cours';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_cours' => 'int'
	];

	protected $fillable = [
		'nom_cours'
	];

	public function pdfs()
	{
		return $this->hasMany(Pdf::class, 'id_cours');
	}
}
