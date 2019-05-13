<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Authenticatable implements JWTSubject
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'name',
		'sobrenome',
		'sexo_usuario',
		'foto_usuario',
		'funcao_usuario',
		'obs',
		'doc_usuario',
		'tipo_conta_usuario',
		'modalidade_conta_usuario',
		'cod_banco_usuario',
		'banco_usuario',
		'agencia_usuario',
		'conta_usuario',
		'digito_verificador_usuario',
		'email',
		'password',
		'status_usuario',
		'recupera_senha',
		'nascimento_usuario',
		'telefone_usuario'
	];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function anexos()
	{
		return $this->hasMany(\App\Models\Anexo::class, 'id_responsavel');
	}

	public function candidatos()
	{
		return $this->hasMany(\App\Models\Candidato::class, 'id');
	}

	public function comentarios()
	{
		return $this->hasMany(\App\Models\Comentario::class, 'id');
	}

	public function habilidades()
	{
		return $this->belongsToMany(\App\Models\Habilidade::class, 'habilidades_usuario', 'id', 'id_habilidade')
					->withPivot('id_habilidade_usuario');
	}

	public function idiomas()
	{
		return $this->belongsToMany(\App\Models\Idioma::class, 'idiomas_usuario', 'id', 'id_idioma')
					->withPivot('id_idiomas_usuario');
	}

	public function log_tarefas()
	{
		return $this->hasMany(\App\LogTarefa::class, 'id_usuario');
	}

	public function membros_equipes()
	{
		return $this->hasMany(\App\Models\MembrosEquipe::class, 'id');
	}

	public function projetos()
	{
		return $this->hasMany(\App\Projeto::class, 'responsavel_projeto');
	}
}
