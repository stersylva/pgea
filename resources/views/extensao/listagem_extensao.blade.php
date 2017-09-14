@extends('layout.temp')

@section('conteudo')
    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-user"></i> </span>
            <h2>Extensões</h2>
            <div class="widget-toolbar">
                <a href="/extensoes/nova" class="btn btn-primary"><i class="fa fa-plus"></i> Extensão</a>
            </div>
        </header>
        <div>
            <div class="jarviswidget-editbox">
            </div>
            <div class="widget-body">
                <p>Lugar das pesquisas</p>
                @if(old('titulo'))
                    <div class="alert alert-success">
                        <strong>Sucesso!</strong> A Extensão {{old('titulo')}} foi adicionada.
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered">
                        @foreach ($extensao as $e)
                            <thead>
                            <tr>
                                <th class="header">Titulo</th>
                                <th class="header">Edital</th>
                                <th class="header">Curso</th>
                                <th class="header">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> {{$e->titulo }} </td>
                                <td> {{$e->edital }} </td>
                                <td> {{$e->curso }}</td>
                                <td> <div class="btn-group">
                                        <a class="btn btn-xs btn-default" href="/extensoes/mostra/{{$e->id}}">
                                            <i class="fa fa-search"></i> Visualizar</a>
                                        <a class="excluir btn btn-xs btn-danger" href="/extensoes/remove/{{$e->id}}">
                                            <i class="fa fa-trash-o"></i> Excluir</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop