<?php

namespace App\Http\Middleware;

    use Closure;
    use JWTAuth;
    use Exception;
    use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
    use Illuminate\Http\Request;
    use Tymon\JWTAuth\Token;

    class JwtMiddleware extends BaseMiddleware
    {

        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle(Request $request, Closure $next)
        {
         
            try {

                if(isset($_COOKIE['token'])){
                    
                    $temp = $_COOKIE['token'];

                    $request->headers->set('Authorization', 'Bearer '.$temp);

                    $token = new Token($temp);
                    
                    $user = JWTAuth::toUser(JWTAuth::getToken());
                   
                }
                else{
                   
                    return redirect('entrar')->with('error','teste');
                }
            } 
            catch (Exception $e) {
                if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                    return view('/criar_conta')->withmessage('Erro! Falha na sessão!');
                }
                else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                    return view('/criar_conta')->withmessage('Erro! Falha na sessão!');
                }
                else{
                    return view('/criar_conta')->withmessage('Erro! Falha na sessão!');
                }
            }

            return $next($request);
        }
    }
