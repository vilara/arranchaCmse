<?php

namespace App\Http\Controllers\Cuba\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class LoginCubaController extends Controller
{
    public function login(Request $request)
    {

        $response = Http::post('localhost:8080/auth', [
            'email' => $request->get('email'),
            'senha' => $request->get('senha')
        ]);
        return $response->clientError();
    }

    public function mostrar(Request $request)
    {
        $response = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJHZXJhw6fDo28gYWx1cmEiLCJzdWIiOiIzIiwiaWF0IjoxNjE0MDE5NDcwLCJleHAiOjE2MTQxMDU4NzB9.P7l6Iafy3Kv26vOowWBGa8h1B9-zLvjUsms2TWD54QA')->get('localhost:8080/topicos/2');
        return $response->body();
    }

}
