<?php

namespace App\Http\Controllers;

use App\Publicacao;
use App\LogTarefa;
use App\Tarefa;
use App\Usuario;
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

    public function aprovar(Request $request) {
        try{
            $user = JWTAuth::toUser(JWTAuth::getToken());

            $info = $request->all();

            $pauta = Tarefa::find($info['id_tarefa']);

            if ($pauta->log_tarefas()->where('status', '=', '1')->first()->etapa == 13) {
                $pauta->log = $pauta->log_tarefas()->where('status', '=', '1')->first();
                return view('conteudo_detalhes',  ['pauta' => $pauta], ['error' => 'O conteúdo já foi aprovado e não pode mais ser modificado.']);
            }
                
            $pauta->nota_tarefa = $info['nota_tarefa'];
            $pauta->consideracoes_gerais = $info['consideracoes_gerais'];
            $pauta->save();

            $publicacao = $pauta->publicacoes()->where('status_publicacao','1')->get()->last();
            $publicacao_nova = $publicacao->replicate();
            $publicacao_nova->save();
            $publicacao->status_publicacao = 0;
            $publicacao->save();

            $pauta->log_tarefas()->update(['status'=>'0']);
            $log = new LogTarefa;
            $log->status = "1";
            $log->etapa = "13";
            $log->id_tarefa = $pauta->id_tarefa;
            $log->id_usuario = $user->id;
            $log->save();

            $pauta->log = $pauta->log_tarefas()->where('status', '=', '1')->first();

            $solicitante = $pauta->log_tarefas()->where('etapa','=','0')->first()->usuario;

            Mail::send('mails.conteudo_aprovado', [
                'email'=> $solicitante->email,
            ], function($m) use($request){
                $m->from('josebrunoom@gmail.com'. 'Postspot');
                $m->to($solicitante->email);
                $m->subject('Conteúdo aprovado');
            });


            return view('conteudo_detalhes',  ['pauta' => $pauta], ['message' => 'Dados atualizados com sucesso!']);
        }
        catch (\Throwable $e) {
            return view('conteudo_detalhes',  ['pauta' => $pauta], ['error' => 'Falha ao atualizar os dados']);
        }
    }
}
