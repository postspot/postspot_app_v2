@extends('includes.pageCenterDefault')

@section('content')


                <!-- Page Content -->
                <div>
                    <div class="row no-gutters justify-content-center bg-white">
                        <!-- Main Section -->
                        <div class="hero-static col-md-4 d-flex align-items-center bg-white">
                            <div class="p-3 w-100">
                                <!-- Header -->
                                <div class="mb-1 text-center">
                                    <img src="{{ asset('media/temp/Logo.png') }}" alt="logo postspot" class="logo-pequeno mb-1">
                                    <p class="size-titulo">Verifique seu e-mail</p>
                                    <p class="size-subTitulo">Nós enviamos uma mensagem para <strong>{{ JWTAuth::toUser(JWTAuth::getToken())->email }}</strong> com um link para ativar sua conta. </p>
                                </div>
                                <div class="py-3 text-center">
                                    <p id="nao_recebeu" class="link-color"><strong>Não recebeu um e-mail?</strong></p>
                                </div>
                                <div class="my-2" id="restante">
                                {!! Session::has('msg') ? Session::get("msg") : '' !!}
                                    <strong>Se você não receber um e-mail dentro de alguns minutos, algumas coisas podem ter acontecido:</strong><br><br>

                                        • O email está na sua pasta de spam. Às vezes as coisas se perdem lá.<br><br>

                                        • O endereço de e-mail que você digitou foi um erro ou erro de digitação. Isso pode acontecer com todo mundo :)<br><br>

                                        • Você acidentalmente cadastrou outro endereço de e-mail. Pode ter sido o pessoal ou um do trabalho, em vez daquele que você quis cadastrar.<br><br>

                                        • Nós não conseguimos entregar a mensagem para o e-mail cadastrado. Geralmente por causa de firewalls corporativos ou filtragem.

                                        <div class="py-4 text-center">
                                            <a href="/confirme_email" class="link-color"><strong>Digite seu e-mail  e tente novamente</strong></a>
                                        </div>
                                </div>
                                
                                <!-- END Header -->
                            </div>
                        </div>
                        <!-- END Main Section -->
                    </div>
                </div>

                <script>
                    document.getElementById('nao_recebeu').onclick = function(){

                        document.getElementById('restante').style.display = "block";

                    }

                </script>
                <!-- END Page Content -->
@endsection
