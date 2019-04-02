<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Dashboard - PostSpot</title>

        <meta name="description" content="PostSpot - Conteúdo para sua estratégia de marketing digital">
        <meta name="author" content="Maze Apps">
        <meta name="robots" content="noindex, nofollow">

        
        <!-- Open Graph Meta -->
        <meta property="og:title" content="PostSpot - Conteúdo para sua estratégia de marketing digital">
        <meta property="og:site_name" content="PostSpot">
        <meta property="og:description" content="PostSpot - Conteúdo para sua estratégia de marketing digital">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,600">
        <link rel="stylesheet" id="css-theme" href="{{ asset('css/dashmix.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" href="{{ asset('css/themes/xwork.css') }}"> -->
        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
    </head>
    <body>
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="row no-gutters bg-primary-op">
                    <!-- Main Section -->
                    <div class="hero-static col-md-6 d-flex align-items-center bg-white">
                        <div class="p-3 w-100">
                            <!-- Header -->
                            <div class="mb-3 text-center">
                                <img src="{{ asset('media/temp/Logo.png') }}" alt="logo postspot" class="logo-pequeno mb-1">
                                <h1 class="size-titulo">Entrar</h1>
                                <p class="size-subTitulo">Precisa de uma conta na PostSpot? <strong><a href="/criar-conta" class="link-color">Criar conta.</a></strong></p>
                            </div>

                            <div class="row no-gutters justify-content-center">
                                <div class="col-sm-8">
                                    <form class="" action="/api/login" method="post">
                                        <div class="py-3">
                                            <div class="form-group">
                                            @if(isset($message))
                                            <div class="mb-3 alert alert-success" role="alert">
                                                {{ $message }}
                                            </div>
                                            
                                            @endif
                                            @if(isset($error))
                                            <div class="mb-3 alert alert-danger" role="alert">
                                                {{ $error }}
                                            </div>
                                            
                                            @endif
                                                <label for="example-text-input">E-mail</label>
                                                <input type="text" class="form-control form-control-lg form-control-alt" id="login-username" name="email" placeholder="Insira seu e-mail">
                                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                            </div>
                                            <div class="form-group">
                                                    <label for="example-text-input">Senha</label>
                                                <input type="password" class="form-control form-control-lg form-control-alt" id="login-password" name="password" placeholder="Insira sua senha">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type='submit' class="btn btn-block btn-hero-lg btn-roxo-fill mb-2 text-white" >
                                                Começar
                                            </button>
                                            <p class="mt-3 mb-0 text-center">
                                                    <strong><a href="/recupera-senha" class="link-color">Esqueci minha senha</a></strong>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                                <p class="text-center position-absolute fixed-bottom">
                                    ©2017-2019  PostSpot ®. Todos os direitos reservados.<br>
                                    <a href="/politica" class="link-color">Política de privacidade</a> e 
                                    <a href="/politica" class="link-color">Termos de Uso.</a>
                                </p>
                            </div>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                    <!-- END Main Section -->

                    <!-- Meta Info Section -->
                    <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center bg-azul">
                        <div class="p-3">
                            <p class="text-uppercase">verão</p>
                            <h1>Estação de cuidar do <br>seu negócio</h1>
                            <img src="{{ asset('media/caricaturas/login.png') }}" alt="">
                        </div>
                    </div>
                    <!-- END Meta Info Section -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!--
            Dashmix JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
        <!-- Dashmix Core JS -->
        <script src="{{ asset('js/dashmix.app.js') }}"></script>

        <!-- Laravel Scaffolding JS -->
        <script src="{{ asset('js/laravel.app.js') }}"></script>

        @yield('js_after')
    </body>
</html>
