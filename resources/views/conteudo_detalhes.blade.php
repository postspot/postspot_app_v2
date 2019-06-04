@extends('includes.pageDefault')

@section('content')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">{{ $pauta->nome_tarefa }}</h1>
            @if ($pauta->log->etapa == 10)
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                            <button type="button" data-toggle="modal" data-target="#modal-ajustes" class="btn d-none d-lg-inline-block mb-1 btn-cinza">
                                 Solicitar Ajuste
                            </button>
                    </li>
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                            <button type="button" class="btn d-none d-lg-inline-block mb-1 btn-cinza">
                                 Salvar Conteúdo
                            </button>
                    </li>
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                        
                        <button type="button" data-toggle="modal" data-target="#modal-aprovar" class="btn d-none d-lg-inline-block mb-1 btn-secundario">
                                Aprovar Conteúdo
                        </button>
                    </li>
                </ol>
            </nav>
            @endif
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="content">

    <!-- Advanced -->
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="menu-lateral">
                <li class="active"><a href="/conteudo/detalhes/{{ $pauta->id_tarefa }}">Visualizar</a></li>
                <li><a href="/conteudo/detalhes/editar/{{ $pauta->id_tarefa }}">Editar</a></li>
                <li><a href="/conteudo/detalhes/pauta/{{ $pauta->id_tarefa }}">Pauta</a></li>
                <li><a href="/conteudo/detalhes/historico/{{ $pauta->id_tarefa }}">Histórico</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
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
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                {{ $pauta->nome_tarefa }}
                </div>
            </div>
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    @if (isset($pauta->publicacoes()->get()->last()->id_publicacao))
                        {!! $pauta->publicacoes()->get()->last()->texto_publicacao  !!}
                    @else
                        <h5 class="text-center text-muted">
                            @php
                                if($pauta->log->etapa == 8) 
                                    echo "Conteúdo em produção";
                                if($pauta->log->etapa == 11)
                                    echo "Conteúdo em Aprovação";
                                if($pauta->log->etapa == 12)
                                    echo "Conteúdo em Ajuste";
                                if($pauta->log->etapa == 13)
                                    echo "Conteúdo concluído"; 
                            @endphp
                        </h5>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="block block-bordered block-rounded p-3">
                <h5>Status</h5>

                <?php
                if($pauta->log->etapa == 8)
                     $pauta->log->etapa = "Em produção";
                if($pauta->log->etapa == 10)
                    $pauta->log->etapa = "Revisão";
                if($pauta->log->etapa == 11)
                    $pauta->log->etapa = "Em Aprovação";
                if($pauta->log->etapa == 12)
                    $pauta->log->etapa = "Em Ajuste";
                if($pauta->log->etapa == 13)
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
                            <div class="media-footer mb-3   ">
                            <a data-toggle="modal" data-target="#modal-deletar-{{ $c->id_comentario }}" href="javascript:void(0)" class="delete-btn">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <span class="pull-right">{{ $c->data_criacao->format('d/m/Y H:i') }}</span>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="modal-deletar-{{ $c->id_comentario }}" tabindex="-1" role="dialog" aria-labelledby="modal-deletar-{{ $c->id_comentario }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form id="form_aprovacao" action="/api/deletar_comentario/{{ $c->id_comentario }}" method="POST">
                                    {!! method_field('delete') !!}
                                    <div class="block block-transparent mb-0">
                                        <div class="block-header background-cinza">
                                            <h3 class="block-title">Confirmar exclusão?</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                    <i class="fa fa-fw fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <div class="media">
                                                <a class="img-link mr-2" href="javascript:void(0)">
                                                    <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{ env('APP_URL').'/storage/temp' }}/{{ $c->foto_usuario }}" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <p class="mb-2">
                                                        <span class="font-w600">{{ $c->name }}</span><br>
                                                        {{ $c->comentario }}
                                                    </p>
                                                    <p class="text-muted mb-1">Essa ação não poderá ser desfeita.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="id_tarefa" type="hidden" value="{{ $pauta->id_tarefa }}" />
                                        <input name="nota_tarefa" type="hidden" id="inputAvaliacao" />
                                        <div class="block-content block-content-full text-right bg-light">
                                            <button type="submit" class="btn btn-sm btn-risco">Apagar comentário</button>
                                            <button type="button" class="btn btn-sm btn-cinza" data-dismiss="modal">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
    
                    @endforeach
                    
                </div>
                <div class="font-size-sm p-2">
                    <form action="/api/insere_comentario" method="POST">
                        <input type="hidden" name='id_tarefa' value="{{ $pauta->id_tarefa }}">
                        <input type="text" name='comentario' class="form-control form-control-alt" placeholder="Escrever comentário">
                        <button type="submit" class="btn-block-option btn btn-secundario" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-send"></i>
                        </button>
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



<div class="modal fade" id="modal-ajustes" tabindex="-1" role="dialog" aria-labelledby="modal-ajustes" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="form_delete" action="/api/deletar_pauta/" method="POST" >
                <div class="block block-transparent mb-0">
                    <div class="block-header background-cinza">
                        <h3 class="block-title">Você tem certeza?</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Você está prestes a solicitar ajustes no conteúdo. Verifique se fez todos os comentários necessários para auxiliar o time de conteúdo nos ajustes.</p>
                        <input type="hidden" id="id_tarefa" value="">
                    </div>
                    <div class="block-content block-content-full text-right bg-light">
                        <button type="submit" class="btn btn-sm btn-secundario">Solicitar ajustes</button>
                        <button type="button" class="btn btn-sm btn-cinza" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-aprovar" tabindex="-1" role="dialog" aria-labelledby="modal-aprovar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="form_aprovacao" action="/api/aprovar_conteudo/" method="POST">
                <div class="block block-transparent mb-0">
                    <div class="block-header background-cinza">
                        <h3 class="block-title">Aprovação do conteúdo</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Como você avalia sua satisfação com o conteúdo recebido?</p>
                        <div class="flex text-center mb-4">
                            <p class="p-estrela text-left">Muito insatisfeito</p>
                            <div class="estrelas"></div>
                            <p class="p-estrela text-right">Muito satisfeito</p>
                        </div>
                        
                        <p>Por favor, deixe um comentário sobre o conteúdo recebido.</p>
                        <textarea required name="consideracoes_gerais" class="form-control form-control-alt" rows="5" placeholder="Escreva seu comentário aqui."></textarea>
                    </div>
                    <input name="id_tarefa" type="hidden" value="{{ $pauta->id_tarefa }}" />
                    <input name="nota_tarefa" type="hidden" id="inputAvaliacao" />
                    <div class="block-content block-content-full text-right bg-light">
                        <button type="submit" class="btn btn-sm btn-secundario">Aprovar conteúdo</button>
                        <button type="button" class="btn btn-sm btn-cinza" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END Page Content -->
@endsection