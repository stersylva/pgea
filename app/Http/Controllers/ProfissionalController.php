<?php

namespace pgea\Http\Controllers;

use Illuminate\Http\Request;
use pgea\Endereco;
use pgea\Estado;
use pgea\Http\Requests\ProfissionalRequest;
use pgea\Profissional;
use pgea\Titulacao;

class ProfissionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profissionais = Profissional::all();
        return view('profissional.listagem_profissional')->with('profissional',$profissionais);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $titulacao = Titulacao::all();
        $estado = Estado::all();
        return view('profissional.formulario_profissional', compact('titulacao', 'estado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfissionalRequest $request)
    {
        $endereco = new Endereco;
        $endereco->logradouro = $request->get('logradouro');
        $endereco->numero = $request->get('numero');
        $endereco->complemento = $request->get('complemento');
        $endereco->bairro = $request->get('bairro');
        $endereco->cidade = $request->get('cidade');
        $endereco-> estado_id = $request->get('estado_id');

        $endereco->save();
        $endereco_id = $endereco->id;

        $profissional = new Profissional;
        $profissional-> nome = $request->get('nome');
        $profissional-> cpf = $request->get('cpf');
        $profissional-> rg = $request->get('rg');
        $profissional-> codigo = $request->get('codigo');
        $profissional-> email = $request->get('email');
        $profissional-> data_nascimento = $request->get('data_nascimento');

        $profissional-> titulacao_id = $request->get('titulacao_id');
        $profissional->endereco_id = $endereco_id;
        $profissional->save();

        return redirect('profissional')->with('message', 'O Profissional foi adicionado com Sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resposta = Profissional::find($id);//find($id) retorna todos os dados daquele id setado
        if(empty($resposta)){
            return "Esse profissional não existe";
        }
        return view('profissional.detalhes_profissional')->with('p', $resposta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profissionais = Profissional::find($id);
        return view('profissional.formulario_profissional', compact('profissionais'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfissionalRequest $request, $id)
    {
        $endereco = Endereco::find($id);
        $endereco->logradouro = $request->get('logradouro');
        $endereco->numero = $request->get('numero');
        $endereco->complemento = $request->get('complemento');
        $endereco->bairro = $request->get('bairro');
        $endereco->cidade = $request->get('cidade');
        $endereco-> estado_id = $request->get('estado_id');

        $endereco->save();
        $endereco_id = $endereco->id;

        $profissional = Profissional::find($id);
        $profissional-> nome = $request->get('nome');
        $profissional-> cpf = $request->get('cpf');
        $profissional-> rg = $request->get('rg');
        $profissional-> codigo = $request->get('codigo');
        $profissional-> email = $request->get('email');
        $profissional-> data_nascimento = $request->get('data_nascimento');

        $profissional-> titulacao_id = $request->get('titulacao_id');
        $profissional->endereco_id = $endereco_id;
        $profissional->save();

        return redirect('profissional')->with('message', 'O Profissional foi adicionado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profissionais = Profissional::find($id);
        $profissionais->delete();
        return redirect('/profissional');
    }
}
