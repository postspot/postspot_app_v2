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
                <li><a href="/conteudo/detalhes/{{ $pauta->id_tarefa }}">Visualizar</a></li>
                <li><a href="/conteudo/detalhes/editar/{{ $pauta->id_tarefa }}">Editar</a></li>
                <li><a href="/conteudo/detalhes/pauta/{{ $pauta->id_tarefa }}">Pauta</a></li>
                <li class="active"><a href="/conteudo/detalhes/historico/{{ $pauta->id_tarefa }}">Histórico</a></li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-12">
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
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead class="thead-light">
                    <tr>
                        <th>Responsável</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Histórico</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($publicacoes as $p)
                    <tr>
                        <td>{{ $p->usuario->name }}</td>
                        <td>{{ (new \Date($p->data_criacao))->format('d/m/Y') }}</td>
                        <td>{{ (new \Date($p->data_criacao))->format('H:i') }}</td>
                        <td><a class="font-w600 link-color" data-toggle="modal" data-target="#modal-conteudo-{{ $p->id_publicacao }}" href="javascript:void(0)">Ver conteúdo</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Advanced -->
</div>


@foreach($publicacoes as $p)
<div class="modal fade" id="modal-conteudo-{{ $p->id_publicacao }}" tabindex="-1" role="dialog" aria-labelledby="modal-conteudo-{{ $p->id_publicacao }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-transparent mb-0">
                <div class="block-header background-cinza">
                    <h3 class="block-title">Conteúdo da publicação</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>  
                <div class="block-content">
                    <textarea style="width: 100%">{{ $p->texto_publicacao }}</textarea>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-cinza" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- END Page Content -->
@endsection