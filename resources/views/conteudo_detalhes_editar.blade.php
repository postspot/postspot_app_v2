@extends('includes.pageDefault')

@section('content')
<style>

.popover-content{
    display: none;
}

</style>

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">O que é marketing digital?</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                            <button {{ $pauta->log->etapa != 10? "disabled" : "" }} onclick="form_submit()" type="button" data-toggle="modal" data-target="#modal-delete" class="btn d-none d-lg-inline-block mb-1 btn-cinza">
                                 Salvar Conteúdo
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
                <li><a href="/conteudo/detalhes/{{ $pauta->id_tarefa }}">Visualizar</a></li>
                <li class="active"><a href="/conteudo/detalhes/editar/{{ $pauta->id_tarefa }}">Editar</a></li>
                <li><a href="/pauta/detalhes/{{ $pauta->id_tarefa }}">Pauta</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    {{ $pauta->nome_tarefa }}
                </div>
            </div>
            <div class="font-size-sm">
                <form method="POST" id="form_publicacao" action="/api/criar_publicacao">
                    <input type="hidden" name="id_tarefa" value="{{ $pauta->id_tarefa }}" />
                    @if ($pauta->log->etapa == 10)
                        <textarea class="block block-bordered block-rounded" id="summernote" name="texto_publicacao">
                            {{isset($pauta->publicacoes->id)? $pauta->publicacoes->texto_publicacao:''}}
                        </textarea>
                    @else
                        <div class="block-content">
                            <h5 class="text-center text-muted">Conteúdo em produção</h5>
                        </div>
                    @endif
                    
                    <script>
                        function form_submit() {
                            document.getElementById("form_publicacao").submit();
                        }
                    </script>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="block block-bordered block-rounded p-3">
                <h5>Status</h5>

                <?php
                if($pauta->log->etapa == 8)
                     $pauta->log->etapa = "Em produção";
                if($pauta->log->etapa == 9)
                    $pauta->log->etapa = "Revisão";
                if($pauta->log->etapa == 10)
                    $pauta->log->etapa = "Em Aprovação";
                if($pauta->log->etapa == 11)
                    $pauta->log->etapa = "Em Ajuste";
                if($pauta->log->etapa == 12)
                    $pauta->log->etapa = "Concluída";
                ?>

                <p>{{ $pauta->log->etapa }}</p>
                <p>{{ date('d/m/Y', strtotime($pauta->log->data_criacao)) }}</p>
            </div>
            <div class="block block-bordered block-rounded">
                <div class="font-size-sm p-3">
                <h5>Comentários</h5>

                    @foreach($pauta->comentarios as $c)
                    <div class="media">
                        <a class="img-link mr-2" href="javascript:void(0)">
                            <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{ env('APP_URL').'/storage/temp' }}/{{ $c->foto_usuario }}" alt="">
                        </a>
                        <div class="media-body">
                            <p class="mb-1">
                                <span class="font-w600">{{ $c->name }}</span><br>
                                {{ $c->comentario }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="font-size-sm p-2">
                    <form action="db_social_compact.html" method="POST" onsubmit="return false;">
                        <input type="hidden" name='id_tarefa' value="{{ $pauta->id_tarefa }}">
                        <input type="text" class="form-control form-control-alt" placeholder="Escrever comentário">
                    </form>
                </div>
            </div>
            <div class="block block-bordered block-rounded p-3">
                <h5>Imagem sugerida</h5>
                <input type="file" name="" id="">
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
