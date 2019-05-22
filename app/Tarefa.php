<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarefa extends Model
{
	protected $primaryKey = 'id_tarefa';
	public $timestamps = false;

	protected $casts = [
		'id_persona' => 'int',
		'id_projeto' => 'int',
		'id_equipe' => 'int',
		'id_tipo' => 'int'
	];

	protected $dates = [
		'data_criacao'
	];

	protected $fillable = [
		'data_criacao',
		'data_entrega',
		'nome_tarefa',
		'palavra_chave',
		'briefing_tarefa',
		'estagio_compra',
		'tipo_cta',
		'referencias',
		'consideracoes_gerais',
		'link_publicado',
		'nota_tarefa',
		'id_persona',
		'id_projeto',
		'id_equipe',
		'id_tipo'
	];

	public function equipe()
	{
		return $this->belongsTo(\App\Models\Equipe::class, 'id_equipe');
	}

	public function projeto()
	{
		return $this->belongsTo(\App\Projeto::class, 'id_projeto');
	}

	public function tipo_tarefa()
	{
		return $this->belongsTo(\App\TipoTarefa::class, 'id_tipo');
	}

	public function comentarios()
	{
		return $this->hasMany(\App\Comentario::class, 'id_tarefa');
	}

	public function log_tarefas()
	{
		return $this->hasMany(\App\LogTarefa::class, 'id_tarefa');
	}

	public function publicacoes()
	{
		return $this->hasMany(\App\Publicacao::class, 'id_tarefa');
	}
}
