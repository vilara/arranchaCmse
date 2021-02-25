<?php

namespace App\Http\Middleware\Api;

use Closure;
use Exception;
use Firebase\JWT\JWT;
use Illuminate\Auth\GenericUser;

class AutenticadorJWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
           
       
            if (!$request->hasHeader('Authorization')) {
                throw new Exception();
            }

            $authorizationHeader = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $authorizationHeader);
            $dadosAutenticacao = JWT::decode($token, env('JWT'), ['HS256']);

            $user = new GenericUser(['email' => $dadosAutenticacao]);

            if(is_null($user)){
                throw new Exception();
            }
            return $next($request);
        } catch (\Exception $e) {
            return response()->json('Nao autorizado', 401);
         }

           // return User::where('email', $dadosAutenticacao->email)->first();
    }
}
