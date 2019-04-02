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
                                    <p class="size-titulo">Olá, Andress!</p>
                                    <p class="size-subTitulo">Selecione ou <strong><a class="link-color" href="/entrar">crie um novo projeto.</a></strong></p>
                                </div>
<hr>
<select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
        <option value="1">HTML</option>
        <option value="2">CSS</option>
        <option value="3">JavaScript</option>
        <option value="4">PHP</option>
        <option value="5">MySQL</option>
        <option value="6">Ruby</option>
        <option value="7">Angular</option>
        <option value="8">React</option>
        <option value="9">Vue.js</option>
    </select>

                                <div class="row no-gutters justify-content-center">
                                    

                                    <div class="col-xl-12 mb-6">
                                        <ul class="list-unstyled lista-projetos border-top mt-3">
                                            <a href="/dashboard"><li>Postspot</li></a>
                                            <a href="/dashboard"><li>SiteSpot</li></a>
                                            <a href="/dashboard"><li>Melhor Compra</li></a>
                                        </ul>
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
