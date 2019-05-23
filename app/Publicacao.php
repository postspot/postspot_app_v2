<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publicacao extends Model
{
	protected $table = 'publicacoes';
	protected $primaryKey = 'id_publicacao';
	public $timestamps = false;

	protected $casts = [
		'id_tarefa' => 'int'
	];

	protected $dates = [
		'data_criacao'
	];

	protected $fillable = [
		'texto_publicacao',
		'status_publicacao',
		'data_criacao',
		'id_tarefa'
	];

	public function tarefa()
	{
		return $this->belongsTo(\App\Tarefa::class, 'id_tarefa');
	}
}
