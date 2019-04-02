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
                                    <p class="size-titulo">Redefinir Senha</p>
                                    <p class="size-subTitulo">Quase pronto. Insira sua nova senha para concluir.</p>
                                </div>
                                <!-- END Header -->

                                <!-- Sign Up Form -->
                                <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-xl-12">
                                    <form class="js-validation-signin" action="/api/new_password/{{ $id }}" method="post">
                                        @method('PUT')
                                            <div class="py-3 mb-5">
                                            @if(isset($message))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            
                                            @endif
                                                <div class="form-group">
                                                    <h6 class="mb-2">Nova senha <small> (Min: 6 caracteres)</small></h6>
                                                    <input type="password" name="password" class="form-control form-control-lg form-control-alt" placeholder="Insira seu e-mail">
                                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                                </div>
                                                <div class="form-group">
                                                    <h6 class="mb-2">Confirme a nova senha</h6>
                                                    <input type="password" name="confirm_password" class="form-control form-control-lg form-control-alt" placeholder="Insira sua senha">
                                                    
                                                </div>
                                                <div class="form-group">
                                                </div>
                                                <button type="submit" class="btn btn-block btn-hero-lg btn-roxo-fill mb-2">
                                                    Refinir sua senha
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
@endsection
