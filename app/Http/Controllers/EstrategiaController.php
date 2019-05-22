<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projeto;
use App\Estrategia;
use JWTAuth;
use Exception;
use Symfony\Component\Debug\Exception\FatalThrowableError;

class EstrategiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        $estrategia = $user->projetos()->join('estrategias', 'estrategias.id_projeto', 'projetos.id_projeto')->select('estrategias.*')->where('projeto_ativo', '1')->first();

        return view('estrategia_presenca',  ['estrategia' => $estrategia]);
    }
    public function indexnegocio()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        $estrategia = $user->projetos()->join('estrategias', 'estrategias.id_projeto', 'projetos.id_projeto')->select('estrategias.*')->where('projeto_ativo', '1')->first();

       //dd($estrategia);

        return view('estrategia_negocio',  ['estrategia' => $estrategia]);
    }
    public function indextom()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        $estrategia = $user->projetos()->join('estrategias', 'estrategias.id_projeto', 'projetos.id_projeto')->select('estrategias.*')->where('projeto_ativo', '1')->first();

       //dd($estrategia);

        return view('estrategia_tom_e_voz',  ['estrategia' => $estrategia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = JWTAuth::toUser(JWTAuth::getToken());

        //encontrar projeto ativo
        /*$proj = Projeto::all();
        foreach ($proj as $p) {
            if($p->responsavel_projeto == $user->id){
                $ativo = $p->id_projeto;
            }
        }*/

        $ativo = $user->projetos()->where('projeto_ativo','=','1')->first();

        //criar nova estrategia
        $estrategia = new Estrategia;
        $info = $request->all();
        $estrategia->fill($info);

        $estrategia->id_projeto= $ativo->id_projeto;
        
        $estrategia->save();

        return redirect('/criar_conta_conteudo');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
    public function updatepresenca(Request $request, $id)
    {
        
        try{
            $estrategia = Estrategia::where('id_estrategia', $id)->first();
            $info = $request->all();
            $estrategia->fill($info);
            
            $estrategia->save();

            return view('estrategia_presenca',  ['estrategia' => $estrategia], ['message' => 'Dados atualizados com sucesso!']);
        }
        catch (\Throwable $e) {

            return view('estrategia_presenca',  ['estrategia' => $request], ['error' => 'Falha ao atualizar os dados']);
        }
        
    }
    public function updatenegocio(Request $request, $id)
    {
        
        try{
            $estrategia = Estrategia::where('id_estrategia', $id)->first();
            $info = $request->all();
            $estrategia->fill($info);
            
            $estrategia->save();

            return view('estrategia_negocio',  ['estrategia' => $estrategia], ['message' => 'Dados atualizados com sucesso!']);
        }
        catch (\Throwable $e) {

            return view('estrategia_negocio',  ['estrategia' => $request], ['error' => 'Falha ao atualizar os dados']);
        }
        
    }
    public function updatetom(Request $request, $id)
    {
        
        try{
            $estrategia = Estrategia::where('id_estrategia', $id)->first();
            $info = $request->all();
            $estrategia->fill($info);
            
            $estrategia->save();

            return view('estrategia_tom_e_voz',  ['estrategia' => $estrategia], ['message' => 'Dados atualizados com sucesso!']);
        }
        catch (\Throwable $e) {

            return view('estrategia_negocio',  ['estrategia' => $request], ['error' => 'Falha ao atualizar os dados']);
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
        //
    }
}
