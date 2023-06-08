<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Projet
 * 
 * @property int $id_projet
 * @property string $nom_projet
 * @property string $detail_projet
 * @property int $id_entreprise
 * @property int $id_etudiant
 * 
 * @property Entreprise $entreprise
 * @property Etudiant $etudiant
 *
 * @package App\Models
 */
class Projet extends Model
{
	protected $table = 'projet';
	protected $primaryKey = 'id_projet';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_projet' => 'int',
		'id_entreprise' => 'int',
		'id_etudiant' => 'int'
	];

	protected $fillable = [
		'nom_projet',
		'detail_projet',
		'id_entreprise',
		'id_etudiant'
	];

	public function entreprise()
	{
		return $this->belongsTo(Entreprise::class, 'id_entreprise');
	}

	public function etudiant()
	{
		return $this->belongsTo(Etudiant::class, 'id_etudiant');
	}
}
