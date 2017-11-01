@extends('layout.temp')

@section('conteudo')
    <h1>Detalhes do curso {{$p->nome}}</h1>
    <ul>
        <li>
            <b>Nome:</b> {{$p->nome}}
        </li>
    </ul>
@stop

