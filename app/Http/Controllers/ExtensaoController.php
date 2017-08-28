<?php
namespace pgea\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class ExtensaoController extends Controller {

        public function lista(){
            $extensao = DB::select('select * from extensao');
            return view('extensao.listagem_extensao')->with('extensao',$extensao);
        }
        public function mostra(){
            $id = Request::route('id');
            $resposta = DB::select('select * from extensao where id = ?', [$id]);
                if(empty($resposta)){
                    return "Essa extensão não existe";
                }
            return view('extensao.detalhes_extensao')->with('e', $resposta[0]);
        }
        public function nova(){
            return view('extensao.formulario_extensao');
    }
        public function adiciona(){
            //pegar as informações do formulario
            $titulo = Request::input('titulo');
            $edital = Request::input('edital');
            $cursoid = Request::input('curso');
            $datainicio = Request::input('datainicio');
            $datatermino = Request::input('datatermino');

            //adicionar no banco
            DB::insert('insert into extensao (titulo, edital, cursoid, datainicio, datatermino) VALUES (?, ?, ?, ?, ?)',
                array($titulo, $edital, $cursoid, $datainicio, $datatermino));

            return redirect('/extensoes')->withInput();
        }
}