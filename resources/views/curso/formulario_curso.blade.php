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
            <li>Administração</li>
            <li>Curso</li>
        </ol>
        <!-- end breadcrumb -->


    </div>
    <!-- END RIBBON -->

    <div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false">
        <header>
            <h2>Novo Curso</h2>
        </header>

        <div>
            <div class="alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="jarviswidget-editbox">
            </div>
            <div class="widget-body">

                <form action="/curso/store" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                    <fieldset class="smart-style-3">
                        <input name="authenticity_token" type="hidden">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input name="nome" class="form-control">
                                </div>
                            </div>
                        </div>


                                    <label>Código</label>
                                    <input name="codigo" class="form-control" value="{{ old('codigo') }}">
                                </div>
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
    window.onload = function () {
        $(".telefone").mask("(99) 9999 - 9999");
        $("#cep").mask("99999 - 999");
        $("#cpf").mask("999.999.999-99");
        $("#data").mask("9999 / 99 / 99")
    };
</script>