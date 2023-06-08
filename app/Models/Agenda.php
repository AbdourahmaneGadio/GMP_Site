<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Agenda
 * 
 * @property int $id_agenda
 * @property Carbon $date_agenda
 * 
 * @property Collection|Enseignant[] $enseignants
 * @property Collection|Etudiant[] $etudiants
 *
 * @package App\Models
 */
class Agenda extends Model
{
	protected $table = 'agenda';
	protected $primaryKey = 'id_agenda';
	public $timestamps = false;

	protected $casts = [
		'date_agenda' => 'datetime'
	];

	protected $fillable = [
		'date_agenda'
	];

	public function enseignants()
	{
		return $this->belongsToMany(Enseignant::class, 'agenda_enseignant', 'id_agenda', 'id_enseignant')
					->withPivot('agenda_enseignant');
	}

	public function etudiants()
	{
		return $this->belongsToMany(Etudiant::class, 'agenda_etudiant', 'id_agenda', 'id_etudiant')
					->withPivot('agenda');
	}
}
