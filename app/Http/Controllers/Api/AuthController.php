<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Namshi\JOSE\Base64\Base64UrlSafeEncoder;
use Symfony\Component\Mime\Encoder\Base64Encoder;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function index(){
        return view('site.home');
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function gerarToken(Request $request){

        $this->validate($request, [
          'email' => 'required|email',
        'senha' =>  'required'
        ]);
        
         $user = User::where('email', $request->email)->first();
        
         
         
           if(is_null($user) || !Hash::check($request->senha, $user->password)){
                   return response()->json('Não autorizado', 401);
               }
             

               
               
               $token = JWT::encode(['sub' => $user->id], 'qwertypassword');

               $objectToken =  JWTAuth::setToken($token);
               
          //return JWTAuth::decode($objectToken->getToken())->get('exp');
         // return JWTAuth::decode($objectToken->getToken())->get('sub');

         //return Auth('api')::user();

        // return JWTAuth::parseToken()->authenticate();
        
     return $this->respondWithToken($token) ;

    }




    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
      /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
