@extends('layout.temp')

@section('conteudo')
    <!-- RIBBON -->
    <div id="ribbon">

        <!--<span class="ribbon-button-alignment">
            <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                 <i class="fa fa-refresh"></i> -->
        </span>
        </span>


        <ol class="breadcrumb">
            <li>PGEA</li><li>Extensões</li>
        </ol>
        <!-- end breadcrumb -->


    </div>
    <!-- END RIBBON -->
    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-globe"></i> </span>
            <h2>Extensões</h2>
            <div class="widget-toolbar">
                <a href="/extensoes/nova" class="btn btn-primary"><i class="fa fa-plus"></i> Extensão</a>
            </div>
        </header>
        <div>
            <div class="jarviswidget-editbox">
            </div>
            <div class="widget-body">

                <form class="form-inline" method="get" action="">
                    <label>Nome: <input type="text" class="form-control" name="nome" value=""></label>
                    <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
                </form>

                <br>
                @if(old('titulo'))
                    <div class="alert alert-success">
                        <strong>Sucesso!</strong> A Extensão {{old('titulo')}} foi adicionada.
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="header">Título</th>
                            <th class="header">Edital</th>
                            <th class="header">Curso</th>
                            <th style="width: 170px ">Ações</th>
                        </tr>
                        </thead>
                        @foreach ($extensao as $e)
                            <tbody>
                            <tr>
                                <td> {{$e->titulo }} </td>
                                <td> {{$e->edital }} </td>
                                <td> {{$e->curso->nome or '' }}</td>
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