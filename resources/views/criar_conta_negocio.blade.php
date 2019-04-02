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
                                        <input type="text" class="form-control form-control-lg form-control-alt" name="nome_projeto" placeholder="Insira o nome do seu negócio, organização, etc.">
                                    </div>
                                    <div class="form-group">
                                        <h6 class="mb-2">Qual o seu segmento de mercado?</h6>
                                        <input type="text" class="form-control form-control-lg form-control-alt" name="segmento_projeto" placeholder="Selecione o seu segmento de mercado">
                                    </div>
                                    <div class="form-group">
                                        <h6 class="mb-2">Qual o seu website?</h6>
                                        <input type="text" class="form-control form-control-lg form-control-alt" name="site_projeto" placeholder="http://www.seunegocio.com">
                                        <p>Se você não tiver um website ou blog, pode usar o link da sua conta do seu Facebook, Linkedin ou Twitter.</p>
                                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                    </div>
                                    <div class="form-group">
                                        <h6>Seu negócio é uma agência</h6>
                                        <select class="form-control form-control-alt" name="agencia_projeto">
                                            
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
