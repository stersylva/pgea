<?php

namespace pgea\Http\Controllers;
//use pgea\Http\Request;
use Request;
use pgea\Http\Controllers\Controller;
use Auth;



class LoginController extends Controller
{
   public function form(){
       return view('login.form_login');
   }
   public function login(){
       $credenciais = Request::only('email', 'password');
       if(Auth::attempt($credenciais)){
           return 'usuario está logado';
       }
        return 'usuario ou senha não existe';
   }
}
