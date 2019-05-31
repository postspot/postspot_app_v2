<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Token;
use App\Mail\ResponseEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
        //LOGIN DO USUÁRIO
        public function authenticate(Request $request)
        {
                $credentials = $request->only('email', 'password');

                try {
                        if (!$token = JWTAuth::attempt($credentials)) {
                                return view('/login')->witherror('Erro! Login e/ou senha incorretos!');
                        }

                } 
                catch (JWTException $e) {
                        return view('/login')->witherror('Erro! Falha no login, verifique seus dados e tente novamente!');
                }

                //return response()->json(compact('token'));
                $cookie = \Cookie::make('token', $token, 60 * 24 * 8);

                \Cookie::queue('token', $token, 60*24*8);

                $request->headers->set('Authorization', 'Bearer '.$token);
                
                $user = JWTAuth::toUser(JWTAuth::getToken());

                if($user->status_usuario == "2"){
        
                        if($user->name == ""){                
                                
                                return redirect('/criar_conta_nome')->withCookie($cookie);
                        }
                        else{
                                $ativo = $user->projetos()->where('projeto_ativo','=','1')->first();
                                
                                if(isset($ativo)){
                                        $estrategia = $ativo->estrategias()->first();
                                        if(isset($estrategia)){
                                                return redirect('/criar_conta_conteudo')->withCookie($cookie);    
                                        }
                                        else{
                                                return redirect('/criar_conta_midias')->withCookie($cookie);    
                                        }
                                }
                                else{
                                        return redirect('/criar_conta_negocio')->withCookie($cookie); 
                                }
                        }
                }
                else{
                        return redirect('verificar_email');
                }
                
                
        }

        //CRIAR USUARIO
        public function register(Request $request)
        {
                $validator = Validator::make($request->all(), [
                        'email' => 'required|string|email|max:255|unique:usuarios',
                        'password' => 'required|string|min:6',
                ]);

                if ($validator->fails()) {
                        return view('/criar_conta')->withmessage('Falha ao criar sua conta, verifique seus dados e tente novamente! ');
                }
                Mail::send('mails.boas_vindas', ['email'=> $request->input('email')], function($m) use($request){
                        $m->from('josebrunoom@gmail.com'. 'Postspot');
                        $m->to($request->input('email'));
                        $m->subject('Cadastro Postspot');
                });

                $user = Usuario::create([
                        'email' => $request->get('email'),
                        'password' => Hash::make($request->get('password')),
                        'status_usuario' => md5($request->get('email')),
                ]);

                $credentials = $request->only('email', 'password');
                
                try {
                        if (!$token = JWTAuth::attempt($credentials)) {
                                return view('/login')->withmessage('Erro! Login e/ou senha incorretos!');
                        }

                } 
                catch (JWTException $e) {
                        return view('/criar_conta')->withmessage('Erro! Falha no cadastro!');
                }

                $cookie = \Cookie::make('token', $token, 60 * 24 * 8);

                $request->headers->set('Authorization', 'Bearer '.$token);

                $token = new Token($token);

                $user = JWTAuth::toUser(JWTAuth::getToken());

                return redirect('/verificar_email')->withCookie($cookie);

                
        }

        //ATUALIZA NOME E SOBRENOME
        public function updatenome(Request $request){
                try {
                        $validator = Validator::make($request->all(), [
                                'nome' => 'string|max:255',
                                'sobrenome' => 'string',
                        ]);

                        if ($validator->fails()) {
                                return view('/criar_conta')->withmessage('Erro! Falha na atualização!');
                        }

                        $user = JWTAuth::toUser(JWTAuth::getToken());

                        //dd(JWTAuth::getToken());

                        $data = $request->only(['name', 'sobrenome']);
                        
                        $user->fill($data);

                        if ($request->get('password'))
                                $user->password = Hash::make($request->get('password'));

                        $user->save();

                        return redirect('/criar_conta_negocio');       
                } 
                catch (ModelNotFoundException $e) {
                        //Log::info(get_class($e) . ' | ' . $e->getMessage());
                        return view('/criar_conta')->withmessage('Erro! Falha na atualização!');
                } 
                catch (Exception $e) {
                        //Log::info(get_class($e) . ' | ' . $e->getMessage());
                        return view('/criar_conta')->withmessage('Erro! Falha na atualização!');
                }
        }

        //ATUALIZA EMAIL EM CASO PERDIDO
        public function updateemail(Request $request){
                
                try {
                        $validator = Validator::make($request->all(), [
                                'email' => 'string|max:255',
                                'senha' => 'string',
                        ]);

                        if ($validator->fails()) {
                                return view('/criar_conta')->withmessage('Erro! Falha na atualização!');
                        }

                        $data = $request->only(['email', 'senha']);

                        $user = JWTAuth::toUser(JWTAuth::getToken());

                        $user->fill($data);
                        $user->status_usuario = md5($request->email);

                        if ($request->get('password'))
                                $user->password = Hash::make($request->get('password'));

                        $user->save();

                        $credentials = $request->only('email', 'password');
                
                        try {
                                if (!$token = JWTAuth::attempt($credentials)) {
                                        return view('/criar_conta')->withmessage('Erro! Falha na atualização!');
                                }

                        } 
                        catch (JWTException $e) {
                                return response()->json(['error' => 'could_not_create_token'], 500);
                        }

                        Mail::send('mails.boas_vindas', ['email'=> $request->input('email')], function($m) use($request){
                                $m->from('josebrunoom@gmail.com'. 'Postspot');
                                $m->to($request->input('email'));
                                $m->subject('Cadastro Postspot');
                        });

                        $cookie = \Cookie::make('token', $token, 60 * 24 * 8);

                        $request->headers->set('Authorization', 'Bearer '.$token);

                        $token = new Token($token);

                        $user = JWTAuth::toUser(JWTAuth::getToken());

                        return redirect('/verificar_email')->withCookie($cookie);      
                } 
                catch (ModelNotFoundException $e) {
                        //Log::info(get_class($e) . ' | ' . $e->getMessage());
                        return view('/criar_conta')->withmessage('Erro! Falha na atualização!');
                } 
                catch (Exception $e) {
                        //Log::info(get_class($e) . ' | ' . $e->getMessage());
                        return view('/criar_conta')->withmessage('Erro! Falha na atualização!');
                }
        }

        //VALIDA EMAIL 
        public function validateemail($email) {

                //dd($email);

                $usuario = Usuario::where("status_usuario",$email)->first();

                if(isset($usuario)){
                        $usuario->status_usuario = 2;

                        $usuario->save();

                        return view('/login')->withmessage('Email validado com sucesso, acesse a plataforma agora mesmo!');
                }
                else{
                        return view('/login')->withmessage('O link já foi validado ou deixou de ser válido!');
                }
        }

        //VALIDA MD5 PARA ACESSAR OPÇÃO DE NOVA SENHA
        public function validaesqueci($email) {

                $usuario = Usuario::where("recupera_senha",$email)->first();

                if(isset($usuario)){
                        return view('/trocar_senha')->withid($usuario->id);
                }
                else{
                        return view('/login')->withmessage('O link já foi validado ou é invalido!');
                }
        }

        //SOLICITAÇÃO DE NOVA SENHA PELO USUARIO
        public function recoverpassword(Request $request)
        {

                $usuario = Usuario::where("email",$request->email)->first();

                if(isset($usuario)){
                        Mail::send('mails.esqueceu_senha', ['email'=> $request->input('email')], function($m) use($request){
                                $m->from('josebrunoom@gmail.com'. 'Postspot');
                                $m->to($request->input('email'));
                                $m->subject('Redefina sua senha Postspot');
                        });

                        $usuario->recupera_senha = md5($usuario->email);

                        $usuario->save();

                        return view('/confirma_recupera_senha')->withemail($usuario->email);
                }
                else{
                        return view('/recupera_senha')->witherror('Erro! Email não cadastrado em nosso sistema');
                }

        }

        //ALTERAÇÃO REAL DA SENHA A PARTIR DO ID DO USUARIO
        public function newpassword(Request $request, $email) {

                $usuario = Usuario::where("id",$email)->first();

                if(isset($usuario)){
                        
                        $usuario->password = Hash::make($request->get('password'));
                        $usuario->recupera_senha = '0';
                        $usuario->save();

                        return view('/login')->withmessage("Senha alterada com sucesso!");
                }
                else{
                        return view('/trocar_senha')->withmessage('O link já foi validado ou é invalido!');
                }
        }
        //ALTERAÇÃO DA SENHA A PARTIR DO ID DO USUARIO NO PERFIL
        public function alterasenha(Request $request, $email) {

                $usuario = Usuario::where("id",$email)->first();

                if(isset($usuario)){
                        
                        $usuario->password = Hash::make($request->get('password'));
                        $usuario->recupera_senha = '0';
                        $usuario->save();

                        return view('/perfil_seguranca')->withmessage("Dados alterados com sucesso!");
                }
                else{
                        return view('/perfil_seguranca')->withmessage('Falha ao alterar a senha!');
                }
        }

        //ATUALIZA EMAIL EM CASO PERDIDO
        public function updateperfil(Request $request){
                
                try {
                        $validator = Validator::make($request->all(), [
                                'name' => 'string|max:255',
                                'sobrenome' => 'string',
                                'email' => 'required|string|email|max:255',
                        ]);

                        if ($validator->fails()) {
                                return view('/login')->withmessage('Erro! Falha na atualização!');
                        }

                        $retorno = '/perfil_informacoes';

                        $data = $request->only(['name', 'sobrenome', 'email']);

                        $user = JWTAuth::toUser(JWTAuth::getToken());

                        if($user->email != $request->email){

                                Mail::send('mails.boas_vindas', ['email'=> $request->input('email')], function($m) use($request){
                                        $m->from('josebrunoom@gmail.com'. 'Postspot');
                                        $m->to($request->input('email'));
                                        $m->subject('Cadastro Postspot');
                                });

                                $user->status_usuario = md5($request->email);

                                $retorno = '/login';
                        }

                        $user->fill($data);

                        if ($request->hasFile('image')) {
                                $upload = $request->image->storeAs('temp', $request->file('image')->getClientOriginalName());
                                Storage::delete("temp/{$user->foto_usuario}");
                                $user->foto_usuario = $request->file('image')->getClientOriginalName();
                        }

                        $user->save();

                        return view($retorno)->withmessage('Dados atualizados com sucesso');      
                } 
                catch (ModelNotFoundException $e) {
                        //Log::info(get_class($e) . ' | ' . $e->getMessage());
                        return view('/criar_conta')->withmessage('Erro! Falha na atualização!');
                } 
                catch (Exception $e) {
                        //Log::info(get_class($e) . ' | ' . $e->getMessage());
                        return view('/criar_conta')->withmessage('Erro! Falha na atualização!');
                }
        }



        public function getAuthenticatedUser()
        {
                try {

                        if (!$user = JWTAuth::parseToken()->authenticate()) {
                            return response()->json(['user_not_found'], 404);
                        }

                } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

                        return response()->json(['token_expired'], $e->getStatusCode());

                } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

                        return response()->json(['token_invalid'], $e->getStatusCode());

                } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

                        return response()->json(['token_absent'], $e->getStatusCode());

                }

                return response()->json(compact('user'));
        }
}
