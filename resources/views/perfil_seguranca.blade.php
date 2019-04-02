@extends('includes.pageDefault')

@section('content')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Perfil e preferências</h1>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="content">

    <!-- Advanced -->
    <div class="row">
        <div class="col-md-3 col-sm-12 mb-5">
            <ul class="menu-lateral">
                <li><a href="/perfil/informacoes">Informações básicas</a></li>
                <li class="active"><a href="/perfil/seguranca">Segurança</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-bordered block-rounded">
                <form class="" action="/api/updatesenha/{{ JWTAuth::toUser(JWTAuth::getToken())->id }}" method="post">
                    @method('PUT')
                    <div class="block-content">
                        
                        <div class="form-group">
                            @if(isset($message))
                            <div class="mb-3 alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                            
                            @endif
                            <label>Senha Atual</label><label style='float:right'><strong><a href="/recupera-senha" class="link-color">Esqueci a senha</a></strong></label>
                            <input type="password" id="atual" class="form-control form-control-alt" name='old_password' value="">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        </div>
                        <div class="form-group">
                            <label>Nova Senha</label>
                            <input type="password" id="senha"  class="form-control form-control-alt" name='password' value="">
                        </div>
                        <div class="form-group">
                            <label>Confirmar nova senha</label>
                            <input type="password" id="confirmacao" class="form-control form-control-alt" name='confirm' value="">
                            <div id="msg-erro" style="color:red;display:none">As senhas não são iguais!</div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-cinza">Cancelar</button>
                            <button class="btn btn-secundario ml-2" id="botao">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->



    <!-- Modal Email-->
    <div class="modal" id="modal-email" tabindex="-1" role="dialog" aria-labelledby="modal-default-vcenter" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title">Editar endereço de email</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>O seu acesso e notificações serão alterados para seu novo email.</p>
                    <p class="mb-2 font-w600">E-mail</p>
                    <div class="form-group mb-0">
                        <input type="text" class="form-control form-control-alt" placeholder="">
                    </div>
                </div>
                <div class="modal-footer border-0 p-3">
                    <button type="button" class="btn btn-cinza" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-secundario ml-2" data-dismiss="modal">Salvar</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Senha-->
<div class="modal" id="modal-senha" tabindex="-1" role="dialog" aria-labelledby="modal-default-vcenter" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title">Redefinir senha</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Confirmar senha atual</label>
                        <input type="text" class="form-control form-control-alt" placeholder="">
                    </div>
                    <div class="form-group mb-0">
                        <label>Nova senha</label>
                        <input type="text" class="form-control form-control-alt" placeholder="">
                    </div>
                </div>
                <div class="modal-footer border-0 p-3">
                    <button type="button" class="btn btn-cinza" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-secundario ml-2" data-dismiss="modal">Redefinir</button>
                </div>
            </div>
        </div>
    </div>


<script>


var atual = document.getElementById("atual");
var email = document.getElementById("senha");
var confirm_senha = document.getElementById("confirmacao");

senha.onchange = validarSenha;
confirm_senha.onkeyup = validarSenha;



function validarSenha(){
    
    senha = document.getElementById('senha').value;
    senha2 = document.getElementById('confirmacao').value;

    if(senha!= senha2) {
        document.getElementById('botao').disabled = true;
        document.getElementById('msg-erro').style.display = "block";

        return false; 
    }
    document.getElementById('msg-erro').style.display = "none";
    document.getElementById('botao').disabled = false;
    return true;
}


</script>
@endsection
