@extends('includes.pageDefault')

@section('content')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Estratégia</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                            <button type="button" class="btn d-none d-lg-inline-block mb-1 btn-roxo-fill">
                                <i class="fa fa-file fa-fw mr-1"></i> Exportar
                            </button>
                        </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="content">

    <!-- Advanced -->
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="menu-lateral">
                <li><a href="/estrategia/projeto">Projeto</a></li>
                <li><a href="/estrategia/negocio">Negócios</a></li>
                <li class="active"><a href="/estrategia/tomevoz">Voz e tom</a></li>
                <li><a href="/estrategia/presenca">Presença online</a></li>
            </ul>
        </div>
        <div class="col-md-7 col-sm-12">
            <div class="block block-bordered block-rounded">
                <div class="block-content">

                    
                    <div class="form-group">
                        <label>Voz da marca</label>
                        <p>Pense na voz como uma expressão da personalidade central de sua marca.</p>
                        <textarea class="form-control form-control-alt" rows="7" placeholder="Descreva a voz da sua marca aqui."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tom de voz</label>
                        <p>Tom é como a personalidade de sua marca articula sua mensagem de acordo com o assunto em questão.</p>
                        <select class="form-control form-control-alt">
                            <option value="0" selected disabled>Selecione os tons da sua marca</option>
                            <option value="1">Publicidade e Marketing</option>
                            <option value="2">Usuário</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-roxo-empty">Cancelar</button>
                        <button class="btn btn-roxo-fill ml-2">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->

<script>jQuery(function(){ Dashmix.helpers(['rangeslider']); });</script>

    <script>
    
    $(function () {
        $(".rangeEducativoPromocional").ionRangeSlider({
            min: 0,
            max: 4,
            from: 2,
            grid: true,
            hide_min_max: true,
            hide_from_to: true
        });
    });
    </script>
@endsection
