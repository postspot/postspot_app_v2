@extends('includes.pageDefault')

@section('content')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Conta e Cobrança</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                        <button type="button" class="btn d-none d-lg-inline-block mb-1 btn-roxo-fill">
                            Nova assinatura
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
        <div class="col-md-3 col-sm-12 mb-5">
            <ul class="menu-lateral">
                <li class="active"><a href="/conta/produtos">Produtos e serviços</a></li>
                <li><a href="/conta/informacoes">Informações da empresa</a></li>
                <li><a href="/conta/usuarios">Usuários</a></li>
                <li><a href="/conta/transacoes">Transações</a></li>
                <li><a href="/conta/transacoes">Métodos de pagamentos</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    <div class="flex justify-content-between align-content-center border-bottom mb-3 pb-3">
                        <div>
                            <label>500 palavras</label>
                        </div>
                        <button class="btn btn-cinza" data-toggle="modal" data-target="#modal-detalhes">Ver
                            detalhes</button>
                    </div>
                    <div class="flex justify-content-between align-content-center">
                        <div>
                            <label>1000 palavras</label>
                        </div>
                        <button class="btn btn-cinza">Ver detalhes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->


    <!-- Modal Email-->
    <div class="modal" id="modal-detalhes" tabindex="-1" role="dialog" aria-labelledby="modal-default-vcenter"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title">Resumo da sua assinatura mensal de conteúdo</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="flex justify-content-between align-items-start border-bottom resumo pb-4">
                        <div class="">
                            <h6>Plano de conteúdo</h6>
                            <p>4 conteúdos de 300 palavras</p>
                        </div>
                        <div>
                            <h6>R$ 239,60</h6>
                        </div>
                    </div>
                    <div class="flex justify-content-between align-items-start border-bottom resumo py-4">
                        <div class="">
                            <h6>Adicional</h6>
                            <p>Pautas</p>
                        </div>
                        <div>
                            <h6>R$ 159,60</h6>
                        </div>
                    </div>
                    <div class="flex justify-content-between align-items-start resumo pt-4">
                        <div class="">
                            <h6>Total mensal</h6>
                            <p>Assinatura iniciada em: 11/02/2019</p>
                        </div>
                        <div>
                            <h6>R$ 19,60</h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 p-3">
                    <button type="button" class="btn btn-cinza" data-dismiss="modal">cancelar assinatura</button>
                    <button type="button" class="btn btn-secundario ml-2" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
