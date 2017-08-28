@extends('layout.principal')

@section('conteudo')
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
            <label>Curso</label>
            <input name="curso" class="form-control">
        </div>
        <div class="form-group">
            <label>Data do Inicio</label>
            <input name="datainicio" class="form-control">
        </div>
        <div class="form-group">
            <label>Data Final</label>
            <input name="datatermino" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
@stop