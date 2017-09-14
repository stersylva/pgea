<?php
namespace pgea\Http\Controllers;

use pgea\Extensao;
use pgea\Curso;
use pgea\Http\Requests\ExtensaoRequest;
use Request;
use Validator;
use Illuminate\Support\Facades\DB;

class ExtensaoController extends Controller {

        public function __construct()
        {
            $this->middleware('autorizador');
        }

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
            return view('extensao.formulario_extensao')->with('curso', Curso::all());

        }


        public function adiciona(ExtensaoRequest $request){
            Extensao::create($request->all());
            return redirect('/extensoes')->withInput();

        }
}
