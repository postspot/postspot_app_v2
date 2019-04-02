@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Nome da persona</h1>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="content">

    <!-- Advanced -->
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="menu-lateral">
                <li><a href="/persona/detalhes">Detalhes</a></li>
                <li class="active"><a href="/persona/editar">Editar persona</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    <div class="flex mb-4">
                        <img src="assets/images/andress.jpeg" alt="" class="foto-80 rounded-circle">
                        <div class="campo-foto-usuario">
                            <p class="font-w600 mb-2">Foto do usuário</p>
                            <button class="btn btn-roxo-empty">Alterar foto</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nome*</label>
                        <input type="text" class="form-control form-control-alt" placeholder="Informe seu nome">
                    </div>
                    <div class="form-group">
                        <label>Sobrenome*</label>
                        <input type="text" class="form-control form-control-alt" placeholder="Informe seu sobrenome">
                    </div>
                    <div class="form-group">
                        <label>Telefone*</label>
                        <input type="number" class="form-control form-control-alt" placeholder="Informe seu telefone">
                    </div>
                    <div class="form-group">
                        <label class="d-block">Mídias sociais que utiliza</label>
                        <div class=" flex justify-content-between">
                            <div class="custom-control custom-checkbox custom-control-inline custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox-custom-inline1"
                                    name="example-checkbox-custom-inline1" checked="">
                                <label class="custom-control-label" for="example-checkbox-custom-inline1">Facebook</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox-custom-inline2"
                                    name="example-checkbox-custom-inline2">
                                <label class="custom-control-label" for="example-checkbox-custom-inline2">LinkedIn</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox-custom-inline3"
                                    name="example-checkbox-custom-inline3">
                                <label class="custom-control-label" for="example-checkbox-custom-inline3">Twitter</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox-custom-inline1"
                                    name="example-checkbox-custom-inline1" checked="">
                                <label class="custom-control-label" for="example-checkbox-custom-inline1">Instagram</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox-custom-inline2"
                                    name="example-checkbox-custom-inline2">
                                <label class="custom-control-label" for="example-checkbox-custom-inline2">Pinterest</label>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-roxo-empty">Cancelar</button>
                        <button class="btn btn-roxo-fill ml-2">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
