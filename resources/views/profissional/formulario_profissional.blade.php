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
            <span class="widget-icon"> <i class="fa fa-user"></i> </span>
            <h2>Novo Profissional</h2>

        </header>
        <div>
            <div class="jarviswidget-editbox">
            </div>
            <div class="widget-body">

                <form action="/profissional/adiciona" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <fieldset>
                        <input name="authenticity_token" type="hidden">
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
                        <div class="form-group">
                            <label>Titulação</label>
                            <select name="titulacao_id" class="form-control">
                                @foreach($titulacao as $t)
                                    <option value="{{$t->id}}">{{$t->nome}}</option>
                                @endforeach
                            </select>
                        </div>



                    </fieldset>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-salve"></i>
                            Salvar
                        </button>
                    </div>
                </form>

            </div>
            <!-- end widget content -->

        </div>
        <!-- end widget div -->

    </div>
@stop