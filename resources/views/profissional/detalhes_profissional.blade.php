@extends('layout.principal')

@section('conteudo')
    <h1>Detalhes do profissional {{$p->nome}}</h1>
    <ul>
        <li>
            <b>Nome:</b> {{$p->nome}}
        </li>
        <li>
            <b>CPF:</b> {{$p->cpf}}
        </li>
        <li>
            <b>RG: </b> {{$p->rg}}
        </li>
        <li>
            <b>Codigo: </b> {{$p->codigo}}
        </li>
        <li>
            <b>E-mail </b> {{$p->email}}
        </li>
        <li>
            <b>Sexo </b> {{$p->sexo}}
        </li>
        <li>
            <b>Data de Nascimento</b> {{$p->datanasci}}
        </li>
    </ul>
@stop

