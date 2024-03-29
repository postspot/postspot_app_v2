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
                            <p class="font-w600 mb-2">Foto do usuário</p>
                            <input type="file" name="image" class="btn btn-cinza" />
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nome*</label>
                                <input name='nome' required type="text" class="form-control form-control-alt" placeholder="Informe o nome da persona">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Idade</label>
                                <input name='idade' required type="number" class="form-control form-control-alt" placeholder="Insira aqui">
                            </div>
                            <div class="form-group">
                                <label>Função</label>
                                <select name='cargo' required class="form-control form-control-alt">
                                    <option value="1">Sócio</option>
                                    <option value="2">Diretor</option>
                                    <option value="3">Gerente</option>
                                    <option value="4">Coordenador</option>
                                    <option value="5">Analista</option>
                                    <option value="6">Assistente</option>
                                    <option value="7">Estagiário</option>
                                    <option value="8">Outro</option>
                                </select>
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
                                <select required class="form-control form-control-alt" name="segmento">
                                <option value='Agência e Serviços criativos' > Agência e Serviços criativos</option>
                                <option value='Agricultura e Serviços de alimentação' > Agricultura e Serviços de alimentação</option>
                                <option value='Arquitetura e Construção'> Arquitetura e Construção</option>
                                <option value='Artes e Artistas' > Artes e Artistas   
                                <option value='Beleza e Cuidados pessoais'> Beleza e Cuidados pessoais</option>
                                <option value='Casa e Jardim'> Casa e Jardim</option>
                                <option value='Computadores e Eletrônicos' > Computadores e Eletrônicos</option>
                                <option value='Construção civil'> Construção civil</option>
                                <option value='Consultoria' > Consultoria</option>
                                <option value='Ecommerce' > Ecommerce</option>
                                <option value='Educação e Treinamento' > Educação e Treinamento</option>
                                <option value='Entretenimento' > Entretenimento e Eventos</option>
                                <option value='Esportes' > Esportes</option>
                                <option value='Farmacêutico'  > Farmacêutico</option>
                                <option value='Foto e Vídeo'  > Foto e Vídeo</option>
                                <option value='Governamental' > Governamental</option>
                                <option value='Imobiliário '  > Imobiliário </option>
                                <option value='Jogos' > Jogos</option>
                                <option value='Jurídico'  > Jurídico</option>
                                <option value='Manufatura'  > Manufatura</option>
                                <option value='Marketing e Anúncios' > Marketing e Anúncios</option>
                                <option value='Mídia e Publicidade'  > Mídia e Publicidade</option>
                                <option value='Médico, Dental e Saúde' > Médico, Dental e Saúde</option>
                                <option value='Mobile e Aplicativos'  > Mobile e Aplicativos</option>
                                <option value='Música e Músicos'  > Música e Músicos</option>
                                <option value='Negócios e Finanças'> Negócios e Finanças</option>
                                <option value='Ofertas e Cupons de desconto'  > Ofertas e Cupons de desconto</option>
                                <option value='Politica' > Politica</option>
                                <option value='Relações públicas' > Relações públicas</option>
                                <option value='Recrutamento e Seleção'> Recrutamento e Seleção</option>
                                <option value='Religião' > Religião</option>
                                <option value='Rede social e Comunidades online' > Rede social e Comunidades online</option>
                                <option value='Saúde e Bem-estar' > Saúde e Bem-estar</option>
                                <option value='Seguros'  > Seguros</option>
                                <option value='Sem fins lucrativos' > Sem fins lucrativos</option>
                                <option value='Serviços profissionais' > Serviços profissionais</option>
                                <option value='Software e Aplicativos'  > Software e Aplicativos</option>
                                <option value='Telecomunicações'> Telecomunicações</option>
                                <option value='Varejo' > Varejo</option>
                                <option value='Viagem e Transportes'  > Viagem e Transportes</option>
                                <option value='Vitaminas e Suplementos' > Vitaminas e Suplementos</option>
                                <option value='Outro'> Outro</option>
                            </select>
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
