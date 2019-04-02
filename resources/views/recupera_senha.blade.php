@extends('includes.pageCenterDefault')

@section('content')


                <!-- Page Content -->
                <div>
                    <div class="row no-gutters justify-content-center bg-white">
                        <!-- Main Section -->
                        <div class="hero-static col-md-4 d-flex align-items-center bg-white">
                            <div class="p-2 w-100">
                                <!-- Header -->
                                <div class="mb-3 text-center">
                                    <img src="{{ asset('media/temp/Logo.png') }}" alt="logo postspot" class="logo-pequeno mb-1">
                                    <p class="size-titulo">Redefinir sua senha</p>
                                    <p class="size-subTitulo">Não se preocupe. Nós lhe enviaremos as instruções para redefinir sua senha por e-mail.</p>
                                </div>
                                <div class="row justify-content-center">
                                        <div class="col-sm-11">
                                        @if(isset($error))
                                            <div class="mb-3 alert alert-danger" role="alert">
                                                {{ $error }}
                                            </div>
                                            
                                            @endif
                                            <form class="js-validation-signin" action="api/recuperar_senha" method="post">
                                                <div class="py-3">
                                                    <div class="form-group">
                                                        <label for="example-text-input">E-mail</label>
                                                        <input type="email" class="form-control form-control-lg form-control-alt"  name="email" placeholder="Insira seu e-mail">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-block btn-hero-lg btn-roxo-fill mb-2 text-white" >
                                                        Redefinir sua senha
                                                    </button>
                                                    <p class="mt-3 mb-0 text-center">
                                                            <strong><a href="/entrar" class="link-color">Voltar ao login</a></strong>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!-- END Header -->
                            </div>
                        </div>
                        <!-- END Main Section -->
                    </div>
                </div>
                <!-- END Page Content -->
@endsection
