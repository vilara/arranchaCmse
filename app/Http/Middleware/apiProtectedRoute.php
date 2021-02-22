<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class apiProtectedRoute extends BaseMiddleware
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
           $user = JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {
           if($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
               return response()->json(['status' => 'Token is invalid']);
           } else if($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
            return response()->json(['status' => 'Token is espired']);
           }else{
            return response()->json(['status' => 'Authorization token not found']);
           }
        }
        return $next($request);
    }




    
}
