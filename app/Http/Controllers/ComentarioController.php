<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comentario;
use JWTAuth;
use Exception;
use Symfony\Component\Debug\Exception\FatalThrowableError;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());

        $comentarios = $user->projetos()->join('comentarios', 'comentarios.id_projeto', 'projetos.id_projeto')->select('comentarios.*')->where('projeto_ativo', '1')->get();

       // dd($comentarios);

        return view('comentario',  ['comentarios' => $comentarios]);
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

            // dd($request);
            
            $user = JWTAuth::toUser(JWTAuth::getToken());
            
            //criar novo projeto
            $comentario = new Comentario;
            
            $info = $request->all();
            
            $comentario->fill($info);
            
            $comentario->id_usuario = $user->id;
            
            $comentario->save();

            
            
            return \Illuminate\Support\Facades\Redirect::to('/conteudo/detalhes/'.$request->id_tarefa)->withMessage('mensagem');  

        } 
        catch (Exception $e) {
            \Log::info(get_class($e)." | ".$e->getMessage());
            return view('conteudo_detalhes',  ['error' => 'Falha ao criar os comentario, verifique os dados e tente novamente!']);
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
        $comentario = comentario::where('id_comentario',$id)->first();
        
        return view('comentario_editar',  ['comentario' => $comentario]);
    }
    public function showdetail($id)
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        $comentario = comentario::where('id_comentario',$id)->first();
        
        return view('comentario_detalhes',  ['comentario' => $comentario]);
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
            $comentario = comentario::where('id_comentario', $id)->first();
            $info = $request->all();
            $comentario->fill($info);
            
            $comentario->save();

            return view('comentario_editar',  ['comentario' => $comentario], ['message' => 'Dados atualizados com sucesso!']);
        }
        catch (\Throwable $e) {

            return view('comentario_editar',  ['comentario' => $request], ['error' => 'Falha ao atualizar os dados']);
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
        $comentario = comentario::where('id_comentario', $id)->first();

        $comentario->delete();

        return redirect('comentario');
    }

    private function rules()
    {
        return [
            'nome' => 'required',
            'idade' => 'required|numeric',
            'caracteristicas' => 'required',
            'educacao' => 'required',
            'cargo' => 'required',
            'segmentos' => 'nullable',
        ];
    }

    private function messages()
    {
        return [
            "required" => "O campo :attribute é obrigatório.",
            "numeric" => "O campo :attribute precisa conter apenas números.",
            "regex" => "O campo :attribute pode conter apenas caracteres alfanuméricos e espaços.",
            "json" => "O campo :attribute precisa ser um JSON.",
            "min" => "O campo :attribute deve conter no mínimo :min caracteres.",
            "max" => "O campo :attribute deve conter no máximo :max caracteres.",
            "date_format" => "O campo :attribute deve estar no formato dd/mm/yyyy",
        ];
    }
}
