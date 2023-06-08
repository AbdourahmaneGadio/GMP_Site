<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AgendaEnseignant
 * 
 * @property int $id_agenda
 * @property int $id_enseignant
 * @property string $agenda_enseignant
 * 
 * @property Agenda $agenda
 * @property Enseignant $enseignant
 *
 * @package App\Models
 */
class AgendaEnseignant extends Model
{
	protected $table = 'agenda_enseignant';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_agenda' => 'int',
		'id_enseignant' => 'int'
	];

	protected $fillable = [
		'agenda_enseignant'
	];

	public function agenda()
	{
		return $this->belongsTo(Agenda::class, 'id_agenda');
	}

	public function enseignant()
	{
		return $this->belongsTo(Enseignant::class, 'id_enseignant');
	}
}
