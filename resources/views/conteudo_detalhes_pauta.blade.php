@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">O que é marketing digital?</h1>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="content">

    <!-- Advanced -->
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="menu-lateral">
                <li><a href="/conteudo/detalhes">Visualizar</a></li>
                <li><a href="/conteudo/detalhes-edicao">Editar</a></li>
                <li class="active">Pauta</li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    O que é marketing digital?
                </div>
            </div>
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    Colocar a pauta aqui
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="block block-bordered block-rounded p-3">
                <h1 class="font-size-h3 font-w400">Status</h1>
                <p>redação aprovação</p>
                <p>21 de abr de 2019, 08:32</p>
            </div>
            <div class="block block-bordered block-rounded">
                <div class="font-size-sm p-3">
                    <div class="media">
                        <a class="img-link mr-2" href="javascript:void(0)">
                            <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{ asset('media/avatars/avatar8.jpg') }}" alt="">
                        </a>
                        <div class="media-body">
                            <p class="mb-1">
                                <span class="font-w600">Helena</span>
                                Helena Leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus?
                            </p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="img-link mr-2" href="javascript:void(0)">
                            <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{ asset('media/avatars/avatar8.jpg') }}" alt="">
                        </a>
                        <div class="media-body">
                            <p class="mb-1">
                                <span class="font-w600">Helena</span>
                                Helena Leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="font-size-sm p-2">
                    <form action="db_social_compact.html" method="POST" onsubmit="return false;">
                        <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
                    </form>
                </div>
            </div>
            <div class="block block-bordered block-rounded p-3">
                <p>Insira sua img aqui</p>
                <input type="file" name="" id="">
            </div>
        </div>
    </div>
    <!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
