@extends('layout.temp')

@section('conteudo')
    <!-- RIBBON -->
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>PGEA</li><li>Perfis de Acesso</li>
        </ol>
        <!-- end breadcrumb -->


    </div>
    <!-- END RIBBON -->
    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-key"></i> </span>
            <h2>Perfis de Acesso</h2>
            <div class="widget-toolbar">
                <a href="/perfis/create" class="btn btn-primary"><i class="fa fa-plus"></i> Perfil de Acesso</a>
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
                        <strong>Sucesso!</strong> O Perfil  {{old('titulo')}} foi adicionado.
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="header">Perfil</th>
                            <th style="width: 170px ">Ações</th>
                        </tr>
                        </thead>

                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop