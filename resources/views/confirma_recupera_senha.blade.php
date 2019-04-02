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
                                    <p class="size-titulo">Pronto</p>
                                    <p class="size-subTitulo">Nós enviamos uma mensagem para <strong>{{ $email }}</strong> com um link para ativar sua conta. </p>
                                </div>
                                <a href="/entrar">
                                    <button type='submit' class="btn btn-block btn-hero-lg btn-roxo-fill mb-2 text-white" >
                                        Voltar ao login
                                    </button>
                                </a>
                                
                              
                                <p class="text-center position-absolute fixed-bottom">
                                    ©2017-2019  PostSpot ®. Todos os direitos reservados.<br>
                                    Avenida Paulista, 171, 4º Andar – Bela Vista <br>
                                    São Paulo, SP, 01311-000, BR<br>
                                    <a href="/politica" class="link-color">Política de privacidade</a> e 
                                    <a href="/politica" class="link-color">Termos de Uso.</a>
                                </p>
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
