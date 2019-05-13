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
                            <select required class="form-control form-control-alt" name="segmento_projeto">
                                <option value='Agência e Serviços criativos' {{ $proj->segmento_projeto == 'Agência e Serviços criativos' ? 'selected' : '' }} > Agência e Serviços criativos</option>
                                <option value='Agricultura e Serviços de alimentação' {{ $proj->segmento_projeto == 'Agricultura e Serviços de alimentação' ? 'selected' : '' }} > Agricultura e Serviços de alimentação</option>
                                <option value='Arquitetura e Construção' {{ $proj->segmento_projeto == 'Arquitetura e Construção' ? 'selected' : '' }} > Arquitetura e Construção</option>
                                <option value='Artes e Artistas' {{ $proj->segmento_projeto == 'Artes e Artistas' ? 'selected' : '' }} > Artes e Artistas   
                                <option value='Beleza e Cuidados pessoais' {{ $proj->segmento_projeto == 'Beleza e Cuidados pessoais' ? 'selected' : '' }} > Beleza e Cuidados pessoais</option>
                                <option value='Casa e Jardim' {{ $proj->segmento_projeto == 'Casa e Jardim' ? 'selected' : '' }} > Casa e Jardim</option>
                                <option value='Computadores e Eletrônicos' {{ $proj->segmento_projeto == 'Computadores e Eletrônicos' ? 'selected' : '' }} > Computadores e Eletrônicos</option>
                                <option value='Construção civil' {{ $proj->segmento_projeto == 'Construção civil' ? 'selected' : '' }} > Construção civil</option>
                                <option value='Consultoria' {{ $proj->segmento_projeto == 'Consultoria' ? 'selected' : '' }} > Consultoria</option>
                                <option value='Ecommerce' {{ $proj->segmento_projeto == 'Ecommerce' ? 'selected' : '' }} > Ecommerce</option>
                                <option value='Educação e Treinamento' {{ $proj->segmento_projeto == 'Educação e Treinamento' ? 'selected' : '' }} > Educação e Treinamento</option>
                                <option value='Entretenimento' {{ $proj->segmento_projeto == 'Entretenimento' ? 'selected' : '' }} > Entretenimento e Eventos</option>
                                <option value='Esportes' {{ $proj->segmento_projeto == 'Esportes' ? 'selected' : '' }} > Esportes</option>
                                <option value='Farmacêutico' {{ $proj->segmento_projeto ==  'Farmacêutico' ? 'selected' : '' }} > Farmacêutico</option>
                                <option value='Foto e Vídeo' {{ $proj->segmento_projeto ==  'Foto e Vídeo' ? 'selected' : '' }} > Foto e Vídeo</option>
                                <option value='Governamental' {{ $proj->segmento_projeto ==  'Governamental' ? 'selected' : '' }} > Governamental</option>
                                <option value='Imobiliário ' {{ $proj->segmento_projeto ==  'Imobiliário ' ? 'selected' : '' }} > Imobiliário </option>
                                <option value='Jogos' {{ $proj->segmento_projeto ==  'Jogos' ? 'selected' : '' }} > Jogos</option>
                                <option value='Jurídico' {{ $proj->segmento_projeto ==  'Jurídico' ? 'selected' : '' }} > Jurídico</option>
                                <option value='Manufatura' {{ $proj->segmento_projeto ==  'Manufatura' ? 'selected' : '' }} > Manufatura</option>
                                <option value='Marketing e Anúncios' {{ $proj->segmento_projeto ==  'Marketing e Anúncios' ? 'selected' : '' }} > Marketing e Anúncios</option>
                                <option value='Mídia e Publicidade' {{ $proj->segmento_projeto ==  'Mídia e Publicidade' ? 'selected' : '' }} > Mídia e Publicidade</option>
                                <option value='Médico, Dental e Saúde' {{ $proj->segmento_projeto ==  'Médico, Dental e Saúde' ? 'selected' : '' }} > Médico, Dental e Saúde</option>
                                <option value='Mobile e Aplicativos' {{ $proj->segmento_projeto ==  'Mobile e Aplicativos' ? 'selected' : '' }} > Mobile e Aplicativos</option>
                                <option value='Música e Músicos' {{ $proj->segmento_projeto ==  'Música e Músicos' ? 'selected' : '' }} > Música e Músicos</option>
                                <option value='Negócios e Finanças' {{ $proj->segmento_projeto ==  'Negócios e Finanças' ? 'selected' : '' }} > Negócios e Finanças</option>
                                <option value='Ofertas e Cupons de desconto' {{ $proj->segmento_projeto ==  'Ofertas e Cupons de desconto' ? 'selected' : '' }} > Ofertas e Cupons de desconto</option>
                                <option value='Politica' {{ $proj->segmento_projeto ==  'Politica' ? 'selected' : '' }} > Politica</option>
                                <option value='Relações públicas' {{ $proj->segmento_projeto ==  'Relações públicas' ? 'selected' : '' }} > Relações públicas</option>
                                <option value='Recrutamento e Seleção' {{ $proj->segmento_projeto ==  'Recrutamento e Seleção' ? 'selected' : '' }} > Recrutamento e Seleção</option>
                                <option value='Religião' {{ $proj->segmento_projeto ==  'Religião' ? 'selected' : '' }} > Religião</option>
                                <option value='Rede social e Comunidades online' {{ $proj->segmento_projeto ==  'Rede social e Comunidades online' ? 'selected' : '' }} > Rede social e Comunidades online</option>
                                <option value='Saúde e Bem-estar' {{ $proj->segmento_projeto ==  'Saúde e Bem-estar' ? 'selected' : '' }} > Saúde e Bem-estar</option>
                                <option value='Seguros' {{ $proj->segmento_projeto ==  'Seguros' ? 'selected' : '' }} > Seguros</option>
                                <option value='Sem fins lucrativos' {{ $proj->segmento_projeto ==  'Sem fins lucrativos' ? 'selected' : '' }} > Sem fins lucrativos</option>
                                <option value='Serviços profissionais' {{ $proj->segmento_projeto ==  'Serviços profissionais' ? 'selected' : '' }} > Serviços profissionais</option>
                                <option value='Software e Aplicativos' {{ $proj->segmento_projeto ==  'Software e Aplicativos' ? 'selected' : '' }} > Software e Aplicativos</option>
                                <option value='Telecomunicações' {{ $proj->segmento_projeto ==  'Telecomunicações' ? 'selected' : '' }} > Telecomunicações</option>
                                <option value='Varejo' {{ $proj->segmento_projeto ==  'Varejo' ? 'selected' : '' }} > Varejo</option>
                                <option value='Viagem e Transportes' {{ $proj->segmento_projeto ==  'Viagem e Transportes' ? 'selected' : '' }} > Viagem e Transportes</option>
                                <option value='Vitaminas e Suplementos' {{ $proj->segmento_projeto ==  'Vitaminas e Suplementos' ? 'selected' : '' }} > Vitaminas e Suplementos</option>
                                <option value='Outro' {{ $proj->segmento_projeto ==  'Outro' ? 'selected' : '' }} > Outro</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Website</label>
                            <input class="form-control form-control-alt" name="site_projeto" required placeholder="Insira o nome do seu negócio, organização, etc." value="{{ $proj->site_projeto }}">
                        </div>
                        <div class="form-group">
                            <label>Seu negócio é uma agência</label>
                            <select required class="form-control form-control-alt" name="agencia_projeto">
                                
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
