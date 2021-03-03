<?php

namespace App\Http\Controllers\Cuba\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Http;
use Tymon\JWTAuth\Contracts\Providers\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\JWTAuth as JWTAuthJWTAuth;

class LoginCubaController extends Controller
{
    public function login(Request $request)
    {

        $response = Http::post('localhost:8080/auth', [
            'email' => $request->get('email'),
            'senha' => $request->get('senha')
        ]);
        $objectToken =  JWTAuth::setToken($response->json()['token']);
        
      //  return JWTAuth::decode($objectToken->getToken())->get('exp');
       //return "auth('api')";
        return ;
      //  return $tok;

    }

    public function mostrar(Request $request)
    {
      //return JWTAuth::getToken();
       // $objectToken = JWTAuth::getToken();
       //  $response = Http::withToken($token)->get('localhost:8080/');

       

         // return Auth::guard('api')->user();
         return "Brasil";
    }

}
