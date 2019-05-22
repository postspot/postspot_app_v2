@extends('includes.pageCenterDefault')

@section('content')

    <!-- Page Content -->
    <div>
        <div class="row no-gutters justify-content-center bg-white">
            <!-- Main Section -->
            <div class="hero-static col-md-4 d-flex align-items-center bg-white">
                <div class="p-3 w-100">
                    <!-- Header -->
                    <div class="mb-3 text-center">
                        <img src="{{ asset('media/temp/Logo.png') }}" alt="logo postspot" class="logo-pequeno mb-1">
                        <p class="size-titulo">Conte-nos sobre o seu negócio</p>
                        <p class="size-subTitulo">Nos deixe saber um pouco mais sobre o que você faz. Essas informações aparecerão em sua estratégia para ajudar todos os envolvidos na sua estratégia de conteúdo.</p>
                    </div>
                    <!-- END Header -->
                    

                    <!-- Sign Up Form -->
                    <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <div class="row no-gutters justify-content-center">
                        <div class="col-xl-12">
                            <form class="mb-6 js-validation-signup" action="api/cria_projeto" method="POST">
                                <div class="py-3">
                                    <div class="form-group">
                                        <h6 class="mb-2">Qual o nome do seu negócio?</h6>
                                        <input type="text" required class="form-control form-control-lg form-control-alt" name="nome_projeto" placeholder="Insira o nome do seu negócio, organização, etc.">
                                    </div>

                                    <div class="form-group">
                                        <h6 class="mb-2">Qual o seu segmento de mercado?</h6>
                                        <select required class="form-control form-control-alt" name="segmento_projeto">
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

                                    <div class="form-group">
                                        <h6 class="mb-2">Qual o seu website?</h6>
                                        <input type="text" required class="form-control form-control-lg form-control-alt" name="site_projeto" placeholder="http://www.seunegocio.com">
                                        <p>Se você não tiver um website ou blog, pode usar o link da sua conta do seu Facebook, Linkedin ou Twitter.</p>
                                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                    </div>
                                    <div class="form-group">
                                        <h6>Seu negócio é uma agência</h6>
                                        <select required class="form-control form-control-alt" name="agencia_projeto">
                                            
                                            <option value="1">Sim</option>
                                            <option value="2" selected>Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-hero-lg btn-roxo-fill mb-2">
                                        Continuar
                                    </button>
                                    
                                </div>
                            </form>
                        </div>
                        
                        <p class=" text-center position-absolute fixed-bottom termos">
                            ©2017-2019  PostSpot ®. Todos os direitos reservados.<br>
Política de privacidade e Termos de Uso.
                        </p>
                    </div>
                    <!-- END Sign Up Form -->
                </div>
            </div>
            <!-- END Main Section -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection
