<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    protected $primaryKey = 'id_persona';
	public $timestamps = false;

	protected $casts = [
		'id_projeto' => 'int'
	];

	protected $dates = [
		'data_criacao',
		'data_cadastro'
	];

	protected $fillable = [
		'data_criacao',
		'nome',
		'idade',
		'sexo',
		'caracteristicas',
		'educacao',
		'cargo',
		'segmento',
		'objetivos',
		'desafios',
		'descricao',
		'resolucao',
		'aprendizado',
		'reconhecimento',
		'consideracao',
		'decisao',
		'foto',
		'id_projeto',
		'data_cadastro'
	];

	public function projeto()
	{
		return $this->belongsTo(\App\Models\Projeto::class, 'id_projeto');
	}
}
