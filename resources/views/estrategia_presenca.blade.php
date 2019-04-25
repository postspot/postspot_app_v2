@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Estratégia</h1>
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
                    
                <form action="/api/atualiza_presenca/{{ $estrategia->id_estrategia }}" method="post">
                @method('PUT')
                    <div class="form-group">
                        <label>Blog</label>
                        <div class="input-group">
                            
                            <input type="text" name="blog" class="form-control form-control-alt" value="{{ $estrategia->blog }}" placeholder="http://www.facebook.com/seunegocio" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Facebook</label>
                        <div class="input-group">
                            
                            <input type="text" name="facebook" class="form-control form-control-alt" value="{{ $estrategia->facebook }}" placeholder="http://www.linkedin.com/seunegocio">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Linkedin</label>
                        <div class="input-group">
                           
                            <input type="text" name="linkedin" class="form-control form-control-alt" value="{{ $estrategia->linkedin }}" placeholder="http://www.instagram.com/seunegocio">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label>Twitter</label>
                        <div class="input-group">
                            <input type="text" name="twitter" class="form-control form-control-alt" value="{{ $estrategia->twitter }}" placeholder="http://www.twitter.com/seunegocio" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <div class="input-group">
                            <input type="text" name="instagram" class="form-control form-control-alt" value="{{ $estrategia->instagram }}" placeholder="http://www.twitter.com/seunegocio" >
                        </div>
                    </div>
                   
                    
                    <div class="text-right">
                            <button class="btn btn-secundario ml-2">Atualizar</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
