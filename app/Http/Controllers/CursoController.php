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
<<<<<<< HEAD
        $curso = Curso::all();
        return view('curso.curso_list')->with('curso', $curso);
=======
        $cursos = Curso::all();
        return view('curso.listagem_curso')->with('curso',$cursos);
>>>>>>> master
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD

        return view('curso.curso_form');
=======
        //
>>>>>>> master
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function store(Request $request)
    {
        $curso = new Curso;
        $curso-> nome = $request->get('nome');
        $curso->save();
        return redirect('curso')->with('message', 'O curso foi adicionado com sucesso!');
=======
    public function store(CursoRequest $request)
    {
        $curso = new Curso();
        $curso-> nome = $request->get('nome');

        $curso->save();

        return redirect('curso')->with('message', 'O Curso foi adicionado com Sucesso!');
>>>>>>> master
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD

=======
>>>>>>> master
    public function show($id)
    {
        $resposta = Curso::find($id);//find($id) retorna todos os dados daquele id setado
        if(empty($resposta)){
            return "Esse curso não existe";
        }
<<<<<<< HEAD
        return view('curso.Curso_list')->with('c', $resposta);
=======
        return view('curso.detalhes_curso')->with('p', $resposta);
>>>>>>> master
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $curso = Curso::find($id);
        return view('curso.Curso_edit' , array('curso' => $curso));
=======
        $cursos = Curso::find($id)->first();

        return redirect('/curso/store', compact('cursos'));
>>>>>>> master
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
<<<<<<< HEAD
        $curso->nome = $request->input('nome');
        $curso->save();
        return redirect ('curso')->with('message', 'O curso foi alterado com sucesso!');

=======
        $curso-> nome = $request->get('nome');

        return redirect('curso')->with('message', 'O Curso foi adicionado com Sucesso!');
>>>>>>> master
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        $curso = Curso::find($id);
        $curso->delete();
        return redirect('curso');
=======
        $cursos = Curso::find($id);
        $cursos->delete();
        return redirect('/curso');
>>>>>>> master
    }
}
