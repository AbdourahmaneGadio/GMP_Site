<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Entreprise
 * 
 * @property int $id_entreprise
 * @property string $nom_entreprise
 * @property string $adresse
 * @property int $numero_entreprise
 * @property string $mail_entreprise
 * @property string $code_postal_entreprise
 * 
 * @property Collection|Offre[] $offres
 * @property Collection|Projet[] $projets
 *
 * @package App\Models
 */
class Entreprise extends Model
{
	protected $table = 'entreprise';
	protected $primaryKey = 'id_entreprise';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_entreprise' => 'int',
		'numero_entreprise' => 'int'
	];

	protected $fillable = [
		'nom_entreprise',
		'adresse',
		'numero_entreprise',
		'mail_entreprise',
		'code_postal_entreprise'
	];

	public function offres()
	{
		return $this->hasMany(Offre::class, 'id_entreprise');
	}

	public function projets()
	{
		return $this->hasMany(Projet::class, 'id_entreprise');
	}
}
