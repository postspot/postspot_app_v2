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
                <li><a href="/conteudo/detalhes">Visualizar</a></li>
                <li><a href="/conteudo/detalhes-edicao">Editar</a></li>
                <li class="active">Pauta</li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
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
                            @foreach($pauta->tipos as $t)
                            <option value="{{ $t->id_tipo }}" {{ $pauta->id_tipo == $t->id_tipo ? 'selected' : '' }}>{{ $t->nome_tipo }} </option>
                            @endforeach
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

                <div class="col-12">
                    <div class="form-group">
                        <label>Título do conteúdo</label>
                        <input name='segmento' disabled type="text" class="form-control form-control-alt" placeholder="Insira o segmento" value="{{ $pauta->nome_tarefa }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Chamada para ação</label>
                        <textarea name='objetivos' disabled class="form-control form-control-alt" rows="7" placeholder="Com relação ao seu negócio, descreva os objetivos da persona.">{{ $pauta->tipo_cta }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Links</label>
                        <textarea name='desafios' disabled class="form-control form-control-alt" rows="7" placeholder="Com relação ao seu negócio, descreva os desafios que impedem a persona de alcançar seus objetivos.">{{ $pauta->referencias }}</textarea>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="block block-bordered block-rounded p-3">
                <h1 class="font-size-h3 font-w400">Status</h1>
                <p>redação aprovação</p>
                <p>21 de abr de 2019, 08:32</p>
            </div>
            <div class="block block-bordered block-rounded">
                <div class="font-size-sm p-3">
                    <div class="media">
                        <a class="img-link mr-2" href="javascript:void(0)">
                            <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{ asset('media/avatars/avatar8.jpg') }}" alt="">
                        </a>
                        <div class="media-body">
                            <p class="mb-1">
                                <span class="font-w600">Helena</span>
                                Helena Leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus?
                            </p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="img-link mr-2" href="javascript:void(0)">
                            <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{ asset('media/avatars/avatar8.jpg') }}" alt="">
                        </a>
                        <div class="media-body">
                            <p class="mb-1">
                                <span class="font-w600">Helena</span>
                                Helena Leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="font-size-sm p-2">
                    <form action="db_social_compact.html" method="POST" onsubmit="return false;">
                        <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
                    </form>
                </div>
            </div>
            <div class="block block-bordered block-rounded p-3">
                <p>Insira sua img aqui</p>
                <input type="file" name="" id="">
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
