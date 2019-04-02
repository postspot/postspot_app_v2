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
                                <p class="size-titulo p-0">Monte sua assinatura mensal de conteúdo</p>
                                <p class="size-subTitulo">Escolha o tamanho e a quantidade que deseja contratar. Cancele quando quiser.</p>
                            </div>
                            <!-- END Header -->

                            <div class="row no-gutters justify-content-center">
                                <div class="col-xl-12 mb-6">
                                    <form class="js-validation-signup" action="be_pages_auth_all.html" method="POST">
                                        <h5>Tamanho do conteúdo</h5>
                                        <div class="py-3">
                                            <div class="form-check mb-2 my-check">
                                                <div class="w-75">
                                                    <input class="form-check-input" type="radio" id="example-radios-default1"
                                                        name="example-radios-default" value="option1" checked="">
                                                    <label class="form-check-label" for="example-radios-default1">300
                                                        palavras</label>
                                                </div>
                                                <div class="div-preco w-25">
                                                    R$ 59,90
                                                </div>
                                            </div>
                                            <div class="form-check mb-2 my-check">
                                                <div class="w-75">
                                                    <input class="form-check-input" type="radio" id="example-radios-default1"
                                                        name="example-radios-default" value="option1" checked="">
                                                    <label class="form-check-label" for="example-radios-default1">500
                                                        palavras</label>
                                                </div>
                                                <div class="div-preco w-25">
                                                    R$ 89,90
                                                </div>
                                            </div>
                                            <div class="form-check mb-2 my-check">
                                                <div class="w-75">
                                                    <input class="form-check-input" type="radio" id="example-radios-default1"
                                                        name="example-radios-default" value="option1" checked="">
                                                    <label class="form-check-label" for="example-radios-default1">1000
                                                        palavras</label>
                                                </div>
                                                <div class="div-preco w-25">
                                                    R$ 169,90
                                                </div>
                                            </div>
                                        </div>

                                        <!--<h5 class="mt-3">Adicionais</h5>
                                        <div class="py-3">
                                            <div class="form-check mb-2 my-check">
                                                <div class="w-75">
                                                    <input class="form-check-input" type="radio" id="example-radios-default1"
                                                        name="example-radios-default" value="option1" checked="">
                                                    <label class="form-check-label" for="example-radios-default1">300
                                                        palavras</label>
                                                        <p class="m-0">Inclui a produção, revisão e otimização do conteúdo (SEO).</p>
                                                </div>
                                                <div class="div-preco w-25">
                                                    R$ 59,90
                                                </div>
                                            </div>
                                            <div class="form-check mb-2 my-check">
                                                <div class="w-75">
                                                    <input class="form-check-input" type="radio" id="example-radios-default1"
                                                        name="example-radios-default" value="option1" checked="">
                                                    <label class="form-check-label" for="example-radios-default1">500
                                                        palavras</label>
                                                </div>
                                                <div class="div-preco w-25">
                                                    R$ 89,90
                                                </div>
                                            </div>
                                            <div class="form-check mb-2 my-check">
                                                <div class="w-75">
                                                    <input class="form-check-input" type="radio" id="example-radios-default1"
                                                        name="example-radios-default" value="option1" checked="">
                                                    <label class="form-check-label" for="example-radios-default1">1000
                                                        palavras</label>
                                                </div>
                                                <div class="div-preco w-25">
                                                    R$ 169,90
                                                </div>
                                            </div>
                                        </div>-->

                                        <h5 class="mt-3">Quantidade mensal</h5>
                                        <p class="m-0">Deslize a barra abaixo para escolher a quantidade que deseja contratar.</p>
                                        <div class="py-3">
                                            <div class="form-check pb-5 my-check">
                                                <div class="w-100">
                                                        <input type="text" class="rangeEducativoPromocional" value="25">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="py-3">
                                            <div class="border resumo">
                                                <div class="p-padrao border-bottom">
                                                    <h5>
                                                        Resumo da sua assinatura mensal de conteúdo
                                                    </h5>
                                                    <p>Início em 11 de fevereiro de 2019</p>
                                                </div>
                                                <div class="flex justify-content-between align-items-start p-padrao border-bottom">
                                                    <div>
                                                        <h6>Plano de conteúdo</h6>
                                                        <p>4 conteúdos de 300 palavras</p>
                                                    </div>
                                                    <div class="">
                                                        <h6>R$ 239,60</h6>
                                                    </div>
                                                </div>
                                                <div class="flex justify-content-between p-padrao background-cinza ">
                                                    <h6 class="m-0">Total mensal</h6>
                                                    <h6 class="m-0">R$ 239,60</h6>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <a href="/entrar" class="btn btn-block btn-hero-lg btn-roxo-fill mb-2">
                                                Assinar plano de conteúdo
                                            </a>

                                        </div>
                                    </form>
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
            <!-- END Page Content -->
@endsection
