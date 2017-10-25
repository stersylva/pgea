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
            <li>PGEA</li>
            <li>Dashboard</li>
        </ol>
        <!-- end breadcrumb -->


    </div>
    <!-- END RIBBON -->
    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false">
    </div>
    <div id="content"><div style="margin-top: 15px;" id="inicio-index">
            <div class="row tiles">
                <div class="col-xs-12 col-sm-6 col-md-4 tile">
                    <a style="background-color: #F44336;" href="/profissionais">
                        <i class="fa fa-exchange main-icon"></i>
                        <h3>Profissionais</h3>
                        <span><i class="fa fa-clock-o"></i></span>
                    </a>
                </div>
    @stop