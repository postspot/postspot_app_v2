<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoTarefa extends Model
{
	protected $table = 'tipo_tarefa';
	protected $primaryKey = 'id_tipo';
	public $timestamps = false;

	protected $casts = [
		'valor_pauta_tipo_tarefa' => 'float',
		'valor_conteudo_tipo_tarefa' => 'float'
	];

	protected $fillable = [
		'nome_tipo',
		'cor_tarefa',
		'valor_pauta_tipo_tarefa',
		'valor_conteudo_tipo_tarefa'
	];

	public function tarefas()
	{
		return $this->hasMany(\App\Tarefa::class, 'id_tipo');
	}
}
