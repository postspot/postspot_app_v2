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
                                    <p class="size-titulo">Quer que a PostSpot produza seus conteúdos?</p>
                                    <p class="size-subTitulo">Podemos ajudar você a produzir seus conteúdos  com nossa comunidade de freelancers.</p>
                                </div>
                                <!-- END Header -->

                                <!-- Sign Up Form -->
                                <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-xl-12 mb-6">
                                            <div class="py-3">
                                                    <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio" id="example-radios-default1" name="producao_conteudo" value="option1" checked>
                                                            <label class="form-check-label" for="producao_conteudo1">Claro!</label>
                                                        </div>
                                                        <div class="form-check">
                                                                <input class="form-check-input" type="radio" id="producao_conteudo1" name="producao_conteudo" value="option2">
                                                                <label class="form-check-label" for="producao_conteudo1">Ainda não…</label>
                                                            </div>
                                                            <p>Fique tranquilo! Você pode usar a PostSpot gratuitamente para centralizar sua estratégia de conteúdo.</p>
                                            </div>
                                            <div class="form-group">
                                                <button id="botao_continuar" class="btn btn-block btn-hero-lg btn-roxo-fill mb-2">
                                                    Continuar
                                                </button>
                                                
                                            </div>
                                    </div>
                                    
                                <p class="text-center position-absolute fixed-bottom termos">
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

                <script>
                    
                    document.getElementById('botao_continuar').onclick = function(){
                        

                    if(document.querySelector('input[name="producao_conteudo"]:checked').value == "option1"){
                        window.location.href = "criar_conta_montagem";
                    }
                    else{
                        window.location.href = "dashboard";
                    }
                    }
               
                </script>
                <!-- END Page Content -->
@endsection
