<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projeto;
use App\Usuario;
use JWTAuth;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        $proj = $user->projetos()->where('projeto_ativo', '1')->first();

        //dd($proj);

        return view('estrategia_projeto',  ['proj' => $proj]);
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
        try {

            $user = JWTAuth::toUser(JWTAuth::getToken());

            //desativar projetos do usuario
            $proj = $user->projetos()->get();
            foreach ($proj as $p) {
                $p->projeto_ativo = 0;
                $p->save();
            }

            

            //criar novo projeto
            $projeto = new Projeto;
            $info = $request->all();
            $projeto->fill($info);

            $projeto->responsavel_projeto= $user->id;
            
            $projeto->save();

            return redirect('/criar_conta_midias');  

        } 
        catch (Exception $e) {
            Log::info(get_class($e)." | ".$e->getMessage());
            return response()->json([
                'title'=>'Erro desconhecido',
                'message'=>'Erro ao cadastrar projeto.',
                'exception'=>$e->getMessage()
            ],500);
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
        try{

            $projeto = Projeto::where('id_projeto', $id)->first();
            $info = $request->all();
            $projeto->fill($info);
            
            $projeto->save();

            return view('estrategia_projeto',  ['proj' => $projeto], ['message' => 'Dados atualizados com sucesso!']);
        }
        catch (\Throwable $e) {

            return view('estrategia_projeto',  ['proj' => $request], ['error' => 'Falha ao atualizar os dados']);
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
