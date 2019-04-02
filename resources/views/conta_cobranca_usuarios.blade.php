@extends('includes.pageDefault')

@section('content')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Conta e Cobrança</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                            <button type="button" class="btn d-none d-lg-inline-block mb-1 btn-roxo-fill" data-toggle="modal" data-target="#modal-cria-usuario">
                                Novo usuário
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
            <li class="active"><a href="/conta/usuarios">Usuários</a></li>
            <li><a href="/conta/transacoes">Transações</a></li>
            <li><a href="/conta/transacoes">Métodos de pagamentos</a></li>
        </ul>
    </div>
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table table-vcenter table-condensed table-border">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="width: 100px;">
                            Foto
                        </th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>E-mail</th>
                        <th>Função</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">
                            <img class="img-avatar img-avatar48" src="{{ asset('media/avatars/avatar8.jpg') }}" alt="">
                        </td>
                        <td class="font-w600 link-color"  data-toggle="modal" data-target="#modal-editar-user">
                            <strong>Andrea</strong>
                        </td>
                        <td>
                                Gardner
                        </td>
                        <td>
                            client1@example.com
                        </td>
                        <td>
                                <span class="badge badge-cinza">Usuário</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END Advanced -->
</div>
<!-- END Page Content -->


<!-- Modal Editar Nome-->
<div class="modal" id="modal-editar-user" tabindex="-1" role="dialog" aria-labelledby="modal-default-vcenter"
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Editar usuário</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2">Nome</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-alt" placeholder="Informe o nome">
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="mb-2">Sobrenome</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-alt" placeholder="Informe o Sobrenome">
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="mb-2">Função</label>
                        <select class="form-control form-control-alt mb-2" name="example-select">
                            <option value="0">Administrador</option>
                            <option value="1">Usuário</option>
                        </select>
                        <label>Senha</label>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-alt" placeholder="Informe a senha">
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

<!-- Modal Criar Usuário -->
<div class="modal" id="modal-cria-usuario" tabindex="-1" role="dialog" aria-labelledby="modal-default-vcenter"
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Novo usuário</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4">
                
                <p class="mb-4">Adicione as informações básicas do seu novo usuário para que ele possa criar sua conta. Você pode criar até 2 usuários.</p>
                <div class="row">
                    <div class="col-6">
                        <label class="mb-2">Nome</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-alt" placeholder="Informe o nome">
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="mb-2">Sobrenome</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-alt" placeholder="Informe o Sobrenome">
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="mb-2">Função</label>
                        <select class="form-control form-control-alt mb-2" name="example-select">
                            <option value="0">Administrador</option>
                            <option value="1">Usuário</option>
                        </select>
                        <label>Senha</label>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-alt" placeholder="Informe a senha">
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
