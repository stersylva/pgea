<?php
namespace pgea\Http\Controllers;

use pgea\Http\Requests\ProfissionalRequest;
use pgea\Profissional;
use pgea\Titulacao;
use pgea\Endereco;
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
        $endereco = Endereco::all();
        return view('profissional.detalhes_profissional', compact('p','endereco'));
    }

    public function remove($id){
        $profissional = Profissional::find($id);
        $profissional->delete();
        return redirect('/profissional');
    }

    public function novo(){
        $titulacao = Titulacao::all();
        $endereco = Endereco::all();
        return view('profissional.formulario_profissional', compact('titulacao', 'endereco'));
    }


    public function adiciona(ProfissionalRequest $request){
        $profissional = Profissional::create($request->all());
        $profissional->save();
        return redirect('/profissional')->withInput();
    }
}
