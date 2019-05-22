<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projeto extends Model
{
	protected $primaryKey = 'id_projeto';
	public $timestamps = false;

	protected $casts = [
		'responsavel_projeto' => 'int'
	];

	protected $dates = [
		'cadastro_projeto'
	];

	protected $fillable = [
		'nome_projeto',
		'cadastro_projeto',
		'segmento_projeto',
		'agencia_projeto',
		'site_projeto',
		'status_projeto',
		'responsavel_projeto'
	];

	public function usuario()
	{
		return $this->belongsTo(\App\Usuario::class, 'responsavel_projeto');
	}

	public function anexos()
	{
		return $this->hasMany(\App\Anexo::class, 'id_projeto');
	}

	public function equipes()
	{
		return $this->hasMany(\App\Equipe::class, 'id_projeto');
	}

	public function estrategias()
	{
		return $this->hasMany(\App\Estrategia::class, 'id_projeto');
	}

	public function personas()
	{
		return $this->hasMany(\App\Persona::class, 'id_projeto');
	}

	public function tarefas()
	{
		return $this->hasMany(\App\Tarefa::class, 'id_projeto');
	}
}
