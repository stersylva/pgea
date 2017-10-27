@extends('layout.temp')

@section('conteudo')

    <!-- RIBBON -->
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>PGEA</li>
            <li>Dashboard</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false">
    </div>

    <div id="content">
        <div style="margin-top: 15px;" id="inicio-index">
            <div class="row tiles">
                <div class="col-xs-12 col-sm-6 col-md-4 tile">
                    <a style="background-color: #F44336;" href="/profissional">
                        <i class="fa fa-user main-icon"></i>
                        <h3>Profissionais</h3>
                        <span><i class="fa fa-clock-o"></i></span>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 tile">
                    <a style="background-color: #cddc39;" href="/profissional/create">
                        <i class="fa fa-pencil-square-o main-icon"></i>
                        <h3>Novo Profissional</h3>
                        <span><i class="fa fa-clock-o"></i></span>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 tile">
                    <a style="background-color: #FF9900;" href="/perfil">
                        <i class="fa fa-key main-icon"></i>
                        <h3>Perfis de Acesso</h3>
                        <span><i class="fa fa-clock-o"></i></span>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 tile">
                    <a style="background-color: #e91e63;" href="/perfil">
                        <i class="fa fa-pencil main-icon"></i>
                        <h3>Novo Perfil de Acesso</h3>
                        <span><i class="fa fa-clock-o"></i></span>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 tile">
                    <a style="background-color: #673AB7;" href="/extensoes">
                        <i class="fa fa-globe main-icon"></i>
                        <h3>Extensões</h3>
                        <span><i class="fa fa-clock-o"></i></span>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 tile">
                    <a style="background-color: #00bcd4;" href="/extensoes/nova">
                        <i class="fa fa-pencil-square-o main-icon"></i>
                        <h3>Nova Extensão</h3>
                        <span><i class="fa fa-clock-o"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

@stop