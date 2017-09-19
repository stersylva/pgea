@extends('layout.temp')

@section('conteudo')
    <h1>Detalhes da Extensão {{$e->titulo}}</h1>
    <ul>
        <li>
            <b>Edital:</b> {{$e->edital}}
        </li>
        <li>
            <b>Curso:</b> {{$e->cursoid}}
        </li>
        <li>
            <b>Data do ínicio: </b> {{$e->datainicio}}
        </li>
        <li>
            <b>Data do termino: </b> {{$e->datatermino}}
        </li>
        <li>
            <b>Extensão aprovada </b> {{$e->aprovada}}
        </li>
    </ul>
@stop

