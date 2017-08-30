<?php
namespace pgea\Http\Controllers;

use pgea\Profissional;
use Request;
use Illuminate\Support\Facades\DB;

class ProfissionalController extends Controller {
    public function lista(){
        $profissional = Profissional::all();
        return view('profissional.listagem_profissional')->with('profissional',$profissional);
    }

    public function mostra($id){
        $resposta = Profissional::find($id);
        if(empty($resposta)){
            return "Esse profissional não existe";
        }
        return view('profissional.detalhes_profissional')->with('p', $resposta);
    }

    public function remove($id){
        $profissional = Profissional::find($id);
        $profissional->delete();
        return redirect('/profissional');
    }

    public function novo(){
        return view('profissional.formulario_profissional');
    }


    public function adiciona(){
        Profissional::create(Request::all());
        return redirect('/profissional')->withInput();
    }
}
