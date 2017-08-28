<?php
namespace pgea\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class ProfissionalController extends Controller {
    public function lista(){
        $profissional = DB::select('select * from profissional');
        return view('profissional.listagem_profissional')->with('profissional',$profissional);
    }
    public function mostra(){
        $id = Request::route('id');
        $resposta = DB::select('select * from profissional where id = ?', [$id]);
        if(empty($resposta)){
            return "Esse profissional não existe";
        }
        return view('profissional.detalhes_profissional')->with('p', $resposta[0]);
    }
    public function novo(){
        return view('profissional.formulario_profissional');
    }
    public function adiciona(){
        //pegar as informações do formulario
        $nome = Request::input('nome');
        $cpf = Request::input('cpf');
        $rg = Request::input('rg');
        $codigo = Request::input('codigo');
        $email = Request::input('email');
        $sexo = Request::input('sexo');
        $datanasci = Request::input('datanasci');

        //adicionar no banco
        DB::insert('insert into profissional (nome, cpf, rg, codigo, email, sexo, datanasci) VALUES (?, ?, ?, ?, ?, ?, ?)',
            array($nome, $cpf, $rg, $codigo, $email, $sexo, $datanasci));

        return redirect('/profissional')->withInput();
    }
}