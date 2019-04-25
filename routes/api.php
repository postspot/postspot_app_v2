<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//USER
Route::post('register'                              ,       'UserController@register');
Route::post('login'                                 ,       'UserController@authenticate');
Route::put('update_nome'                            ,       'UserController@updatenome');
Route::post('confirm_email'                         ,       'UserController@updateemail');
Route::get('validar/{email}'                        ,       'UserController@validateemail');
Route::post('recuperar_senha'                       ,       'UserController@recoverpassword');
Route::get('trocar_senha/{email}'                   ,       'UserController@validaesqueci');
Route::put('new_password/{email}'                   ,       'UserController@newpassword');


//PROJETO
Route::post('cria_projeto'                          ,       'ProjetoController@store');
Route::put('atualiza_projeto/{id_projeto}'          ,       'ProjetoController@update');

//ESTRATEGIA
Route::post('criar_estrategia'                      ,       'EstrategiaController@store');
Route::put('atualiza_presenca/{id_estrategia}'      ,       'EstrategiaController@updatepresenca');
Route::put('atualiza_negocio/{id_estrategia}'       ,       'EstrategiaController@updatenegocio');
Route::put('atualiza_tom/{id_estrategia}'           ,       'EstrategiaController@updatetom');

//PERFIL
Route::put('updateperfil/{id}'                      ,       'UserController@updateperfil');
Route::put('updatesenha/{id}'                       ,       'UserController@alterasenha');

//PERSONA
Route::put('editar_persona/{id}'                    ,       'PersonaController@update');
Route::delete('deletar_persona/{id}'                ,       'PersonaController@destroy');
Route::post('cria_persona'                          ,       'PersonaController@store');

//PAUTAS
Route::post('criar_pauta'                           ,       'TarefaController@store');
Route::put('editar_pauta/{id}'                      ,       'TarefaController@update');
Route::delete('deletar_pauta/{id}'                  ,       'TarefaController@destroy');
Route::post('solicitar_pauta/{id}'                  ,       'TarefaController@solicitar');


Route::get('open', 'DataController@open');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('closed', 'DataController@closed');
});
