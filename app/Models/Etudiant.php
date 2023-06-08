<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Etudiant
 * 
 * @property int $id_etudiant
 * @property string $nom_etudiant
 * 
 * @property Collection|Agenda[] $agendas
 * @property Collection|Note[] $notes
 * @property Collection|Offre[] $offres
 * @property Collection|Projet[] $projets
 *
 * @package App\Models
 */
class Etudiant extends Model
{
	protected $table = 'etudiant';
	protected $primaryKey = 'id_etudiant';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_etudiant' => 'int'
	];

	protected $fillable = [
		'nom_etudiant'
	];

	public function agendas()
	{
		return $this->belongsToMany(Agenda::class, 'agenda_etudiant', 'id_etudiant', 'id_agenda')
					->withPivot('agenda');
	}

	public function notes()
	{
		return $this->hasMany(Note::class, 'id_etudiant');
	}

	public function offres()
	{
		return $this->hasMany(Offre::class, 'id_etudiant');
	}

	public function projets()
	{
		return $this->hasMany(Projet::class, 'id_etudiant');
	}
}
