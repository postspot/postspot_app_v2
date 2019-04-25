@extends('includes.pageDefault')

@section('content')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">{{ $pauta->nome_tarefa }}</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                            <button type="button" data-toggle="modal" data-target="#modal-delete" class="btn d-none d-lg-inline-block mb-1 btn-cinza">
                                 Deletar Pauta
                            </button>
                    </li>
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                        
                        <button type="button" data-toggle="modal" data-target="#modal-sure" class="btn d-none d-lg-inline-block mb-1 btn-secundario">
                                Solicitar Conteúdo
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
           
                <li class="active"><a href="/pauta/detalhes/{{ $pauta->id_tarefa }}">Detalhes da pauta</a></li>
                <li><a href="/pauta/editar/{{ $pauta->id_tarefa }}">Editar pauta</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
        <form action="/api/editar_pauta/" method="post">
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
                                <select name='educacao' disabled class="form-control form-control-alt">
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
                                <input name='nome' disabled type="text" class="form-control form-control-alt" placeholder="Insira a palavra chave" value="{{ $pauta->palavra_chave }}">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Estágio da jornada</label>
                                <select name='educacao' disabled class="form-control form-control-alt">
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
                                <select name='educacao' disabled class="form-control form-control-alt">
                                    <option value="0" selected disabled>Selecione o formato</option>
                                    <option value="1"  {{ $pauta->id_tipo == 1 ? 'selected' : '' }}>Blog Post</option>
                                    <option value="2"  {{ $pauta->id_tipo == 2 ? 'selected' : '' }}>Ebook</option>
                                </select>
                            </div>
                        </div>

                        <div class='col-12'>
                            <div class="form-group">
                                <label>Como este conteúdo irá ajudar a persona</label>
                                <textarea name='caracteristicas' disabled class="form-control form-control-alt" rows="7" placeholder="Insira as características da sua persona">{{ $pauta->briefing_tarefa }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            
                            <div class="form-group">
                                <label>Tamanho</label>
                                <select name='educacao' disabled class="form-control form-control-alt">
                                    <option value="0" selected disabled>Selecione aqui</option>
                                    <option value="1"  >Ensino Fundamental</option>
                                    <option value="2"  >Ensino Médio</option>
                                    <option value="3"  >Ensino Superior</option>
                                    <option value="4"  >Pós/Msc/Doc</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Data de entrega</label>
                                <input name='segmento' disabled type="text" class="form-control form-control-alt" placeholder="Insira o segmento" value="{{ $pauta->data_entrega }} ">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Título do conteúdo</label>
                        <input name='segmento' disabled type="text" class="form-control form-control-alt" placeholder="Insira o segmento" value="{{ $pauta->nome_tarefa }}">
                    </div>
                    <div class="form-group">
                        <label>Chamada para ação</label>
                        <textarea name='objetivos' disabled class="form-control form-control-alt" rows="7" placeholder="Com relação ao seu negócio, descreva os objetivos da persona.">{{ $pauta->tipo_cta }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Links</label>
                        <textarea name='desafios' disabled class="form-control form-control-alt" rows="7" placeholder="Com relação ao seu negócio, descreva os desafios que impedem a persona de alcançar seus objetivos.">{{ $pauta->referencias }}</textarea>
                    </div>
                    

                </div>
            </div>
        </form>
        </div>
    </div>
    <!-- END Advanced -->
</div>


<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="form_delete" action="/api/deletar_pauta/{{ $pauta->id_tarefa }}" method="POST" >
            @method('DELETE')
                <div class="block block-transparent mb-0">
                    <div class="block-header background-cinza">
                        <h3 class="block-title">Você tem certeza?</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Você está prestes a excluir esta pauta da sua conta. Todas as informações da pauta serão perdidas.</p>
                        <input type="hidden" id="id_tarefa" value="">
                    </div>
                    <div class="block-content block-content-full text-right bg-light">
                        <button type="submit" class="btn btn-sm btn-secundario">Deletar pauta</button>
                        <button type="button" class="btn btn-sm btn-cinza" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


 <div class="modal fade" id="modal-sure" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="form_delete" action="/api/solicitar_pauta/{{ $pauta->id_tarefa }}" method="POST" >
                <div class="block block-transparent mb-0">
                    <div class="block-header background-cinza">
                        <h3 class="block-title">Você tem certeza?</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Você está prestes a encaminhar a pauta para criação do conteúdo.</p>
                        <input type="hidden" id="id_persona" value="">
                    </div>
                    <div class="block-content block-content-full text-right bg-light">
                        <button type="submit" class="btn btn-sm btn-secundario">Solicitar conteúdo</button>
                        <button type="button" class="btn btn-sm btn-cinza" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END Page Content -->
@endsection
