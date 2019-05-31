<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Postspot</title>

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,600">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
        <link rel="stylesheet" id="css-theme" href="{{ asset('css/dashmix.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" href="{{ asset('css/themes/xwork.css') }}"> -->
        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
    </head>
    <body>
        <div id="page-container" class="page-header main-content-boxed">
    
            
        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">

                 <!-- Toggle Navigation -->
                 <div class="d-lg-none">
                        <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                        <button type="button" class="btn btn-block btn-light d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#horizontal-navigation-hover-normal" data-class="d-none">
                            <i class="fa fa-bars"></i> 
                        </button>
                    </div>
                    <!-- END Toggle Navigation -->

                <!-- Navigation -->
                <div id="horizontal-navigation-hover-normal" class="d-none d-lg-block mt-2 mt-lg-0 menu-principal">
                        <ul class="nav-main nav-main-horizontal nav-main-hover">
                            <li class="nav-main-item">
                                    <a href="/"><img src="{{ asset('media/temp/logo.png') }}" alt=""></a>
                            </li>
                            <li class="nav-main-item">
                                
                                <a class="nav-main-link {{ Request::is('estrategia/*') ? 'active' : '' }}" href="/estrategia/projeto">
                                    <span class="nav-main-link-name">Estratégia</span>
                                </a>
                            </li>
                            
                            <li class="nav-main-item ">
                                <a class="nav-main-link {{ Request::is('persona/*') || Request::is('persona')  ? 'active' : '' }}" href="/persona">
                                    <span class="nav-main-link-name">Persona</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ Request::is('pauta/*') || Request::is('pauta') ? 'active' : '' }}" href="/pauta">
                                    <span class="nav-main-link-name">Pautas</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ Request::is('conteudos/*') || Request::is('conteudos') || Request::is('conteudo/*')  ? 'active' : '' }}" href="/conteudos">
                                    <span class="nav-main-link-name">Conteúdos</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="/calendario">
                                    <span class="nav-main-link-name">Calendário</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Navigation -->

                <!-- Right Section -->
                <div class="flex">
                    
                        <!--<i class="fa fa-fw fa-search ml-2"></i>
                        <i class="fa fa-fw fa-bell ml-2"></i>
                        <i class="fa fa-fw fa-cog ml-2"></i>
                        <span class="separador-vertical ml-2"></span>-->
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{ env('APP_URL').'/storage/temp' }}/{{ JWTAuth::toUser(JWTAuth::getToken())->foto_usuario }}"
                                alt="">
                            Visite Poços de Caldas
                            <i class="fa fa-fw fa-angle-down ml-0"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-md p-0" aria-labelledby="page-header-user-dropdown">
                            <!--<div class="rounded-top font-w600 text-center p-3 border-bottom">
                                <img class="img-avatar img-avatar48" src="{{ asset('media/temp/andress.jpeg') }}" alt="">
                                <div class="pt-2"></div>
                                <a class="font-w600 link-color" href="perfil_preferencias_informacoes.html">Andress Bento</a>
                                <div class="font-size-sm text-muted">andres@gmail.com</div>
                            </div>
                            <div class="p-2 border-bottom">
                                <a class="dropdown-item font-w600 mb-0 flex justify-content-between" href="javascript:void(0)">
                                   <span>0001 </span> <span class="large-60">PostSpot sistemas web mais coisa</span> <i class="fa fa-fw fa-angle-right text-gray mr-1"></i>
                                </a>
                            </div>-->
                            <a class="dropdown-item mb-0 py-25 border-top" href="/perfil/informacoes">
                                Perfil e preferências
                            </a>
                            <a class="dropdown-item mb-0 py-25 border-top" href="/projetos">
                                Mudar projeto
                            </a>
                            <a class="dropdown-item mb-0 py-25 border-top" href="/conta/produtos">
                                Conta
                            </a>
                            <a class="dropdown-item mb-0 py-25 border-top" href="https://postspot.co/ajuda/" target="_blank">
                                Ajuda
                            </a>
                            <a class="dropdown-item mb-0 py-25 border-top" href="/entrar">
                                Sair
                            </a>
                            <a class="dropdown-item mb-0 py-25 border-top" href="https://postspot.co/politica-de-privacidade" target="_blank">
                                Privacidade e Termos de Uso
                            </a>
                        </div>
                    </div>
                    <!-- END User Dropdown -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-primary">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="post">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control border-0" placeholder="Search.." id="page-header-search-input"
                                name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary-darker">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->

        </div>
        <!-- END Page Container -->

        <!-- Dashmix Core JS -->
        <script src="{{ asset('js/dashmix.app.js') }}"></script>

        <!-- Laravel Scaffolding JS -->
        <script src="{{ asset('js/laravel.app.js') }}"></script>
        <script src="{{ asset('js/starts.min.js') }}"></script>

        
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

        @yield('js_after')

        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    tabsize: 2,
                    height: 100,
                    toolbar: [
                        // [groupName, [list of button]]
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                    ]
                });


                $('.estrelas').stars({
                    stars: 5,
                    value: 0,
                    color: '#E4AD22',
                    emptyIcon  : 'fa-star-o',
                    filledIcon : 'fa-star',

                    click: function(index) {
                        $("#inputAvaliacao").val(index);
                    }
                });
            });
        </script>
    </body>
</html>
