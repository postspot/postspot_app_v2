@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Nome da persona</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                            <button type="button" class="btn d-none d-lg-inline-block mb-1 btn-roxo-fill">
                                Exportar persona
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
                <li class="active"><a href="/persona/detalhes">Detalhes</a></li>
                <li><a href="/persona/editar">Editar persona</a></li>
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
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nome*</label>
                                <input type="text" class="form-control form-control-alt" placeholder="Informe seu nome">
                            </div>
                            <div class="form-group">
                                <label>Idade</label>
                                <input type="text" class="form-control form-control-alt" placeholder="Insira aqui">
                            </div>
                            <div class="form-group">
                                <label>Cargo</label>
                                <input type="text" class="form-control form-control-alt" placeholder="Insira o cargo">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Sobrenome*</label>
                                <input type="text" class="form-control form-control-alt" placeholder="Informe seu sobrenome">
                            </div>
                            <div class="form-group">
                                <label>Escolaridade</label>
                                <select class="form-control form-control-alt">
                                    <option value="0" selected disabled>Selecione aqui</option>
                                    <option value="1">Ensino médio</option>
                                    <option value="2">Ensino Superior</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Segmento</label>
                                <input type="text" class="form-control form-control-alt" placeholder="Insira o segmento">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Características da persona</label>
                        <textarea class="form-control form-control-alt" rows="7" placeholder="Insira as características da sua persona"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Objetivos</label>
                        <textarea class="form-control form-control-alt" rows="7" placeholder="Descreva os objetivos primários e secundários da persona."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Como seu negócio irá ajudar a persona?</label>
                        <textarea class="form-control form-control-alt" rows="7" placeholder="Descreva como seu negócio resolve os desafios  e ajuda a sua persona atingir seus objetivos."></textarea>
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
