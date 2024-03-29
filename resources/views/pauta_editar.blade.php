@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">{{ $pauta->nome_tarefa }}</h1>
            
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="content">

    <!-- Advanced -->
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="menu-lateral">
           
                <li><a href="/pauta/detalhes/{{ $pauta->id_tarefa }}">Detalhes da pauta</a></li>
                <li class="active"><a href="/pauta/editar/{{ $pauta->id_tarefa }}">Editar pauta</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
        <form action="/api/editar_pauta/{{ $pauta->id_tarefa }}" method="post">
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
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Persona</label>
                                <select name='id_persona' class="form-control form-control-alt">
                                    <option value="0" selected disabled>Selecione a persona</option>
                                    @foreach($pauta->persona as $p)
                                    <option value="{{ $p->id_persona }}" {{ $pauta->id_persona == $p->id_persona ? 'selected' : '' }} >{{ $p->nome }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label>Palavra-chave foco</label>
                                <input name='palavra_chave'  type="text" class="form-control form-control-alt" placeholder="Insira a palavra chave" value="{{ $pauta->palavra_chave }}">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Estágio da jornada</label>
                                <select name='estagio_compra'  class="form-control form-control-alt">
                                    <option value="0" selected disabled>Selecione o estágio</option>
                                    <option value="1" {{ $pauta->estagio_compra == 1 ? 'selected' : '' }} >Conhecimento</option>
                                    <option value="2" {{ $pauta->estagio_compra == 2 ? 'selected' : '' }} >Descoberta</option>
                                    <option value="3" {{ $pauta->estagio_compra == 3 ? 'selected' : '' }} >Aquisição</option>
                                    <option value="4" {{ $pauta->estagio_compra == 4 ? 'selected' : '' }} >Recorrência</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Formato</label>
                                <select name='id_tipo' class="form-control form-control-alt">
                                    <option value="0" selected>Selecione o formato</option>
                                    @foreach($pauta->tipos as $t)
                                    <option value="{{ $t->id_tipo }}" {{ $pauta->id_tipo == $t->id_tipo ? 'selected' : '' }}>{{ $t->nome_tipo }} </option>
                                    @endforeach
                                </select>                                
                            </div>
                        </div>

                        <div class='col-12'>
                            <div class="form-group">
                                <label>Como este conteúdo irá ajudar a persona</label>
                                <textarea name='briefing_tarefa'  class="form-control form-control-alt" rows="7" placeholder="Insira as características da sua persona">{{ $pauta->briefing_tarefa }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            
                            <div class="form-group">
                                <label>Tamanho</label>
                                <select name='educacao'  class="form-control form-control-alt">
                                    <option value="0" selected disabled>Selecione aqui</option>
                                    <option value="1"  >Tamanho 1</option>
                                    <option value="2"  >Tamanho 2</option>
                                    <option value="3"  >Tamanho 3</option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Data de entrega</label>
                                <input name='data_entrega'  type="text" class="form-control form-control-alt" placeholder="Insira o segmento" value="{{ $pauta->data_entrega }} ">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Título do conteúdo</label>
                        <input name='nome_tarefa'  type="text" class="form-control form-control-alt" placeholder="Insira o segmento" value="{{ $pauta->nome_tarefa }}">
                    </div>
                    <div class="form-group">
                        <label>Chamada para ação</label>
                        <textarea name='tipo_cta'  class="form-control form-control-alt" rows="7" placeholder="Com relação ao seu negócio, descreva os objetivos da persona.">{{ $pauta->tipo_cta }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Links</label>
                        <textarea name='referencias'  class="form-control form-control-alt" rows="7" placeholder="Com relação ao seu negócio, descreva os desafios que impedem a persona de alcançar seus objetivos.">{{ $pauta->referencias }}</textarea>
                    </div>
                    <div class="text-left">
                        <button class="btn btn-secundario ml-2">Salvar</button>
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


