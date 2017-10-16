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
            <li>Pgea</li>
            <li>Administração</li>
            <li>Profissional</li>
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

        <header>

            <span class="widget-icon"> <i class="fa fa-user"></i> </span>
            <h2>Novo Profissional</h2>

        </header>

        <div>
            <div class="jarviswidget-editbox">
            </div>
            <div class="widget-body">

                <form action="/profissional/adiciona" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                    <fieldset class="smart-style-3">
                        <input name="authenticity_token" type="hidden">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input name="nome" class="form-control" value="{{ old('nome') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>CPF</label>
                                    <input name="cpf" class="form-control" id="cpf" value="{{ old('cpf') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>RG</label>
                                    <input name="rg" class="form-control" value="{{ old('rg') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>Codigo</label>
                                    <input name="codigo" class="form-control" value="{{ old('codigo') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input name="email" class="form-control" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label>Data de Nascimento</label>
                                    <input name="datanasci" class="form-control" id="data" value="{{ old('nome') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label>Titulação</label>
                                    <select name="titulacao_id" class="form-control">
                                        @foreach($titulacao as $t)
                                            <option value="{{$t->id}}">{{$t->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="smart-style-3">
                        <legend>Endereço</legend>
                        <div class="row">
                            <div class="col-xs-12 col-md-10">
                                <div class="form-group">
                                    <label>Logradouro</label>
                                    <input name="logradouro" class="form-control" value="{{ old('logradouro') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-2">
                                <div class="form-group">
                                    <label>Nº</label>
                                    <input name="numero" class="form-control" value="{{ old('numero') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>Complemento</label>
                                    <input name="complemento" class="form-control" value="{{ old('complemento') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>Bairro</label>
                                    <input name="bairro" class="form-control" value="{{ old('bairro') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input name="cidade" class="form-control" value="{{ old('cidade') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select name="nome" class="form-control">
                                        <option value="acre">ACRE</option>
                                        <option value="ALAGOAS">ALAGOAS</option>
                                        <option value="AMAPÁ">AMAPÁ</option>
                                        <option value="AMAZONAS">AMAZONAS</option>
                                        <option value="BAHIA">BAHIA</option>
                                        <option value="CEARÁ">CEARÁ</option>
                                        <option value="DISTRITO FEDERAL">DISTRITO FEDERAL</option>
                                        <option value="ESPÍRITO SANTO">ESPÍRITO SANTO</option>
                                        <option value="GOIÁS">GOIÁS</option>
                                        <option value="MARANHÃO">MARANHÃO</option>
                                        <option value="MATO GROSSO DO SUL">MATO GROSSO DO SUL</option>
                                        <option value="MATO GROSSO">MATO GROSSO</option>
                                        <option value="MINAS GERAIS">MINAS GERAIS</option>
                                        <option value="PARANÁ">PARANÁ</option>
                                        <option value="">M</option>
                                        <option value="">F</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input name="telefone1" class="form-control" id="telefone"
                                           value="{{ old('telefone1') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>Celular</label>
                                    <input name="telefone2" class="form-control" id="telefone"
                                           value="{{ old('telefone2') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>CEP</label>
                                    <input name="cep" class="form-control" id="cep" value="{{ old('cep') }}">
                                </div>
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
<!-- funcão das mascaras -->
<script>
    window.onload = function(){
        $("#telefone").mask("(99) 9999 - 9999");
        $("#cep").mask("99999 - 999");
        $("#cpf").mask("999.999.999-99");
        $("#data").mask("9999 / 99 / 99")
    };
</script>