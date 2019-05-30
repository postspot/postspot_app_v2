<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ROTAS ABERTAS
Route::view('/'                         ,       'login');
Route::view('/entrar'                   ,       'login');
Route::view('/criar-conta'              ,       'criar_conta');
Route::view('/confirme_email'           ,       'confirme_email');
Route::view('/recupera-senha'           ,       'recupera_senha');
Route::view('/confirma_recupera_senha'  ,       'confirma_recupera_senha');
Route::view('/trocar_senha'             ,       'trocar_senha');


Route::group(['middleware' => ['jwt.verify']], function() {
    
    //SPRINT 1 - CADASTRO DO USUARIO E LOGIN
    Route::view('/criar_conta_nome'                 ,       'criar_conta_nome');
    Route::view('/verificar_email'                  ,       'verificar_email');
    Route::view('/criar_conta_negocio'              ,       'criar_conta_negocio');
    Route::view('/criar_conta_midias'               ,       'criar_conta_midias');
    Route::view('/criar_conta_conteudo'             ,       'criar_conta_conteudo');
    Route::view('/criar_conta_montagem'             ,       'criar_conta_montagem');

    //SPRINT 2 - DADOS DO PERFIL
    Route::view('/dashboard'                        ,       'dashboard');
    Route::view('/perfil/informacoes'               ,       'perfil_informacoes');
    Route::view('/perfil/seguranca'                 ,       'perfil_seguranca');

    //SPRINT 3 - PROJETO
    Route::get('/estrategia/projeto'                ,       'ProjetoController@index');

    //SPRINT 4 - ESTRATEGIA
    Route::get('/estrategia/presenca'               ,       'EstrategiaController@index');
    Route::get('/estrategia/negocio'                ,       'EstrategiaController@indexnegocio');
    Route::get('/estrategia/tomevoz'                ,       'EstrategiaController@indextom');

    //SPRINT 5 - PERSONA
    Route::get('/persona'                           ,       'PersonaController@index');
    Route::view('/persona/criar'                    ,       'persona_criar');
    Route::get('/persona/{id}'                      ,       'PersonaController@show');
    Route::get('/persona/detalhes/{id}'             ,       'PersonaController@showdetail');

    //SPRINT 6 - PAUTAS
    Route::get('/pauta'                             ,       'TarefaController@index');
    Route::get('/pautas/filtro/{id}'                ,       'TarefaController@indexfiltro');
    Route::get('/pauta/detalhes/{id}'               ,       'TarefaController@show');
    Route::get('/pauta/editar/{id}'                 ,       'TarefaController@showdetail');
    Route::get('/pauta/criar'                       ,       'TarefaController@indexCriar');

     //SPRINT 7 - CONTEÚDOS
     Route::get('/conteudos'                        ,       'TarefaController@indexconteudos');
     Route::get('/conteudos/filtro/{id}'            ,       'TarefaController@indexconteudosfiltro');
     Route::get('/conteudo/detalhes/{id}'           ,       'TarefaController@conteudodetalhes');
     Route::get('/conteudo/detalhes/editar/{id}'    ,       'TarefaController@conteudodetalheseditar');
     Route::get('/conteudo/detalhes/pauta/{id}'     ,       'TarefaController@conteudodetalhespauta');
     Route::get('/conteudo/detalhes/historico/{id}' ,       'TarefaController@conteudodetalheshistorico');
   
});

Route::view('/boas_vindas'              ,       '/mails/conteudo_aprovar');
//Route::view('/esqueceu_senha'           ,       '/mails/esqueceu_senha');
//Route::view('/confirma_recupera_senha'  ,       '/mails/confirma_recupera_senha');

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return JWTAuth::toUser(JWTAuth::getToken());
});*/


//Route::view('/criar_conta_nome', 'criar_conta_nome');
//Route::view('/projetos', 'projetos');

//Conta e cobrança

//Route::view('/perfil/seguranca', 'perfil_seguranca');

//Conta e cobrança
Route::view('/conta/produtos', 'conta_cobranca_produtos');
Route::view('/conta/informacoes', 'conta_cobranca_informacoes');
Route::view('/conta/usuarios', 'conta_cobranca_usuarios');
Route::view('/conta/transacoes', 'conta_cobranca_transacoes');
Route::view('/conta/metodos', 'conta_cobranca_metodos');

//Estrategia





//Conteúdos


//Criar Conta

//Route::view('/criar-conta-negocio', 'criar_conta_negocio');
//Route::view('/criar-conta-midias', 'criar_conta_midias');
//Route::view('/criar-conta-midias/{project->id_projeto}', 'criar_conta_midias');


//AUTENTICAR
//Route::post('/autenticar', 'Autenticador@autenticar')->name('autenticar');

//CRIAR USUÁRIO
Route::post('/criar_conta', 'Usuario@store');

//CRIAR PROJETO
Route::post('/criar_projeto', 'Projeto@store');

//CRIAR ESTRATEGIA
Route::post('/criar_estrategia/{id_projeto}', 'Estrategia@store');

//UPDATES
Route::put('/update_nome/{id_usuario}', 'Usuario@updatenome');


Route::view('/examples/plugin', 'examples.plugin');
Route::view('/examples/blank', 'examples.blank');