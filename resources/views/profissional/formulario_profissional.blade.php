@extends('layout.temp')

@section('conteudo')
    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <form action="/profissional/adiciona" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input name="cpf" class="form-control">
        </div>
        <div class="form-group">
            <label>RG</label>
            <input name="rg" class="form-control">
        </div>
        <div class="form-group">
            <label>Codigo</label>
            <input name="codigo" class="form-control">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Sexo F ou M</label>
            <select name="sexo" class="form-control">
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
        </div>
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input name="datanasci" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

@stop
