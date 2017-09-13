@extends('layout.temp')

@section('conteudo')
    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <form action="/extensoes/adiciona" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="form-group">
            <label>Titulo</label>
            <input name="titulo" class="form-control">
        </div>
        <div class="form-group">
            <label>Edital</label>
            <input name="edital" class="form-control">
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
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
@stop