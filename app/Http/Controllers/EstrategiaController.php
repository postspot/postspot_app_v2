<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projeto;
use App\Estrategia;
use JWTAuth;

class EstrategiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
