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
                <li class="active"><a href="/estrategia/negocio">Negócio</a></li>
                <li><a href="/estrategia/tomevoz">Voz e tom</a></li>
                <li><a href="/estrategia/presenca">Presença online</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    <div class="form-group">
                        <label>Por quê?</label>
                        <p>É o propósito do negócio, o objetivo de sua iniciativa, enfim a causa que move seus projetos e campanhas.</p>
                        <textarea class="form-control form-control-alt" rows="7" placeholder="Descreva aqui."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Como?</label>
                        <p>Como sua empresa busca atingir o seu objetivo? Quais estratégias está usando para realizar a sua missão?</p>
                        <textarea class="form-control form-control-alt" rows="7" placeholder="Descreva aqui."></textarea>
                    </div>
                    <div class="form-group">
                        <label>O que?</label>
                        <p>É o resultado de seu projeto, o seu produto final, a parte mais concreta do seu empreendimento. Aqui é onde se define o que você faz ou vende.</p>
                        <textarea class="form-control form-control-alt" rows="7" placeholder="Descreva aqui."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Concorrentes</label>
                        <p>Quem são os seus três principais concorrentes em seu segmento de mercado? Inclua seus sites:</p>
                        <input class="form-control form-control-alt mb-2" placeholder="Concorrente um">
                        <input class="form-control form-control-alt mb-2" placeholder="Concorrente dois">
                        <input class="form-control form-control-alt mb-2" placeholder="Concorrente três">
                    </div>
                    <div class="form-group">
                        <label>Referências</label>
                        <p>Quem são, para você, as três principais referências em conteúdo no seu segmento de mercado?</p>
                        <input class="form-control form-control-alt mb-2" placeholder="Referência um">
                        <input class="form-control form-control-alt mb-2" placeholder="Referência dois">
                        <input class="form-control form-control-alt mb-2" placeholder="Referência três">
                    </div>
                    <div class="form-group">
                        <label>Considerações gerais</label>
                        <p>Considerações gerais para direcionar a produção de conteúdo.</p>
                        <textarea class="form-control form-control-alt" rows="7" placeholder="Descreva aqui."></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-roxo-empty">Cancelar</button>
                        <button class="btn btn-roxo-fill ml-2">Atualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
