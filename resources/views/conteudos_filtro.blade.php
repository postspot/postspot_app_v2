@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Conteúdos</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                        <a href="/pauta/criar">
                            <button type="button" class="btn d-none d-lg-inline-block mb-1 btn-secundario">
                                Criar pauta
                            </button>
                        </a>
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
        <div class="col-md-3 col-sm-12 mb-5">
            <ul class="menu-lateral">
                <li><a href="/conteudos">Todos os conteúdos</a></li>
                <li {{ $id == '8' ? 'class=active' : '' }}><a href="/conteudos/filtro/8">Conteúdos em produção</a></li>
                <li {{ $id == '9' ? 'class=active' : '' }}><a href="/conteudos/filtro/9">Conteúdos em revisão</a></li>
                <li {{ $id == '10' ? 'class=active' : '' }}><a href="/conteudos/filtro/10">Conteúdos em aprovação</a></li>
                <li {{ $id == '11' ? 'class=active' : '' }}><a href="/conteudos/filtro/11">Conteúdos em ajuste</a></li>
                <li {{ $id == '12' ? 'class=active' : '' }}><a href="/conteudos/filtro/12">Conteúdos concluídos</a></li>
            </ul>
        </div>
        <div class="col-md-9">
                    <div class="table-responsive">

                        <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                            <thead class="thead-light">
                                <tr>
                                    <th>Título</th>
                                    <th>Tamanho</th>
                                    <th>Solicitação</th>
                                    <th class="text-center">Entrega</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($tarefas as $t)
                                <?php
                                    if($t->estagio_compra == 1)
                                        $t->estagio_compra = "Conhecimento";
                                    else if($t->estagio_compra == 2)
                                        $t->estagio_compra = "Descoberta"; 
                                    else if($t->estagio_compra == 3)
                                        $t->estagio_compra = "Aquisição"; 
                                    else if($t->estagio_compra == 4)
                                        $t->estagio_compra = "Recorrência"; 
                                    
                                    
                                    if($t->etapa == 8)
                                        $t->etapa = "Em produção";
                                    if($t->etapa == 9)
                                        $t->etapa = "Revisão";
                                    if($t->etapa == 10)
                                        $t->etapa = "Em Aprovação";
                                    if($t->etapa == 11)
                                        $t->etapa = "Em Ajuste";
                                    if($t->etapa == 12)
                                        $t->etapa = "Concluída";
                                ?>
                                <tr>
                                    <td class="font-w600 link-color">
                                    <a href='/conteudo/detalhes/{{ $t->id_tarefa }}'> {{ $t->nome_tarefa }}</a>
                                    </td>
                                    <td>
                            {{ $t->tamanho }}
                            </td>
                            <td>
                            {{ date('d/m/Y', strtotime($t->data_criacao)) }}
                            </td>
                            <td>
                            {{ date('d/m/Y', strtotime($t->data_prevista)) }}
                            </td>
                            <td>
                            {{ $t->etapa }}
                            </td>
                                
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
