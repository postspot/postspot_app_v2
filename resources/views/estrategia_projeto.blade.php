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
                <li class="active"><a href="/estrategia/projeto">Projeto</a></li>
                <li><a href="/estrategia/negocio">Negócio</a></li>
                <li><a href="/estrategia/tomevoz">Voz e tom</a></li>
                <li><a href="/estrategia/presenca">Presença online</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    
                    <form action="/api/atualiza_projeto/{{ $proj->id_projeto }}" method="post">
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
                            <label>Nome do negócio</label>
                            <input class="form-control form-control-alt" name="nome_projeto" required placeholder="Insira o nome do seu negócio, organização, etc." value="{{ $proj->nome_projeto }}">
                        </div>

                        <div class="form-group">
                            <label>Segmento de mercado</label>
                            <input class="form-control form-control-alt" name="segmento_projeto" required placeholder="Insira o nome do seu negócio, organização, etc." value="{{ $proj->segmento_projeto }}">
                        </div>
                        
                        <div class="form-group">
                            <label>Website</label>
                            <input class="form-control form-control-alt" name="site_projeto" required placeholder="Insira o nome do seu negócio, organização, etc." value="{{ $proj->site_projeto }}">
                        </div>
                        <div class="form-group">
                            <label>Seu negócio é uma agência</label>
                            <select name="nome" required class="form-control form-control-alt" name="agencia_projeto">
                                
                                <option value="1" {{ $proj->agencia_projeto == 1 ? 'selected' : '' }} > Sim</option>
                                <option value="2" {{ $proj->agencia_projeto == 2 ? 'selected' : '' }} > Não</option>
                            </select>
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
