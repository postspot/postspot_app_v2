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
                                    <p class="size-titulo">Reenviar email de ativação</p>
                                    <p class="size-subTitulo">Enviamos uma mensagem com um link para ativar sua conta. Se você não o recebeu, pode colocar seu endereço de e-mail novamente ou tentar outro e-mail para enviar um novo link de ativação.</p>
                                </div>
                                <!-- END Header -->

                                <!-- Sign Up Form -->
                                <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-xl-12">
                                    <form class="js-validation-signin" action="/api/confirm_email" method="post">
                                            <div class="py-3 mb-5">
                                                <div class="form-group">
                                                    <h6 class="mb-2">E-mail </h6>
                                                    <input type="text" name="email" id="email" class="form-control form-control-lg form-control-alt" placeholder="Insira seu e-mail">
                                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                                </div>
                                                <div class="form-group">
                                                    <h6 class="mb-2">Confirme seu e-mail</h6>
                                                    <input type="text" name="email" id="confirmacao" class="form-control form-control-lg form-control-alt" placeholder="Insira seu e-mail">
                                                    <div id="msg-erro" style="color:red;display:none">Os emails não são iguais!</div>

                                                </div>
                                                <div class="form-group">
                                                    <h6 class="mb-2">Senha<small> (Min: 6 caracteres)</small></h6>
                                                    <input type="password" name="password" class="form-control form-control-lg form-control-alt" placeholder="Insira sua senha">
                                                    
                                                </div>
                                                <div class="form-group">
                                                </div>
                                                
                                                <button type="submit" id="botao" class="btn btn-block btn-hero-lg btn-roxo-fill mb-2">
                                                    Enviar
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

                <script>
                document.getElementById("confirmacao").onfocusout = function() {
                    
                                        
                };



                var email = document.getElementById("email");
                var confirm_email = document.getElementById("confirmacao");

                email.onchange = validarSenha;
                confirm_email.onkeyup = validarSenha;

                

                function validarSenha(){
                    
                    senha = document.getElementById('email').value;
                    senha2 = document.getElementById('confirmacao').value;

                    if(senha!= senha2) {
                        document.getElementById('botao').disabled = true;
                        document.getElementById('msg-erro').style.display = "block";

                        return false; 
                    }
                    document.getElementById('msg-erro').style.display = "none";
                    document.getElementById('botao').disabled = false;
                    return true;
                }

                
                </script>
                <!-- END Page Content -->
@endsection
