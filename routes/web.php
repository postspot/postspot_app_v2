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
    Route::view('/criar_conta_nome'     ,       'criar_conta_nome');
    Route::view('/verificar_email'      ,       'verificar_email');
    Route::view('/criar_conta_negocio'  ,       'criar_conta_negocio');
    Route::view('/criar_conta_midias'   ,       'criar_conta_midias');
    Route::view('/criar_conta_conteudo' ,       'criar_conta_conteudo');
    Route::view('/criar_conta_montagem' ,       'criar_conta_montagem');

    //SPRINT 2 - DADOS DO PERFIL
    Route::view('/dashboard'            ,       'dashboard');
    Route::view('/perfil/informacoes'   ,       'perfil_informacoes');
    Route::view('/perfil/seguranca'     ,       'perfil_seguranca');
   
});

//Route::view('/boas_vindas'              ,       '/mails/boas_vindas');
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
Route::view('/estrategia/projeto', 'estrategia_projeto');
Route::view('/estrategia/negocio', 'estrategia_negocio');
Route::view('/estrategia/presenca', 'estrategia_presenca');
Route::view('/estrategia/tomevoz', 'estrategia_tom_e_voz');

//Persona
Route::view('/persona', 'persona');
Route::view('/persona/detalhes', 'persona_detalhes');
Route::view('/persona/editar', 'persona_editar');

//Pautas
Route::view('/pautas', 'pautas');
Route::view('/pauta/detalhes', 'pauta_detalhes');

//Conteúdos
Route::view('/conteudos', 'conteudos');

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