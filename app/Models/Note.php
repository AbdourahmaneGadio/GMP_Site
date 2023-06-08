<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Note
 * 
 * @property int $id_note
 * @property int $note
 * @property int $id_etudiant
 * @property int $id_matiere
 * @property int $id_enseignant
 * 
 * @property Enseignant $enseignant
 * @property Etudiant $etudiant
 * @property Matiere $matiere
 *
 * @package App\Models
 */
class Note extends Model
{
	protected $table = 'note';
	protected $primaryKey = 'id_note';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_note' => 'int',
		'note' => 'int',
		'id_etudiant' => 'int',
		'id_matiere' => 'int',
		'id_enseignant' => 'int'
	];

	protected $fillable = [
		'note',
		'id_etudiant',
		'id_matiere',
		'id_enseignant'
	];

	public function enseignant()
	{
		return $this->belongsTo(Enseignant::class, 'id_enseignant');
	}

	public function etudiant()
	{
		return $this->belongsTo(Etudiant::class, 'id_etudiant');
	}

	public function matiere()
	{
		return $this->belongsTo(Matiere::class, 'id_matiere');
	}
}
