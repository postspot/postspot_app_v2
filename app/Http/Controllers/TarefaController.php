<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tarefa;
use App\Projeto;
use App\Usuario;
use App\LogTarefa;
use JWTAuth;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());

        $tarefas = $user->log_tarefas()->join('tarefas', 'tarefas.id_tarefa', 'log_tarefas.id_tarefa')->join('personas', 'tarefas.id_persona', 'personas.id_persona')->join('tipo_tarefa','tarefas.id_tipo','tipo_tarefa.id_tipo')->where('status','=','1')->get();

        return view('pautas',  ['tarefas' => $tarefas]);
    }

    public function indexCriar()
    {
        $tipos = \App\TipoTarefa::get();
        //$tipos->tamanhos = tamanho

        return view('pauta_criar',  ['tipos' => $tipos]);
    }

    public function indexfiltro($id)
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());

        if($id == 0){
            $tarefas = $user->log_tarefas()->join('tarefas', 'tarefas.id_tarefa', 'log_tarefas.id_tarefa')->join('personas', 'tarefas.id_persona', 'personas.id_persona')->join('tipo_tarefa','tarefas.id_tipo','tipo_tarefa.id_tipo')->where([['status','=','1'], ['etapa', '=', $id]])->get();
        }
        else{
            $tarefas = $user->log_tarefas()->join('tarefas', 'tarefas.id_tarefa', 'log_tarefas.id_tarefa')->join('personas', 'tarefas.id_persona', 'personas.id_persona')->join('tipo_tarefa','tarefas.id_tipo','tipo_tarefa.id_tipo')->where([['status','=','1'], ['etapa', '>', '0']])->get();
        }

        return view('pauta_filtro',  ['tarefas' => $tarefas], ['id' => $id]);
    }

    public function indexconteudos()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        
        $tarefas = $user->log_tarefas()->join('tarefas', 'tarefas.id_tarefa', 'log_tarefas.id_tarefa')->join('tamanhos', 'tamanhos.id_tamanho', 'tarefas.id_tamanho')->select(\DB::raw('log_tarefas.data_prevista,
        tarefas.id_tarefa, tarefas.nome_tarefa, tarefas.data_criacao, log_tarefas.etapa, tamanhos.tamanho'))->where([['status','=','1'], ['etapa', '>', '6']])->get();

        //dd($tarefas);

        return view('conteudos',  ['tarefas' => $tarefas]);
    }

    public function indexconteudosfiltro($id)
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        
        $tarefas = $user->log_tarefas()->join('tarefas', 'tarefas.id_tarefa', 'log_tarefas.id_tarefa')->select(\DB::raw('log_tarefas.data_prevista,
        tarefas.id_tarefa, tarefas.nome_tarefa, tarefas.data_criacao, log_tarefas.etapa'))->where([['status','=','1'], ['etapa', '=', $id]])->get();


        return view('conteudos_filtro',  ['tarefas' => $tarefas], ['id' => $id]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function solicitar($id)
    {

        $user = JWTAuth::toUser(JWTAuth::getToken());

        //desativar projetos do usuario
        $log_t = $user->log_tarefas()->where('id_tarefa', '=', $id)->get()->map(function($k, $e){
            $k->status = 0;
            $k->save();
            return $k;
        });

        $log = new LogTarefa;

        $log->status = "1";
        $log->etapa = "1";
        $log->id_tarefa = $id;
        $log->id_usuario = $user->id;

        $log->save();

        $tarefas = $user->log_tarefas()->join('tarefas', 'tarefas.id_tarefa', 'log_tarefas.id_tarefa')->join('personas', 'tarefas.id_persona', 'personas.id_persona')->join('tipo_tarefa','tarefas.id_tipo','tipo_tarefa.id_tipo')->get();

        return view('pautas',  ['tarefas' => $tarefas]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            //dd($request);

            $user = JWTAuth::toUser(JWTAuth::getToken());

            //criar novo projeto
            $tarefa = new Tarefa;
            $info = $request->all();
            $tarefa->fill($info);

            $tarefa->id_projeto= $user->projetos()->where('projeto_ativo', '1')->first()->id_projeto;
            
            $tarefa->save();

            $log_tarefa = new LogTarefa;
            $log_tarefa->status = 1;
            $log_tarefa->etapa = 0;
            $log_tarefa->data_prevista = 1;
            $log_tarefa->id_tarefa = $tarefa->id_tarefa;
            $log_tarefa->id_usuario = $user->id;
            
            $log_tarefa->save();


            return redirect('/pauta');  

        } 
        catch (Exception $e) {
            Log::info(get_class($e)." | ".$e->getMessage());
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = JWTAuth::toUser(JWTAuth::getToken());
        $pauta = Tarefa::where('id_tarefa',$id)->first();

        $pauta->persona = $user->projetos()->join('personas', 'personas.id_projeto', 'projetos.id_projeto')->select('personas.*')->where('projeto_ativo', '1')->get();
        
        $pauta->tipos = $tipos = \App\TipoTarefa::get();

        return view('pauta_detalhes',  ['pauta' => $pauta]);
        
    }
    public function showdetail($id)
    {

        $user = JWTAuth::toUser(JWTAuth::getToken());
        $pauta = Tarefa::where('id_tarefa',$id)->first();

        $pauta->persona = $user->projetos()->join('personas', 'personas.id_projeto', 'projetos.id_projeto')->select('personas.*')->where('projeto_ativo', '1')->get();
        $pauta->tipos = $tipos = \App\TipoTarefa::get();

        return view('pauta_editar',  ['pauta' => $pauta]);
        
    }
    public function conteudodetalhes($id)
    {

        $user = JWTAuth::toUser(JWTAuth::getToken());
        $pauta = Tarefa::where('id_tarefa',$id)->first();

        $pauta->log = $pauta->log_tarefas()->where('status', '=', '1')->first();

        //dd($pauta->log);
        $pauta->comentarios = $pauta->comentarios()->join('usuarios', 'usuarios.id', 'comentarios.id_usuario')->get();
        $pauta->publicacoes = $pauta->publicacoes()->first();
        
        return view('conteudo_detalhes',  ['pauta' => $pauta]);
        
    }
    public function conteudodetalheseditar($id)
    {

        $user = JWTAuth::toUser(JWTAuth::getToken());
        $pauta = Tarefa::where('id_tarefa',$id)->first();

        $pauta->log = $pauta->log_tarefas()->where('status', '=', '1')->first();

        //dd($pauta->log);
        $pauta->comentarios = $pauta->comentarios()->join('usuarios', 'usuarios.id', 'comentarios.id_usuario')->get();
        $pauta->publicacoes = $pauta->publicacoes()->first();
        
        return view('conteudo_detalhes_editar',  ['pauta' => $pauta]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $user = JWTAuth::toUser(JWTAuth::getToken());
            $pauta = Tarefa::where('id_tarefa', $id)->first();
            $info = $request->all();
            $pauta->fill($info);
            
            $pauta->save();

            $pauta->persona = $user->projetos()->join('personas', 'personas.id_projeto', 'projetos.id_projeto')->select('personas.*')->where('projeto_ativo', '1')->get();
            $pauta->tipos = $tipos = \App\TipoTarefa::get();

            return view('pauta_editar',  ['pauta' => $pauta], ['message' => 'Dados atualizados com sucesso!']);
        }
        catch (\Throwable $e) {

            return view('pauta_editar',  ['pauta' => $request], ['error' => 'Falha ao atualizar os dados']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarefa = Tarefa::where('id_tarefa', $id)->first();

        $tarefa->delete();

        $user = JWTAuth::toUser(JWTAuth::getToken());

        $tarefas = $user->log_tarefas()->join('tarefas', 'tarefas.id_tarefa', 'log_tarefas.id_tarefa')->join('personas', 'tarefas.id_persona', 'personas.id_persona')->join('tipo_tarefa','tarefas.id_tipo','tipo_tarefa.id_tipo')->get();

        return view('pautas',  ['tarefas' => $tarefas]);

        return redirect('persona');
    }
}
