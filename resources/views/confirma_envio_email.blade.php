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
                                    <p class="size-titulo">Pronto!</p>
                                    <p class="size-subTitulo">Nós enviamos um email com as instruções para <strong>nome@suaempresa.com.br</strong> resetar sua senha.</p>
                                    
                                    <a class="btn btn-block btn-hero-lg btn-roxo-fill mb-2 text-white" href="/entrar">
                                        Voltar ao login
                                    </a>
                                    <p class="size-subTitulo">Se você não receber o e-mail em breve, verifique sua caixa de spam. Nós enviamos de <strong>ola@app.postspot.co</strong></p>

                                </div>
                                <!-- END Header -->
                            </div>
                        </div>
                        <!-- END Main Section -->
                    </div>
                </div>
                <!-- END Page Content -->
@endsection
