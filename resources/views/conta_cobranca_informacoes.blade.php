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
            <li class="active"><a href="/conta/informacoes">Informações da empresa</a></li>
            <li><a href="/conta/usuarios">Usuários</a></li>
            <li><a href="/conta/transacoes">Transações</a></li>
            <li><a href="/conta/transacoes">Métodos de pagamentos</a></li>
        </ul>
    </div>
    <div class="col-md-9 col-sm-12">
        <div class="block block-bordered block-rounded">
            <div class="block-content">
                <div class="flex justify-content-between align-content-center border-bottom mb-3 pb-3">
                    <div>
                        <label>Nome da empresa</label>
                        <p>ANDRESS VITOR DE SOUZA BENTO ME</p>
                    </div>
                    <button class="btn btn-cinza w-25"  data-toggle="modal" data-target="#modal-editar-nome">Editar nome</button>
                </div>
                <div class="flex justify-content-between align-content-center border-bottom mb-3 pb-3">
                    <div>
                        <label>CNPJ da empresa</label>
                        <p>13.199.889/0001-20</p>
                    </div>
                    <button class="btn btn-cinza w-25"   data-toggle="modal" data-target="#modal-editar-cnpj">Editar CNPJ</button>
                </div>
                <div class="flex justify-content-between align-content-center">
                    <div>
                        <label>Endereço da empresa</label>
                        <p class="m-0">RUA PREFEITO CHAGAS, 100, SALA 08</p>
                        <p class="m-0">POÇOS DE CALDAS, CENTRO</p>
                        <p class="m-0">MINAS GERAIS</p>
                    </div>
                    <button class="btn btn-cinza w-25"  data-toggle="modal" data-target="#modal-editar-endereco">Editar endereço</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Advanced -->
</div>
<!-- END Page Content -->

<!-- Modal Editar Nome-->
<div class="modal" id="modal-editar-nome" tabindex="-1" role="dialog" aria-labelledby="modal-default-vcenter"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <p class="modal-title">Editar razão social</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body p-4">
                    <label class="mb-2">Razão social atual</label>
                    <p class="text-uppercase">ANDRESS VITOR DE SOUZA BENTO ME</p>
                    <label class="mb-2">Novo nome da empresa</label>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" placeholder="Insira o nome da sua empresa">
                    </div>
        </div>
        <div class="modal-footer border-0 p-3">
            <button type="button" class="btn btn-cinza" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-secundario ml-2" data-dismiss="modal">Salvar</button>
        </div>
    </div>
</div>
</div>

<!-- Modal Editar CNPJ-->
<div class="modal" id="modal-editar-cnpj" tabindex="-1" role="dialog" aria-labelledby="modal-default-vcenter"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <p class="modal-title">Editar razão social</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body p-4">
            <label class="mb-2">CNPJ atual</label>
            <p>13.199.889/0001-20</p>
            <label class="mb-2">Novo CNPJ</label>
            <div class="form-group">
                <input type="text" class="form-control form-control-alt" placeholder="Insira o CNPJ">
            </div>
        </div>
        <div class="modal-footer border-0 p-3">
            <button type="button" class="btn btn-cinza" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-secundario ml-2" data-dismiss="modal">Salvar</button>
        </div>
    </div>
</div>
</div>

<!-- Modal Editar Endereço -->
<div class="modal" id="modal-editar-endereco" tabindex="-1" role="dialog" aria-labelledby="modal-default-vcenter"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <p class="modal-title">Editar endereço</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body p-4">
            <div class="row">
                <div class="col-12">
                    <label class="mb-2">Endereço atual</label>
                    <p class="text-uppercase m-0">RUA PREFEITO CHAGAS, 100, SALA 08</p>
                    <p class="text-uppercase m-0">POÇOS DE CALDAS</p>
                    <p class="text-uppercase">MINAS GERAIS</p>
                    <label class="mb-2">Novo Endereço</label>        
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" placeholder="CEP">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" placeholder="Estado">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" placeholder="Cidade">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" placeholder="Bairro">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" placeholder="Logradouro">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" placeholder="Complemento">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer border-0 p-3">
            <button type="button" class="btn btn-cinza" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-secundario ml-2" data-dismiss="modal">Salvar</button>
        </div>
    </div>
</div>
</div>
@endsection