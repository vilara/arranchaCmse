<?php

namespace App\Http\Controllers\Cuba\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthCubaController extends Controller
{
    public function index(){
        return view('cuba.cuba-auth.login');
    }
}
