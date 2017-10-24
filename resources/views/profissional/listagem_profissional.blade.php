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
            <li>Pgea</li><li>Administração</li><li>Profissionais</li>
        </ol>
        <!-- end breadcrumb -->


    </div>
    <!-- END RIBBON -->
    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-user"></i> </span>
            <h2>Profissionais</h2>
            <div class="widget-toolbar">
                <a href="profissional/create" class="btn btn-primary"><i class="fa fa-plus"></i> Profissional</a>
            </div>
        </header>
        <div>
            <div class="jarviswidget-editbox">
            </div>
            <div class="widget-body">
                <p>Lugar das pesquisas</p>

                @if(old('nome'))
                    <div class="alert alert-success">
                        <strong>Sucesso!</strong> O profissional {{old('nome')}} foi adicionado.
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Perfil de Acesso</th>
                            <th style="width: 170px ">Ações</th>
                        </tr>
                        </thead>
                        @foreach ($profissional as $p)
                            <tbody>
                            <tr>
                                <td>{{$p->nome }}</td>
                                <td>{{$p->email }}</td>
                                <td>{{$p->titulacao->nome or '' }}</td>
                                <td> <div class="btn-group">
                                        <a class="btn btn-xs btn-default" href="/profissional/show/{{$p->id}}">
                                            <i class="fa fa-search"></i> Visualizar</a>
                                        <a class="btn btn-xs btn-default" href="/profissinal/edit/{{$p->id}}">
                                            <i class="fa fa-search"></i> Editar</a>
                                        <a class="excluir btn btn-xs btn-danger" href="/profissional/destroy/{{$p->id}}">
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