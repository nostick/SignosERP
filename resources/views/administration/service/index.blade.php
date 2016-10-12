@extends('layouts.template')

@section('title')
    Servicios
@endsection

@section('content')
    @include('administration.service.partials.breadcrum')

    <h1 class="page-title"> Servicios
        <small>Detalles e informacion de los servicios</small>
    </h1>



    <div class="row">

        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-puzzle"></i>Servicios</div>
                    <div class="tools">
                    </div>
                    <a href="{{route('service.create')}}" class="btn btn-outline btn-circle btn-md blue pull-right">
                        <i class="fa fa-plus"></i> Agregar Servicio</a>
                    <a href="#" class="btn btn-outline btn-circle btn-md purple-plum pull-right" style="margin-right: 5px;" id="addBtnCategory">
                        <i class="fa fa-plus"></i> Agregar Categoria</a>
                </div>
                <div class="portlet-body">
                    <form class="search-form search-form-expanded" action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query" id="filter">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered table-advance table-hover" id="service-table">
                            <thead >
                            <tr >
                                <th style="background-color: #0d638f !important; color: #ffffff">
                                    <i class="fa fa-tag"></i> Categoria </th>
                                <th style="background-color: #0d638f !important; color: #ffffff">
                                    <i class="fa fa-book"></i> Servicio </th>
                                <th style="background-color: #0d638f !important; color: #ffffff">
                                    <i class="fa fa-history"></i> Ciclo</th>
                                <th style="background-color: #0d638f !important; color: #ffffff">
                                    <i class="fa fa-circle-o"></i> Estatus</th>
                                <th style="background-color: #0d638f !important; color: #ffffff">Opciones </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $count = 0;?>
                            @foreach($services as $service)
                                <tr>
                                    <td>{{$service->category->name}}</td>
                                    <td data-service="{{$service->id}}">{{$service->name}}</td>
                                    <td>{{$service->cycle}}</td>
                                    @if($service->status)
                                        <td>Activo</td>
                                    @else
                                        <td>Suspendido</td>
                                    @endif
                                    <td width="300px" class="text-center">
                                        <a href="{{route('service.edit',$service->id)}}" class="btn btn-outline btn-circle btn-sm blue">
                                            <i class="fa fa-edit"></i> Editar </a>
                                        <a href="#" class="btn btn-outline btn-circle btn-sm red delete">
                                            <i class="fa fa-trash-o"></i> Eliminar </a>

                                        @if($service->status)
                                        <a href="#" class="btn btn-outline btn-circle btn-sm dark suspend">
                                            <i class="fa fa-user-times"></i> Suspender </a>
                                        @else
                                            <a href="#" class="btn btn-outline btn-circle btn-sm green-jungle suspend">
                                                <i class="fa fa-user"></i> Activar </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>


    </div>

    @include('administration.service.modals.add-category-confirm')
    @include('administration.service.modals.delete-confirm')
    @include('administration.service.modals.suspend-confirm')
@endsection

@section('after-scripts')
    @include('administration.service.scripts.functions')
    @include('administration.service.scripts.tableScript')
    <script>
        if('{{$success}}' == 1){

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "500",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"


            };

            switch('{{$save}}'){
                case 'store':
                    toastr.success("El registro ha sido guardado con exito!", "Nuevo Servicio Creado");
                    break;

                case 'update':
                    toastr.success("El registro ha sido actualizado con exito!", "Servicio Editado");
                    break;

                case 'storeCat':
                    toastr.success("El registro ha sido guardado con exito!", "Nueva Categoria Creada");
                    break;
            }
        }


    </script>
@endsection