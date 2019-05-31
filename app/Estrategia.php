<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estrategia extends Model
{
    protected $primaryKey = 'id_estrategia';
	public $timestamps = false;

	protected $casts = [
		'id_projeto' => 'int'
	];

	protected $dates = [
		'data_criacao'
	];

	protected $fillable = [
		'data_criacao',
		'empresa',
		'site',
		'projeto',
		'blog',
		'facebook',
		'instagram',
		'linkedin',
		'twitter',
		'produtos_servicos',
		'links',
		'objetivo_primario',
		'kpis_primario',
		'apresentacao',
		'objetivo_secundario',
		'kpis_secundario',
		'concorrente1',
		'concorrente2',
		'concorrente3',
		'com_quem_falar',
		'com_quem_nao_falar',
		'abordar',
		'evitar',
		'linguagem',
		'referencia1',
		'referencia2',
		'referencia3',
		'tom',
		'voz',
		'consideracoes_gerais',
		'categorias',
		'id_projeto',
		'termos_proibidos',
		'mapeamentos_aprendizado',
		'mapeamentos_reconhecimento',
		'mapeamentos_consideracoes',
		'mapeamentos_decisao'
	];

	public function projeto()
	{
		return $this->belongsTo(\App\Projeto::class, 'id_projeto');
	}

	public function categorias()
	{
		return $this->belongsToMany(\App\Categoria::class, 'categorias_estrategia', 'id_estrategia', 'id_categoria')
					->withPivot('id_categoria_estrategia');
	}

	public function linguagens()
	{
		return $this->belongsToMany(\App\Linguagen::class, 'linguagens_estrategia', 'id_estrategia', 'id_linguagem')
					->withPivot('id_linguagem_estrategia');
	}
}
