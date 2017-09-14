@extends('layout.temp')

@section('conteudo')
    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-user"></i> </span>
            <h2>Profissionais</h2>
            <div class="widget-toolbar">
                <a href="profissional/novo" class="btn btn-primary"><i class="fa fa-plus"></i> Profissional</a>
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
                        @foreach ($profissional as $p)
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Perfil de Acesso</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$p->nome }}</td>
                                <td>{{$p->email }}</td>
                                <td></td>
                                <td> <div class="btn-group">
                                        <a class="btn btn-xs btn-default" href="/profissional/mostra/{{$p->id}}">
                                            <i class="fa fa-search"></i> Visualizar</a>
                                        <a class="excluir btn btn-xs btn-danger" href="/profissional/remove/{{$p->id}}">
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