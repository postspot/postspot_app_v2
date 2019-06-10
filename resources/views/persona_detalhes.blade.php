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
                        <img src="{{ env('APP_URL').'/storage/persona' }}/{{ $persona->foto }}" alt="" class="foto-80 rounded-circle">
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
                                    <select required disabled class="form-control form-control-alt" name="segmento">
                                        <option value='Agência e Serviços criativos' {{ $persona->segmento == 'Agência e Serviços criativos' ? 'selected' : '' }} > Agência e Serviços criativos</option>
                                        <option value='Agricultura e Serviços de alimentação' {{ $persona->segmento == 'Agricultura e Serviços de alimentação' ? 'selected' : '' }} > Agricultura e Serviços de alimentação</option>
                                        <option value='Arquitetura e Construção' {{ $persona->segmento == 'Arquitetura e Construção' ? 'selected' : '' }} > Arquitetura e Construção</option>
                                        <option value='Artes e Artistas' {{ $persona->segmento == 'Artes e Artistas' ? 'selected' : '' }} > Artes e Artistas   
                                        <option value='Beleza e Cuidados pessoais' {{ $persona->segmento == 'Beleza e Cuidados pessoais' ? 'selected' : '' }} > Beleza e Cuidados pessoais</option>
                                        <option value='Casa e Jardim' {{ $persona->segmento == 'Casa e Jardim' ? 'selected' : '' }} > Casa e Jardim</option>
                                        <option value='Computadores e Eletrônicos' {{ $persona->segmento == 'Computadores e Eletrônicos' ? 'selected' : '' }} > Computadores e Eletrônicos</option>
                                        <option value='Construção civil' {{ $persona->segmento == 'Construção civil' ? 'selected' : '' }} > Construção civil</option>
                                        <option value='Consultoria' {{ $persona->segmento == 'Consultoria' ? 'selected' : '' }} > Consultoria</option>
                                        <option value='Ecommerce' {{ $persona->segmento == 'Ecommerce' ? 'selected' : '' }} > Ecommerce</option>
                                        <option value='Educação e Treinamento' {{ $persona->segmento == 'Educação e Treinamento' ? 'selected' : '' }} > Educação e Treinamento</option>
                                        <option value='Entretenimento' {{ $persona->segmento == 'Entretenimento' ? 'selected' : '' }} > Entretenimento e Eventos</option>
                                        <option value='Esportes' {{ $persona->segmento == 'Esportes' ? 'selected' : '' }} > Esportes</option>
                                        <option value='Farmacêutico' {{ $persona->segmento ==  'Farmacêutico' ? 'selected' : '' }} > Farmacêutico</option>
                                        <option value='Foto e Vídeo' {{ $persona->segmento ==  'Foto e Vídeo' ? 'selected' : '' }} > Foto e Vídeo</option>
                                        <option value='Governamental' {{ $persona->segmento ==  'Governamental' ? 'selected' : '' }} > Governamental</option>
                                        <option value='Imobiliário ' {{ $persona->segmento ==  'Imobiliário ' ? 'selected' : '' }} > Imobiliário </option>
                                        <option value='Jogos' {{ $persona->segmento ==  'Jogos' ? 'selected' : '' }} > Jogos</option>
                                        <option value='Jurídico' {{ $persona->segmento ==  'Jurídico' ? 'selected' : '' }} > Jurídico</option>
                                        <option value='Manufatura' {{ $persona->segmento ==  'Manufatura' ? 'selected' : '' }} > Manufatura</option>
                                        <option value='Marketing e Anúncios' {{ $persona->segmento ==  'Marketing e Anúncios' ? 'selected' : '' }} > Marketing e Anúncios</option>
                                        <option value='Mídia e Publicidade' {{ $persona->segmento ==  'Mídia e Publicidade' ? 'selected' : '' }} > Mídia e Publicidade</option>
                                        <option value='Médico, Dental e Saúde' {{ $persona->segmento ==  'Médico, Dental e Saúde' ? 'selected' : '' }} > Médico, Dental e Saúde</option>
                                        <option value='Mobile e Aplicativos' {{ $persona->segmento ==  'Mobile e Aplicativos' ? 'selected' : '' }} > Mobile e Aplicativos</option>
                                        <option value='Música e Músicos' {{ $persona->segmento ==  'Música e Músicos' ? 'selected' : '' }} > Música e Músicos</option>
                                        <option value='Negócios e Finanças' {{ $persona->segmento ==  'Negócios e Finanças' ? 'selected' : '' }} > Negócios e Finanças</option>
                                        <option value='Ofertas e Cupons de desconto' {{ $persona->segmento ==  'Ofertas e Cupons de desconto' ? 'selected' : '' }} > Ofertas e Cupons de desconto</option>
                                        <option value='Politica' {{ $persona->segmento ==  'Politica' ? 'selected' : '' }} > Politica</option>
                                        <option value='Relações públicas' {{ $persona->segmento ==  'Relações públicas' ? 'selected' : '' }} > Relações públicas</option>
                                        <option value='Recrutamento e Seleção' {{ $persona->segmento ==  'Recrutamento e Seleção' ? 'selected' : '' }} > Recrutamento e Seleção</option>
                                        <option value='Religião' {{ $persona->segmento ==  'Religião' ? 'selected' : '' }} > Religião</option>
                                        <option value='Rede social e Comunidades online' {{ $persona->segmento ==  'Rede social e Comunidades online' ? 'selected' : '' }} > Rede social e Comunidades online</option>
                                        <option value='Saúde e Bem-estar' {{ $persona->segmento ==  'Saúde e Bem-estar' ? 'selected' : '' }} > Saúde e Bem-estar</option>
                                        <option value='Seguros' {{ $persona->segmento ==  'Seguros' ? 'selected' : '' }} > Seguros</option>
                                        <option value='Sem fins lucrativos' {{ $persona->segmento ==  'Sem fins lucrativos' ? 'selected' : '' }} > Sem fins lucrativos</option>
                                        <option value='Serviços profissionais' {{ $persona->segmento ==  'Serviços profissionais' ? 'selected' : '' }} > Serviços profissionais</option>
                                        <option value='Software e Aplicativos' {{ $persona->segmento ==  'Software e Aplicativos' ? 'selected' : '' }} > Software e Aplicativos</option>
                                        <option value='Telecomunicações' {{ $persona->segmento ==  'Telecomunicações' ? 'selected' : '' }} > Telecomunicações</option>
                                        <option value='Varejo' {{ $persona->segmento ==  'Varejo' ? 'selected' : '' }} > Varejo</option>
                                        <option value='Viagem e Transportes' {{ $persona->segmento ==  'Viagem e Transportes' ? 'selected' : '' }} > Viagem e Transportes</option>
                                        <option value='Vitaminas e Suplementos' {{ $persona->segmento ==  'Vitaminas e Suplementos' ? 'selected' : '' }} > Vitaminas e Suplementos</option>
                                        <option value='Outro' {{ $persona->segmento ==  'Outro' ? 'selected' : '' }} > Outro</option>
                                    </select>
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
