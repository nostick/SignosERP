@extends('layouts.template')

@section('title')
    Area de Clientes
@endsection

@section('content')
    @include('administration.client.partials.breadcrum')

    <h1 class="page-title"> Clientes
        <small>Listado e informacion de los clientes de Signos</small>
    </h1>



    <div class="row">

                <div class="col-md-12">
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-users"></i>Clientes </div>
                            <div class="tools">
                            </div>
                            <a href="{{route('clients.create')}}" class="btn btn-outline btn-circle btn-md blue pull-right">
                                <i class="fa fa-plus"></i> Agregar Cliente</a>
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
                                <table class="table table-striped table-bordered table-advance table-hover" id="client-table">
                                    <thead >
                                    <tr >
                                        <th style="background-color: #0d638f !important; color: #ffffff">
                                            <i class="fa fa-tag"></i> Item </th>
                                        <th class="hidden-xs" style="background-color: #0d638f !important; color: #ffffff">
                                            <i class="fa fa-user"></i> Nombre Cliente </th>
                                        <th style="background-color: #0d638f !important; color: #ffffff">
                                            <i class="fa fa-briefcase"></i> Nombre Empresa </th>
                                        <th style="background-color: #0d638f !important; color: #ffffff">Opciones </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?>
                                    @foreach($clients as $client)
                                        <tr>
                                            <td class="highlight" data-client="{{$client->id}}">
                                                <div class="info"></div>
                                                <a href="#"> {{$count = $count + 1}} </a>
                                            </td>
                                            <td class="hidden-xs"> {{$client->name .' '. $client->last_name}} </td>
                                            <td> {{$client->company}} </td>
                                            <td class="text-center">
                                                <a href="{{route('clients.edit',$client->id)}}" class="btn btn-outline btn-circle btn-sm blue">
                                                    <i class="fa fa-edit"></i> Editar </a>
                                                <a href="#" class="btn btn-outline btn-circle btn-sm red delete">
                                                    <i class="fa fa-trash-o"></i> Eliminar </a>
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

    <!--Modals Include Section-->
    @include('administration.client.modals.delete-confirm')
@endsection

@section('after-scripts')
    @include('administration.client.scripts.tableScripts')

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
                    toastr.success("El registro ha sido guardado con exito!", "Nueva Cliente Creado");
                    break;

                case 'update':
                    toastr.success("El registro ha sido actualizado con exito!", "Cliente Editado");
                    break;
            }
        }

        $('.delete').on('click',function(){
            var $item = $(this).closest("tr").find("td:nth-child(1)").data('client');
            $('#client-delete-item').attr("data-client",$item);
            $('#client-delete-item').modal('show');
        });

        $('#delete-confirm').on('click',function(e){
            e.preventDefault();
            var $item = $('#client-delete-item').attr("data-client");
            var token = $(this).data('token');
            var url   = '{{url('clients')}}';
            $.ajax({
                url:    url+'/'+$item,
                type: 'POST',
                data: {_method: 'delete', _token :token,'id':$item}
            }).success(function(data){
                console.log(data);
                setTimeout(function () {
                    window.location.href = '{{route('clients.index')}}'; //will redirect to your blog page (an ex: blog.html)
                }, 2000);

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

                toastr.success("El registro ha sido eliminado con exito!", "Cliente Eliminado");
            });
        });
    </script>
@endsection