@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2"></h1>
            
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="content">

    <!-- Advanced -->
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="menu-lateral">
           
                <li>Detalhes da pauta</li>
                <li>Editar pauta</li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
        <form action="/api/criar_pauta" method="post">
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
                                    <?php
                                    $user = JWTAuth::toUser(JWTAuth::getToken());
                                    $personas = $user->projetos()->join('personas', 'personas.id_projeto', 'projetos.id_projeto')->select('personas.*')->where('projeto_ativo', '1')->get();
                                    ?>
                                    @foreach($personas as $p)
                                    <option value="{{ $p->id_persona }}">{{ $p->nome }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label>Palavra-chave foco</label>
                                <input name='palavra_chave'  type="text" class="form-control form-control-alt" placeholder="Insira a palavra chave" value="">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Estágio da jornada</label>
                                <select name='estagio_compra'  class="form-control form-control-alt">
                                    <option value="0" selected disabled>Selecione o estágio</option>
                                    <option value="1"  >Conhecimento</option>
                                    <option value="2"  >Considereção</option>
                                    <option value="3"  >Decisão</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Formato</label>
                                <select name='id_tipo'  class="form-control form-control-alt">
                                    <option value="0" selected disabled>Selecione o formato</option>
                                    @foreach($tipos as $t)
                                    <option value="{{ $t->id_tipo }}">{{ $t->nome_tipo }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class='col-12'>
                            <div class="form-group">
                                <label>Como este conteúdo irá ajudar a persona</label>
                                <textarea name='briefing_tarefa'  class="form-control form-control-alt" rows="7" placeholder="Aqui você direciona como o conteúdo deve ser escrito. Detalhe como esse conteúdo deve ajudar a persona em questão. Inclua todas as informações necessárias para construção do texto de acordo com sua estratégia de conteúdo."></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            
                            <div class="form-group">
                                <label>Tamanho</label>
                                <select name='tamanho'  class="form-control form-control-alt">
                                    <option value="0" selected disabled>Selecione o tamanho</option>
                                    <option value="1"  >Tamanho 1</option>
                                    <option value="2"  >Tamanho 2</option>
                                    <option value="3"  >Tamanho 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Data de entrega</label>
                                <input name='data_entrega'  type="text" class="form-control form-control-alt" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Título do conteúdo</label>
                        <input name='nome_tarefa'  type="text" class="form-control form-control-alt" placeholder="Insira o título do conteúdo" value="">
                    </div>
                    <div class="form-group">
                        <label>Chamada para ação</label>
                        <textarea name='tipo_cta'  class="form-control form-control-alt" rows="7" placeholder="Descreva a ação que quer que seu visitante faça após ler o conteúdo. Ex: Seguir sua empresa nas mídias sociais."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Links</label>
                        <textarea name='referencias'  class="form-control form-control-alt" rows="7" placeholder="Insira links de referẽncias de conteúdo."></textarea>
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
