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
        <div class="col-md-3 col-sm-12">
            <ul class="menu-lateral">
                <li class="active"><a href="/perfil/informacoes">Informações básicas</a></li>
                <li><a href="/perfil/seguranca">Mudar senha</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-bordered block-rounded">
                <form enctype="multipart/form-data" action="/api/updateperfil/{{ JWTAuth::toUser(JWTAuth::getToken())->id }}" method="post">
                    <div class="block-content">
                        <div class="flex mb-4">
                            <img src="{{ env('APP_URL').'/storage/temp' }}/{{ JWTAuth::toUser(JWTAuth::getToken())->foto_usuario }}" alt="" class="foto-80 rounded-circle">
                            <div class="campo-foto-usuario">
                                <p class="font-w600 mb-2">Foto do usuário</p>
                                <input type="file" name="image" class="btn btn-cinza" />
                            </div>
                        </div>
                        <div class="form-group">
                            @if(isset($message))
                            <div class="mb-3 alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                            
                            @endif
                            <label>Nome</label>
                            <input required type="text" class="form-control form-control-alt" name='name' value="{{ JWTAuth::toUser(JWTAuth::getToken())->name }}">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        </div>
                        <div class="form-group">
                            <label>Sobrenome</label>
                            <input type="text" class="form-control form-control-alt" name='sobrenome' value="{{ JWTAuth::toUser(JWTAuth::getToken())->sobrenome }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control form-control-alt" name='email' value="{{ JWTAuth::toUser(JWTAuth::getToken())->email }}">
                        </div>
                        <div class="text-right">
                            <button class="btn btn-cinza">Cancelar</button>
                            <button class="btn btn-secundario ml-2">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->

@endsection
