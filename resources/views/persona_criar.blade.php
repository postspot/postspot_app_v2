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
           
        </div>
        <div class="col-md-6 col-sm-12">
            
        <form action="/api/cria_persona" method="post">
            @if(isset($message))
            <div class="mb-3 alert alert-success" role="alert">
                {{ $message }}
            </div>
            
            @endif
            @if(isset($error))
            <div class="mb-3 alert alert-danger" role="alert">
                {{ $error }}
            </div>
            
            @endif
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    <div class="flex mb-4">
                        <img src="{{ asset('media/temp/sem_foto.png') }}" alt="" class="foto-80 rounded-circle">
                        <div class="campo-foto-usuario">
                            <p class="font-w600 mb-2">Avatar da persona</p>
                            <button class="btn btn-secundario ml-2">Escolher avatar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nome*</label>
                                <input name='nome' required type="text" class="form-control form-control-alt" placeholder="Informe seu nome">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Idade</label>
                                <input name='idade' required type="number" class="form-control form-control-alt" placeholder="Insira aqui">
                            </div>
                            <div class="form-group">
                                <label>Cargo</label>
                                <input name='cargo' required type="text" class="form-control form-control-alt" placeholder="Insira o cargo">
                            </div>
                        </div>
                        <div class="col-6">
                            
                            <div class="form-group">
                                <label>Escolaridade</label>
                                <select name='educacao' required class="form-control form-control-alt">
                                    <option value="1">Ensino Fundamental</option>
                                    <option value="2">Ensino Médio</option>
                                    <option value="3">Ensino Superior</option>
                                    <option value="4">Pós/Msc/Doc</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Segmento</label>
                                <input name='segmento' required type="text" class="form-control form-control-alt" placeholder="Insira o segmento">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Características da persona</label>
                        <textarea name='caracteristicas' required class="form-control form-control-alt" rows="7" placeholder="Insira as características da sua persona"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Objetivos</label>
                        <textarea name='objetivos' required class="form-control form-control-alt" rows="7" placeholder="Com relação ao seu negócio, descreva os objetivos da persona."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Desafios</label>
                        <textarea name='desafios' required class="form-control form-control-alt" rows="7" placeholder="Com relação ao seu negócio, descreva os desafios que impedem a persona de alcançar seus objetivos."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Como seu negócio irá ajudar a persona?</label>
                        <textarea name='consideracao' required class="form-control form-control-alt" rows="7" placeholder="Descreva como seu negócio resolve os desafios e ajuda a sua persona atingir seus objetivos."></textarea>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-secundario ml-2">Criar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
