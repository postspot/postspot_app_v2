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
            <li><a href="/conta/produtos">Produtos e serviços</a></li>
            <li><a href="/conta/informacoes">Informações da empresa</a></li>
            <li><a href="/conta/usuarios">Usuários</a></li>
            <li class="active"><a href="/conta/transacoes">Transações</a></li>
            <li><a href="/conta/transacoes">Métodos de pagamentos</a></li>
        </ul>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="block block-bordered block-rounded">
                <div class="block-content">
                        <h1>Em construção</h1>
                    </div>
        </div>
    </div>
</div>
<!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
