<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Matiere
 * 
 * @property int $id_matiere
 * @property string $nom_matiere
 * 
 * @property Collection|Note[] $notes
 * @property Collection|Pdf[] $pdfs
 *
 * @package App\Models
 */
class Matiere extends Model
{
	protected $table = 'matiere';
	protected $primaryKey = 'id_matiere';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_matiere' => 'int'
	];

	protected $fillable = [
		'nom_matiere'
	];

	public function notes()
	{
		return $this->hasMany(Note::class, 'id_matiere');
	}

	public function pdfs()
	{
		return $this->hasMany(Pdf::class, 'id_matiere');
	}
}
