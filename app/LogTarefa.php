<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogTarefa extends Model
{
    protected $primaryKey = 'id_log';
	public $timestamps = false;

	protected $casts = [
		'id_tarefa' => 'int',
		'id_usuario' => 'int'
	];

	protected $dates = [
		'data_criacao',
		'data_prevista'
	];

	protected $fillable = [
		'status',
		'etapa',
		'data_criacao',
		'data_prevista',
		'id_tarefa',
		'id_usuario'
	];

	public function tarefa()
	{
		return $this->belongsTo(\App\Models\Tarefa::class, 'id_tarefa');
	}

	public function usuario()
	{
		return $this->belongsTo(\App\Models\Usuario::class, 'id_usuario');
	}
}
