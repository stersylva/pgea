@extends('layout.temp')

@section('conteudo')
    <!-- RIBBON -->
    <div id="ribbon">


        <ol class="breadcrumb">
            <li>PGEA</li>
            <li>Extensão</li>
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
            <span class="widget-icon"> <i class=""></i> </span>
            <h2>Nova Extensão</h2>

        </header>
        <div>
            <div class="jarviswidget-editbox">
            </div>
            <div class="widget-body">

                <form action="/extensoes/adiciona" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                    <fieldset class="smart-style-3">
                        <input name="authenticity_token" type="hidden">

                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input name="titulo" class="form-control" value="{{ old('titulo') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label>Edital</label>
                                    <input name="edital" class="form-control" value="{{ old('edital') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group ">
                                    <label>Data do Início</label>
                                    <input name="data_inicio" class="form-control data"
                                           value="{{ old('data_inicio') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label>Data do Início</label>
                                <label class="input">
                                    <div class="input-group">
                                        <input type="text" name="data_inicio" value="{{ date('d/m/Y') }}"
                                               class="form-control datepicker" data-dateformat="dd/mm/yy">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label>Data Final</label>
                                    <input name="data_termino" class="form-control data"
                                           value="{{ old('data_termino') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label>Curso</label>
                                    <select name="curso_id" class="form-control">
                                        <option>Selecione um Curso</option>
                                        @foreach($curso as $c)
                                            <option value="{{$c->id}}">{{$c->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select name="categoria_id" class="form-control">
                                        <option>Selecione uma Categoria</option>
                                        @foreach($categoria as $ca)
                                            <option value="{{$ca->id}}">{{$ca->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="smart-style-3">
                        <legend>Detalhes da Extensão</legend>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label>Resumo</label>
                                    <textarea name="resumo" class="form-control text"
                                              value="{{ old('resumo') }}"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label>Palavra Chave</label>
                                    <input name="palavra_chave" class="form-control" value="{{ old('palavra_chave') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label>Anexo</label>
                                    <input name="anexo" class="form-control" value="{{ old('anexo') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label>Vagas</label>
                                    <input name="vagas" class="form-control" value="{{ old('vagas') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label>Período</label>
                                    <input name="periodo" class="form-control" value="{{ old('periodo') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label>Carga Horária</label>
                                    <input name="carga_horaria" class="form-control hora"
                                           value="{{ old('carga_horário') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label>Curso Primário</label>
                                    <select name="curso1_id" class="form-control">
                                        <option>Selecione um Curso</option>
                                        @foreach($curso as $c)
                                            <option value="{{$c->id}}">{{$c->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label>Curso Secundário</label>
                                    <select name="curso2_id" class="form-control">
                                        <option>Selecione um Curso</option>
                                        @foreach($curso as $c)
                                            <option value="{{$c->id}}">{{$c->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-arrow-right"></i>
                                Salvar
                            </button>
                        </div>
                    </fieldset>
                </form>

            </div>
            <!-- end widget content -->

        </div>

    </div>
@stop
<script>
    window.onload = function () {
        $(".data").mask("9999 / 99 / 99");
        $(".hora").mask("99:99")
    };
</script>