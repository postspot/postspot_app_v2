<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comentario;
use JWTAuth;
use Exception;
use Symfony\Component\Debug\Exception\FatalThrowableError;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());

        $personas = $user->projetos()->join('personas', 'personas.id_projeto', 'projetos.id_projeto')->select('personas.*')->where('projeto_ativo', '1')->get();

       // dd($personas);

        return view('persona',  ['personas' => $personas]);
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

            //criar novo projeto
            $comentario = new Comentario;
            $info = $request->all();

            $comentario->fill($info);

            $comentario->save();

            dd($comentario);
            return \Illuminate\Support\Facades\Redirect::to('/persona')->withMessage('mensagem');  

        } 
        catch (Exception $e) {
            \Log::info(get_class($e)." | ".$e->getMessage());
            return view('persona_criar',  ['error' => 'Falha ao criar os persona, verifique os dados e tente novamente!']);
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
        $persona = Persona::where('id_persona',$id)->first();
        
        return view('persona_editar',  ['persona' => $persona]);
    }
    public function showdetail($id)
    {
        $user = JWTAuth::toUser(JWTAuth::getToken());
        $persona = Persona::where('id_persona',$id)->first();
        
        return view('persona_detalhes',  ['persona' => $persona]);
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
            $persona = Persona::where('id_persona', $id)->first();
            $info = $request->all();
            $persona->fill($info);
            
            $persona->save();

            return view('persona_editar',  ['persona' => $persona], ['message' => 'Dados atualizados com sucesso!']);
        }
        catch (\Throwable $e) {

            return view('persona_editar',  ['persona' => $request], ['error' => 'Falha ao atualizar os dados']);
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
        $persona = Persona::where('id_persona', $id)->first();

        $persona->delete();

        return redirect('persona');
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
