@extends('includes.pageDefault')

@section('content')


<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h3 font-w400 mt-2 mb-0 mb-sm-2">Conteúdos</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                            <button type="button" class="btn d-none d-lg-inline-block mb-1 btn-roxo-fill">
                                <i class="fa fa-plus fa-fw mr-1"></i> Criar pauta
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
                <li class="active">Todos os conteúdos</li>
                <li><a href="pautas.html">Conteúdos em produção</a></li>
                <li><a href="pautas.html">Conteúdos em revisão</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    <div class="table-responsive">

    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-paginationn">
                <thead>
                    <tr>
                        <th class="text-center">TÍTULO</th>
                        <th>TAMANHO</th>
                        <th class="d-none d-sm-table-cell">TIPO</th>
                        <th class="d-none d-sm-table-cell">JORNADA</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="font-w600">Jose Mills</td>
                        <td class="d-none d-sm-table-cell">
                            client1<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td class="font-w600">Brian Cruz</td>
                        <td class="d-none d-sm-table-cell">
                            client2<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td>
                            <em class="text-muted">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td class="font-w600">Melissa Rice</td>
                        <td class="d-none d-sm-table-cell">
                            client3<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-primary">Personal</span>
                        </td>
                        <td>
                            <em class="text-muted">7 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td class="font-w600">Jose Mills</td>
                        <td class="d-none d-sm-table-cell">
                            client4<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-primary">Personal</span>
                        </td>
                        <td>
                            <em class="text-muted">4 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td class="font-w600">Melissa Rice</td>
                        <td class="d-none d-sm-table-cell">
                            client5<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted">8 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td class="font-w600">Brian Stevens</td>
                        <td class="d-none d-sm-table-cell">
                            client6<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td>
                            <em class="text-muted">7 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td class="font-w600">Thomas Riley</td>
                        <td class="d-none d-sm-table-cell">
                            client7<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td class="font-w600">Jose Parker</td>
                        <td class="d-none d-sm-table-cell">
                            client8<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td>
                            <em class="text-muted">10 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9</td>
                        <td class="font-w600">Carol Ray</td>
                        <td class="d-none d-sm-table-cell">
                            client9<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">10</td>
                        <td class="font-w600">Sara Fields</td>
                        <td class="d-none d-sm-table-cell">
                            client10<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td>
                            <em class="text-muted">7 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">11</td>
                        <td class="font-w600">Carol Ray</td>
                        <td class="d-none d-sm-table-cell">
                            client11<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted">4 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">12</td>
                        <td class="font-w600">Betty Kelley</td>
                        <td class="d-none d-sm-table-cell">
                            client12<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">13</td>
                        <td class="font-w600">Andrea Gardner</td>
                        <td class="d-none d-sm-table-cell">
                            client13<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted">2 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">14</td>
                        <td class="font-w600">Danielle Jones</td>
                        <td class="d-none d-sm-table-cell">
                            client14<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td>
                            <em class="text-muted">3 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">15</td>
                        <td class="font-w600">Carl Wells</td>
                        <td class="d-none d-sm-table-cell">
                            client15<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td>
                            <em class="text-muted">8 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">16</td>
                        <td class="font-w600">Jack Estrada</td>
                        <td class="d-none d-sm-table-cell">
                            client16<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted">2 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">17</td>
                        <td class="font-w600">Carl Wells</td>
                        <td class="d-none d-sm-table-cell">
                            client17<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-primary">Personal</span>
                        </td>
                        <td>
                            <em class="text-muted">4 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">18</td>
                        <td class="font-w600">Jeffrey Shaw</td>
                        <td class="d-none d-sm-table-cell">
                            client18<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted">3 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">19</td>
                        <td class="font-w600">David Fuller</td>
                        <td class="d-none d-sm-table-cell">
                            client19<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">20</td>
                        <td class="font-w600">Laura Carr</td>
                        <td class="d-none d-sm-table-cell">
                            client20<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted">9 days ago</em>
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
