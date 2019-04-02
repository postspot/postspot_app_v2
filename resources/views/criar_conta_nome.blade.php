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
                            <p class="size-titulo">Seja bem vindo(a) à PostSpot</p>
                            <p class="size-subTitulo">Tudo bem, vamos configurar sua conta! Conte-nos um pouco sobre você.</p>
                            
                        </div>
                        <!-- END Header -->

                        <!-- Sign Up Form -->
                        <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <div class="row no-gutters justify-content-center">
                            <div class="col-xl-12">
                                <form class="js-validation-signup" action="/api/update_nome " method="POST" >
                                    @method('PUT')
                                    <div class="py-3">
                                        <div class="form-group">
                                            <h6 class="mb-2">Nome</h6>
                                            <input type="text" class="form-control form-control-lg form-control-alt" name="name" placeholder="Insira seu nome">
                                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                            <input type="hidden" name="destino" value="/criar-conta-negocio" />
                                        </div>
                                        <div class="form-group">
                                            <h6 class="mb-2">Sobrenome</h6>
                                            <input type="text" class="form-control form-control-lg form-control-alt" name="sobrenome" placeholder="Insira seu sobrenome">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type='submit' class="btn btn-block btn-hero-lg btn-roxo-fill mb-2">
                                            Continuar
                                        </button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign Up Form -->
                    </div>
                </div>
                <!-- END Main Section -->
            </div>
        </div>
        <!-- END Page Content -->

                

        <!-- Terms Modal -->
        <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                        <div class="block-content block-content-full text-right bg-light">
                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Terms Modal -->
@endsection
