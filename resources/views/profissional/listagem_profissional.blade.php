@extends('layout.principal')

@section('conteudo')

    <h1>Listagem dos Profissionais</h1>
    <table class="table table-striped table-bordered table-hover">
        @foreach ($profissional as $p)
            <tr>
                <td> {{$p->nome }} </td>
                <td> <a href="/profissional/mostra/{{$p->id}}"> <span class="glyphicon glyphicon-search"></span></a></td>
            </tr>
        @endforeach
    </table>
    @if(old('nome'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong> O profissional {{old('nome')}} foi adicionado.
        </div>
    @endif
@stop


