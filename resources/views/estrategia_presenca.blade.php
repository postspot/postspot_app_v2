@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Estratégia</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                            <button type="button" class="btn d-none d-lg-inline-block mb-1 btn-roxo-fill">
                                <i class="fa fa-file fa-fw mr-1"></i> Exportar
                            </button>
                        </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="content">

    <!-- Advanced -->
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="menu-lateral">
                <li><a href="/estrategia/projeto">Projeto</a></li>
                <li><a href="/estrategia/negocio">Negócio</a></li>
                <li><a href="/estrategia/tomevoz">Voz e tom</a></li>
                <li class="active"><a href="/estrategia/presenca">Presença online</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    <div class="form-group">
                        <label>Website</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-alt">
                                    <i class="si si-home"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control form-control-alt" placeholder="http://www.suaempresa.com/blog" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Blog</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-alt">
                                    <i class="fab fa-wordpress-simple"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control form-control-alt" placeholder="http://www.facebook.com/seunegocio" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Facebook</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-alt">
                                    <i class="si si-social-facebook"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control form-control-alt" placeholder="http://www.linkedin.com/seunegocio">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Twitter</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-alt">
                                    <i class="fab fa-twitter"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control form-control-alt" placeholder="http://www.twitter.com/seunegocio" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Linkedin</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-group-text-alt">
                                    <i class="fab fa-linkedin-in"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control form-control-alt" placeholder="http://www.instagram.com/seunegocio">
                        </div>
                    </div>
                    
                    <div class="text-right">
                        <button class="btn btn-roxo-empty">Cancelar</button>
                        <button class="btn btn-roxo-fill ml-2">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
