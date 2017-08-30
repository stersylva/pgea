<?php
namespace pgea\Http\Controllers;

use pgea\Extensao;
use Request;
use Illuminate\Support\Facades\DB;

class ExtensaoController extends Controller {

        public function lista(){
            $extensao = Extensao::all(); //metodo all retorna todos os dados da tabela igual ao select * from extensao;
            return view('extensao.listagem_extensao')->with('extensao',$extensao);
        }


        public function mostra($id){
            $resposta = Extensao::find($id);//find($id) retorna todos os dados daquele id setado
                if(empty($resposta)){
                    return "Essa extensão não existe";
                }
            return view('extensao.detalhes_extensao')->with('e', $resposta);
        }


        public function remove($id){
            $extensao = Extensao::find($id);
            $extensao->delete();
            return redirect('/extensoes');
        }


        public function nova(){
            return view('extensao.formulario_extensao');
        }


        public function adiciona(){
            Extensao::create(Request::all());
            return redirect('/extensoes')->withInput();
               // ->action('ExtensaoController@index')
               // ->withInput(Request::only('titulo'));
        }
}
