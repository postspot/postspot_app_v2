@extends('includes.pageDefault')

@section('content')



<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Pautas</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                        <a href="pauta/criar">
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
            <li class="active"><a href="/pauta">Todas as pautas</a></li>
            <li><a href="/pautas/filtro/0">Pautas Salvas</a></li>
            <li><a href="/pautas/filtro/5">Pautas Concluídas</a></li>
        </ul>
    </div>
    <div class="col-md-9">
                <div class="table-responsive">

<!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
            <thead class="thead-light">
                <tr>
                    <th>Título</th>
                    <th>Persona</th>
                    <th>Jornada</th>
                    <th class="text-center">Formato</th>
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
                    
                    
                    if($t->etapa == 0)
                        $t->etapa = "Salva";
                    if($t->etapa > 0)
                        $t->etapa = "Concluida";
                   
                ?>
                <tr>
                    <td class="font-w600 link-color">
                       <a href='/pauta/detalhes/{{ $t->id_tarefa }}'> {{ $t->nome_tarefa }}</a>
                    </td>
                    <td>
                    {{ $t->nome }}
                    </td>
                    <td>
                    {{ $t->estagio_compra }}
                    </td>
                    <td>
                    {{ $t->nome_tipo  }}
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
