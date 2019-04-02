@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Persona</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                            <button type="button" class="btn d-none d-lg-inline-block mb-1 btn-roxo-fill">
                                <i class="fa fa-plus fa-fw mr-1"></i> Criar persona
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
    <div class="col-md-3 col-sm-12 mb-5">
        <ul class="menu-lateral">
            <li class="active">Persona</li>
        </ul>
    </div>
    <div class="col-md-9">
        <div class="block block-bordered block-rounded">
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-vcenter">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" style="width: 100px;">
                                    Foto
                                </th>
                                <th>Nome</th>
                                <th>Cargo</th>
                                <th>Função</th>
                                <th>Segmento</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                                </td>
                                <td class="font-w600">
                                    Andrea Gardner
                                </td>
                                <td>
                                    Administrador
                                </td>
                                <td>
                                    Administrador
                                </td>
                                <td>
                                    Administrador
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="/persona/detalhes" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a  href="/persona/editar" class="btn btn-sm btn-primary">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Advanced -->
</div>
<!-- END Page Content -->
@endsection
