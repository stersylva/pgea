<?php

namespace pgea\Http\Controllers;
use pgea\Login;
use pgea\Http\Requests\LoginRequest;
use Request;
use Validator;
use Auth;


class LoginController extends Controller
{
    public function form(){
        return view('login');
    }
    public function login(){
       $credenciais = Request::only('email', 'password');
        if(Auth::attempt($credenciais)){
            return view('layout/temp');
        }
        return 'usuario não existe';
    }
}
