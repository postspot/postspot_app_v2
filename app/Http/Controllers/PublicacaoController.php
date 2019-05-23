<?php

namespace App\Http\Controllers;

use App\Publicacao;
use App\LogTarefa;
use Illuminate\Http\Request;
use JWTAuth;

class PublicacaoController extends Controller
{
    public function store(Request $request) {
        try{
            $user = JWTAuth::toUser(JWTAuth::getToken());

            Publicacao::where('id_tarefa',$request->get('id_tarefa'))->update(['status_publicacao'=>'0']);

            $info = $request->all();
            $publicacao = new Publicacao;
            $publicacao->fill($info);
            $publicacao->data_criacao = \Carbon\Carbon::now();
            $publicacao->status_publicacao = 1;
            $publicacao->save();
            $pauta = $publicacao->tarefa;
            $pauta->publicacoes = $publicacao;

            $pauta->log_tarefas()->update(['status'=>'0']);
            $log = new LogTarefa;
            $log->status = "1";
            $log->etapa = "11";
            $log->id_tarefa = $pauta->id_tarefa;
            $log->id_usuario = $user->id;
            $log->save();

            $pauta->log = $pauta->log_tarefas()->where('status', '=', '1')->first();

            return view('conteudo_detalhes_editar',  ['pauta' => $pauta], ['message' => 'Dados atualizados com sucesso!']);
        }
        catch (\Throwable $e) {
            return view('conteudo_detalhes_editar',  ['pauta' => $request], ['error' => 'Falha ao atualizar os dados']);
        }
    }
}
