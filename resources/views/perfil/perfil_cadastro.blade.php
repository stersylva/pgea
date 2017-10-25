@extends('layout.temp')

@section('conteudo')
    <!-- RIBBON -->
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>PGEA</li>
            <li>Perfil de Acesso</li>
        </ol>
        <!-- end breadcrumb -->
    </div>
    <!-- END RIBBON -->
    <div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-key"></i> </span>
            <h2>Novo Perfil de Acesso</h2>

        </header>

        <div role="content">
            <div class="jarviswidget-editbox">
            </div>
            <div class="widget-body">
                <fieldset class="smart-style-3">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>Nome</label>
                                <input name="nome" class="form-control" value="{{ old('nome') }}">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="smart-form">
                    <section>
                        <div class="row">
                            <div class="col col-3">
                                <label class="label">Permissões de Visualização</label>

                                <label class="checkbox">
                                    <input type="checkbox" name="checkbox" checked="checked">
                                    <i></i>Profissionais</label>

                                <label class="checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <i></i>Perfil de Acesso</label>

                                <label class="checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <i></i>Extensões</label>
                            </div>
                            <div class="col col-3">
                                <label class="label">Permissões de Edição</label>
                                <label class="checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <i></i>Profissionais</label>

                                <label class="checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <i></i>Perfil de Acesso</label>

                                <label class="checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <i></i>Extensões</label>
                            </div>
                        </div>
                    </section>

                </fieldset>
                <div class="col col-9">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-salve"></i>
                        Salvar
                    </button>
                </div>
            </div>

        </div>
@stop