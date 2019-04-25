@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Estratégia</h1>
            
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="content">

    <!-- Advanced -->
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="menu-lateral">
                <li><a href="/estrategia/projeto">Projeto</a></li>
                <li class="active"><a href="/estrategia/negocio">Negócio</a></li>
                <li><a href="/estrategia/tomevoz">Voz e tom</a></li>
                <li><a href="/estrategia/presenca">Presença online</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                <form action="/api/atualiza_negocio/{{ $estrategia->id_estrategia }}" method="post">
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
                    <div class="form-group">
                        <label>Apresente seu negócio</label>
                        
                        <textarea name='apresentacao' class="form-control form-control-alt" required rows="7" placeholder="Escreva um pequeno texto apresentando o seu negócio e a proposta de valor que você ofere aos seus clientes.">{{ $estrategia->apresentacao }}</textarea>
                    </div>
                    <div class="form-group">
                        
                        
                        <label>Objetivo com Marketing de Conteúdo</label>
                        <select name='objetivo_primario' class="form-control form-control-alt" required>
                            <option {{ $estrategia->objetivo_primario == 1 ? 'selected' : '' }} value="1">Geração de tráfego</option>
                            <option {{ $estrategia->objetivo_primario == 2 ? 'selected' : '' }} value="2">Conhecimento da marca</option>
                            <option {{ $estrategia->objetivo_primario == 3 ? 'selected' : '' }} value="3">Engajamento com a marca</option>
                            <option {{ $estrategia->objetivo_primario == 4 ? 'selected' : '' }} value="4">Tornar-se referência</option>
                            <option {{ $estrategia->objetivo_primario == 5 ? 'selected' : '' }} value="5">Geração de leads</option>
                            <option {{ $estrategia->objetivo_primario == 6 ? 'selected' : '' }} value="6">Nutrição de leads</option>
                            <option {{ $estrategia->objetivo_primario == 7 ? 'selected' : '' }} value="7">Retenção de clientes</option>
                            <option {{ $estrategia->objetivo_primario == 0 ? 'selected' : '' }} value="0">Outro</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Site dos principais concorrentes</label>
                        <input name='concorrente1' class="form-control form-control-alt mb-2" required value="{{ $estrategia->concorrente1 }}" placeholder="http://concorrente1.com.br">
                        <input name='concorrente2' class="form-control form-control-alt mb-2" required value="{{ $estrategia->concorrente2 }}" placeholder="http://concorrente2.com.br">
                        <input name='concorrente3'class="form-control form-control-alt mb-2" required value="{{ $estrategia->concorrente3 }}" placeholder="http://concorrente3.com.br">
                    </div>
                    <div class="form-group">
                        <label>Site das principais referências em conteúdo do seu mercado</label>
                        <input name='referencia1' class="form-control form-control-alt mb-2" required value="{{ $estrategia->referencia1 }}" placeholder="http://referencia1.com.br">
                        <input name='referencia2' class="form-control form-control-alt mb-2" required value="{{ $estrategia->referencia2 }}" placeholder="http://referencia2.com.br">
                        <input name='referencia3' class="form-control form-control-alt mb-2" required value="{{ $estrategia->referencia3 }}" placeholder="http://referencia3.com.br">
                    </div>
                    <div class="form-group">
                        <label>Considerações gerais</label>
                        <textarea name='consideracoes_gerais' class="form-control form-control-alt" required rows="7" placeholder="Espaço para informações gerais para suporte de criação de conteúdo.">{{ $estrategia->consideracoes_gerais }}</textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-secundario ml-2">Atualizar</button>
                    </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
