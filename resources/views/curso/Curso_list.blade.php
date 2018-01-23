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
            <li>Pgea</li><li>Administração</li><li>Cursos</li>
        </ol>
        <!-- end breadcrumb -->


    </div>
    <!-- END RIBBON -->
    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
            <h2>Cursos</h2>
            <div class="widget-toolbar">
                <a href="curso/create" class="btn btn-primary"><i class="fa fa-plus"></i> Curso</a>
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

                @if(old('nome'))
                    <div class="alert alert-success">
                        <strong>Sucesso!</strong> O Curso {{old('nome')}} foi adicionado.
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th style="width: 170px ">Ações</th>
                        </tr>
                        </thead>
                        @foreach ($curso as $c)
                            <tbody>
                            <tr>
                                <td>{{$c->nome }}</td>
                                <td> <div class="btn-group">

                                        <a class="btn btn-xs btn-success" href="/curso/update/{{$c->id}}">
                                            <i class="fa fa-pencil"></i> Editar</a>
                                        <a class="excluir btn btn-xs btn-danger" href="/curso/destroy/{{$c->id}}">
                                            <i class="fa fa-trash-o"></i> Excluir</a>
                                    <!-- <a class="btn btn-xs btn-info" href="/profissional/show/{{$c->id}}">
                                            <i class="fa fa-search"></i> Visualizar</a> -->
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