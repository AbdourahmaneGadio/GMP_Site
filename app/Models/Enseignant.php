<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Enseignant
 * 
 * @property int $id_enseignant
 * @property string $nom_enseignant
 * @property string $email_enseignant
 * @property string $password_enseignant
 * 
 * @property Collection|Agenda[] $agendas
 * @property Collection|Note[] $notes
 *
 * @package App\Models
 */
class Enseignant extends Model
{
	protected $table = 'enseignant';
	protected $primaryKey = 'id_enseignant';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_enseignant' => 'int'
	];

	protected $fillable = [
		'nom_enseignant',
		'email_enseignant',
		'password_enseignant'
	];

	public function agendas()
	{
		return $this->belongsToMany(Agenda::class, 'agenda_enseignant', 'id_enseignant', 'id_agenda')
					->withPivot('agenda_enseignant');
	}

	public function notes()
	{
		return $this->hasMany(Note::class, 'id_enseignant');
	}
}
