@extends('includes.pageDefault')

@section('content')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Estratégia</h1>
        
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

                    <form action="/api/atualiza_tom/{{ $estrategia->id_estrategia }}" method="post">
                    @method('PUT')

                    @if(isset($message))
                    <div class="mb-3 alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    
                    @endif
                    @if(isset($error))
                    <div class="mb-3 alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                    
                    @endif
                    
                    <div class="form-group">
                        <label>Voz da marca</label>
                        <textarea name='voz' class="form-control form-control-alt" rows="7" placeholder="Descreva a voz da sua marca. A voz é a personalidade de sua marca e pode ser descrita através de um adjetivo. Por exemplo: positiva, sincera, engraçada, animada.">{{ $estrategia->voz }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Tom de voz</label>
                        <textarea name='tom' class="form-control form-control-alt" rows="7" placeholder="Descreva o tom de voz da sua marca. O tom é individual através das conversas, dos canais e das interações que sua empresa faz com sua persona. Por exemplo: útil, informativo e claro.">{{ $estrategia->tom }}</textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-secundario ml-2">Atualizar</button>
                    </div>
                    </form>
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
