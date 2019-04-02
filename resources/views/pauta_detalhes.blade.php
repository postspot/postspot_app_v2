@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">O que é marketing digital?</h1>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="content">

    <!-- Advanced -->
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="menu-lateral">
                <li class="active">Visualizar</li>
                <li><a href="pautas_detalhes.html">Editar</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    <div class="form-group">
                        <label>Titulo</label>
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
