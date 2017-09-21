@extends('layout.temp')

@section('conteudo')
    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false">

        <header>
            <span class="widget-icon"> <i class="fa fa-globe"></i> </span>
            <h2>Nova Extensão</h2>

        </header>
        <div>
            <div class="jarviswidget-editbox">
            </div>
            <div class="widget-body">

    <form action="/extensoes/adiciona" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <fieldset>
            <input name="authenticity_token" type="hidden">
            <div class="form-group">
                <label>Titulo</label>
                <input name="titulo" class="form-control" value="{{ old('titulo') }}">
            </div>
            <div class="form-group">
                <label>Edital</label>
                <input name="edital" class="form-control" value="{{ old('edital') }}">
            </div>

            <div class="form-group">
                <label>Data do Inicio</label>
                <input name="datainicio" class="form-control">
            </div>
            <div class="form-group">
                <label>Data Final</label>
                <input name="datatermino" class="form-control">
            </div>
            <div class="form-group">
                <label>Curso</label>
                <select name="cursoid" class="form-control">
                    @foreach($curso as $c)
                        <option value="{{$c->id}}">{{$c->nome}}</option>
                    @endforeach
                </select>
            </div>
        </fieldset>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-arrow-right"></i>
                Proximo
            </button>
        </div>
    </form>

    </div>
    <!-- end widget content -->

    </div>
    <!-- end widget div -->

    </div>
@stop