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
                                    <p class="size-titulo">Adicione sua presença online</p>
                                    <p class="size-subTitulo">Por que? É importante para todos os envolvidos em suas estratégias de marketing digital saber o que você tem publicado em seus canais.</p>
                                </div>
                              
                                <!-- END Header -->

                                <!-- Sign Up Form -->
                                <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-xl-12">
                                        <form class="mb-6 js-validation-signup" action="/api/criar_estrategia" method="POST">
                                        
                                            <div class="py-3">
                                                <div class="form-group">
                                                    <h6 class="mb-2">Blog</h6>
                                                    <input type="text" class="form-control form-control-lg form-control-alt" name="blog" placeholder="http://www.suaempresa.com/blog">
                                                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                                </div>
                                                <div class="form-group">
                                                    <h6 class="mb-2">Facebook</h6>
                                                    <input type="text" class="form-control form-control-lg form-control-alt" name="facebook" placeholder="http://www.facebook.com/seunegocio">
                                                </div>
                                                <div class="form-group">
                                                    <h6 class="mb-2">Linkedin</h6>
                                                    <input type="text" class="form-control form-control-lg form-control-alt" name="linkedin" placeholder="http://www.linkedin.com/seunegocio">
                                                </div>
                                                <div class="form-group">
                                                    <h6 class="mb-2">Twitter</h6>
                                                    <input type="text" class="form-control form-control-lg form-control-alt" name="twitter" placeholder="http://www.twitter.com/seunegocio">
                                                </div>
                                                <div class="form-group">
                                                    <h6 class="mb-2">Instagram</h6>
                                                    <input type="text" class="form-control form-control-lg form-control-alt" name="instagram" placeholder="http://www.instagram.com/seunegocio">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-hero-lg btn-roxo-fill mb-2">
                                                    Continuar
                                                </button>
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
