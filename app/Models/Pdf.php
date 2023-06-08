<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pdf
 * 
 * @property int $id_matiere
 * @property int $id_cours
 * @property string $pdf
 * 
 * @property Cour $cour
 * @property Matiere $matiere
 *
 * @package App\Models
 */
class Pdf extends Model
{
	protected $table = 'pdf';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_matiere' => 'int',
		'id_cours' => 'int'
	];

	protected $fillable = [
		'pdf'
	];

	public function cour()
	{
		return $this->belongsTo(Cour::class, 'id_cours');
	}

	public function matiere()
	{
		return $this->belongsTo(Matiere::class, 'id_matiere');
	}
}
