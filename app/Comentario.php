<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
	use SoftDeletes;

    protected $primaryKey = 'id_comentario';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'visivel' => 'int',
		'equipe' => 'int',
		'id_usuario' => 'int',
		'id_tarefa' => 'int'
	];

	protected $dates = [
		'data_criacao'
	];

	protected $fillable = [
		'data_criacao',
		'comentario',
		'status',
		'visivel',
		'equipe',
		'id_usuario',
		'id_tarefa'
	];

	public function tarefa()
	{
		return $this->belongsTo(\App\Tarefa::class, 'id_tarefa');
	}

	public function usuario()
	{
		return $this->belongsTo(\App\Usuario::class, 'id_usuario');
	}
}
