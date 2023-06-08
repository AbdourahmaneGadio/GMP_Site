<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AgendaEtudiant
 * 
 * @property int $id_agenda
 * @property int $id_etudiant
 * @property string $agenda
 * 
 * @property Etudiant $etudiant
 *
 * @package App\Models
 */
class AgendaEtudiant extends Model
{
	protected $table = 'agenda_etudiant';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_agenda' => 'int',
		'id_etudiant' => 'int'
	];

	protected $fillable = [
		'agenda'
	];

	public function agenda()
	{
		return $this->belongsTo(Agenda::class, 'id_agenda');
	}

	public function etudiant()
	{
		return $this->belongsTo(Etudiant::class, 'id_etudiant');
	}
}
