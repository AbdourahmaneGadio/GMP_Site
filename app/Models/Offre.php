<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Offre
 * 
 * @property int $id_offre
 * @property string $nom_offre
 * @property Carbon $date_offre
 * @property string $detail_offre
 * @property int $id_entreprise
 * @property int $id_etudiant
 * 
 * @property Entreprise $entreprise
 * @property Etudiant $etudiant
 *
 * @package App\Models
 */
class Offre extends Model
{
	protected $table = 'offre';
	protected $primaryKey = 'id_offre';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_offre' => 'int',
		'date_offre' => 'datetime',
		'id_entreprise' => 'int',
		'id_etudiant' => 'int'
	];

	protected $fillable = [
		'nom_offre',
		'date_offre',
		'detail_offre',
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
