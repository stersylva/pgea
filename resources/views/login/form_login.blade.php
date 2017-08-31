@extends('layout.principal')

@section('conteudo')
    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <form action="/gestor" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>senha</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

@stop
