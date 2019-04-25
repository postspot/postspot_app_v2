@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">{{ $persona->nome }}</h1>
            
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="content">

    <!-- Advanced -->
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="menu-lateral">
           
                <li class="active"><a href="/persona/detalhes/{{ $persona->id_persona}}">Detalhes</a></li>
                <li><a href="/persona/{{ $persona->id_persona}}">Editar persona</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
        <form action="/api/editar_persona/{{ $persona->id_persona }}" method="post">
        @method('PUT')
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
                        </div>
                    </div>
                    <div class="row">
                        
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nome*</label>
                                    <input name='nome' disabled type="text" class="form-control form-control-alt" placeholder="Informe seu nome" value="{{ $persona->nome }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Idade</label>
                                    <input name='idade' disabled type="text" class="form-control form-control-alt" placeholder="Insira aqui" value="{{ $persona->idade }}">
                                </div>
                                <div class="form-group">
                                    <label>Cargo</label>
                                    <input name='cargo' disabled type="text" class="form-control form-control-alt" placeholder="Insira o cargo" value="{{ $persona->cargo }}">
                                </div>
                            </div>
                            <div class="col-6">
                                
                                <div class="form-group">
                                    <label>Escolaridade</label>
                                    <select name='educacao' disabled class="form-control form-control-alt">
                                        <option value="0" selected disabled>Selecione aqui</option>
                                        <option value="1" {{ $persona->educacao == 1 ? 'selected' : '' }} >Ensino Fundamental</option>
                                        <option value="2" {{ $persona->educacao == 2 ? 'selected' : '' }} >Ensino Médio</option>
                                        <option value="3" {{ $persona->educacao == 3 ? 'selected' : '' }} >Ensino Superior</option>
                                        <option value="4" {{ $persona->educacao == 4 ? 'selected' : '' }} >Pós/Msc/Doc</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Segmento</label>
                                    <input name='segmento' disabled type="text" class="form-control form-control-alt" placeholder="Insira o segmento" value="{{ $persona->segmento }}">
                                </div>
                            </div>
                        
                    </div>
                    
                    <div class="form-group">
                        <label>Características da persona</label>
                        <textarea name='caracteristicas' disabled class="form-control form-control-alt" rows="7" placeholder="Insira as características da sua persona">{{ $persona->caracteristicas }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Objetivos</label>
                        <textarea name='objetivos' disabled class="form-control form-control-alt" rows="7" placeholder="Com relação ao seu negócio, descreva os objetivos da persona.">{{ $persona->objetivos }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Desafios</label>
                        <textarea name='desafios' disabled class="form-control form-control-alt" rows="7" placeholder="Com relação ao seu negócio, descreva os desafios que impedem a persona de alcançar seus objetivos.">{{ $persona->desafios }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Como seu negócio irá ajudar a persona?</label>
                        <textarea name='consideracao' disabled class="form-control form-control-alt" rows="7" placeholder="Descreva como seu negócio resolve os desafios e ajuda a sua persona atingir seus objetivos.">{{ $persona->consideracao }}</textarea>
                    </div>

                </div>
            </div>
        </form>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
