<?php

namespace pgea\Http\Controllers;

use Illuminate\Http\Request;
use pgea\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $curso = Curso::all();
        return view('curso.curso_list')->with('curso', $curso);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('curso.curso_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $curso = new Curso;
        $curso-> nome = $request->get('nome');
        $curso->save();
        return redirect('curso')->with('message', 'O curso foi adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $resposta = Curso::find($id);//find($id) retorna todos os dados daquele id setado
        if(empty($resposta)){
            return "Esse curso não existe";
        }

        return view('curso.Curso_list')->with('c', $resposta);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $curso = Curso::find($id);
        return view('curso.Curso_edit' , array('curso' => $curso));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $curso = Curso::find($id);

        if ($_POST) {

            $curso->nome = $request->get('nome');
            $curso->save();
            return redirect('curso')->with('message', 'O curso foi alterado com sucesso!');
        }else{
            return view('curso.Curso_edit' , array('curso' => $curso));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $curso = Curso::find($id);
        $curso->delete();
        return redirect('curso');

    }
}
