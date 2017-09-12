@extends('layout.principal')

@section('conteudo')

     <h1>Listagem das Extensões</h1>
        <table class="table table-striped table-bordered table-hover">
            @foreach ($extensao as $e)
            <tr class="{{ $e->aprovada <=0 ? 'danger' : ''}}">
                <td> {{$e->id }}</td>
                <td> {{$e->titulo }} </td>
                <td> {{$e->edital }} </td>
                <td> {{$e->datainicio }} </td>
                <td> {{$e->datatermino }} </td>
                <td> {{$e->curso->nome }} </td>

                <td> <a href="/extensoes/mostra/{{$e->id}}"> <span class="glyphicon glyphicon-search"></span></a></td>
                <td> <a href="/extensoes/remove/{{$e->id}}"> <span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            @endforeach
        </table>
        @if(old('titulo'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong> A Extensão {{old('titulo')}} foi adicionada.
        </div>
        @endif

@stop


