@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Persona</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                        <a href="/persona/criar">
                            <button type="button" class="btn d-none d-lg-inline-block mb-1 btn-secundario">
                                <i class="fa fa-plus fa-fw mr-1"></i> Criar persona
                            </button>
                            </a>
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
@if(isset($message))
            <div class="mb-3 alert alert-success" role="alert">
                {{ $message }}
            </div>
            
            @endif
    <div class="col-md-12">
        <div class="block block-bordered block-rounded">
                @if(isset($personas))
                <div class="table-responsive">
                    <table class="table table-vcenter">
                        <thead class="thead-light">
                            <tr>
                                <th>Nome</th>
                                <th>Função</th>
                                <th>Segmento</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($personas as $p)
                            <tr>
                                <td class="font-w600 link-color">
                                    {{ $p->nome }}
                                </td>
                                <td>
                                    {{ $p->cargo }}
                                </td>
                                <td>
                                    {{ $p->segmento }}
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="/persona/detalhes/{{ $p->id_persona}}" class="">
                                        <button class="btn btn-cinza ml-2">Editar</button>
                                        </a>
                                        <button data-toggle="modal" data-target="#modal-sure" onclick="myFunction({{ $p->id_persona}})" class="btn btn-cinza ml-2">Deletar Persona</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
        </div>
    </div>
</div>

 <div class="modal fade" id="modal-sure" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form id="form_delete" action="" method="POST" >
                    @method('DELETE')
                        <div class="block block-transparent mb-0">
                            <div class="block-header background-cinza">
                                <h3 class="block-title">Você tem certeza?</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <p>Você está prestes a excluir esta persona da sua conta. Todas as informações da persona serão perdidas.</p>
                                <input type="hidden" id="id_persona" value="">
                            </div>
                            <div class="block-content block-content-full text-right bg-light">
                                <button type="submit" class="btn btn-sm btn-secundario">Deletar persona</button>
                                <button type="button" class="btn btn-sm btn-cinza" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!-- END Advanced -->
</div>
<!-- END Page Content -->
<script>

    function myFunction(id){4
        var frm = document.getElementById('form_delete') || null;
        if(frm) {
        frm.action = '/api/deletar_persona/' + id; 
        }
    }

</script>

@endsection
