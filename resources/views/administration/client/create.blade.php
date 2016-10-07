@extends('layouts.template')

@section('title')
    Agregar una nueva Compañia
@endsection

@section('content')
    <h1 class="page-title"> Compañias
        <small>detalle y listado de las compañias</small>
    </h1>

    @include('administration.client.partials.breadcrum',['line' => 'Agregar nuevo'])

    <div class="row">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-dark"><h4>
                        <i class="icon-user font-dark"></i>
                        <span class="caption-subject bold">Agregar Cliente</span></h4>
                </div>
                <div class="tools">
                </div>
            </div>
            <div class="portlet-body">
                <form action="{{route('clients.store')}}" name="client-save" method="POST" id="client-save">
                                {{ csrf_field() }}

                                @include('administration.client.partials.formMain')

                                @include('administration.client.partials.fiscalForm')

                                @include('administration.client.partials.responsibleForm')

                                <button type="submit" class="btn btn-lg green pull-right"> Guardar
                                    <i class="fa fa-plus"></i>
                                </button>
                                <a href="{{route('clients.index')}}" class="btn btn-lg red">
                                    <i class="fa fa-chevron-left "></i>
                                    Regresar
                                </a>


                </form>
            </div>
        </div>
    </div>
@endsection

@section('after-scripts')
    @include('administration.client.scripts.functions')
    <script>

        //Create Form Company Validation
        $("#client-save").validate({

            highlight: function(label) {
                $(label.form).find("label[for=" + label.id + "]")
                        .text('');
                $(label).closest('.form-group').addClass('has-error');
            },
            rules: {
                // simple rule, converted to {required:true}
                name: "required",
                last_name: "required",
                company: "required",
                home_phone: "required",
                mobile_phone: "required",
                email: {
                    required: true,
                    email: true
                },
                address: "required",
                social_razon: "required",
                cuit: "required",
                fiscalAddress: "required"
            },
            messages: {
                name: "Escribe tu nombre",
                last_name: "Escribe tu apellido",
                company: "Nombre de tu compania",
                home_phone: "Numero de telefono fijo",
                mobile_phone: "Numero de telefono movil",
                email: {
                    required: "Escribe tu email",
                    email: "Tu email debe ser: name@domain.com"
                },
                address: "Escribe tu direccion",
                social_razon: "Escribe la razon social",
                cuit: "Escribe el CUIT",
                fiscalAddress: "Escribe la direccion fiscal"
            }

        });

    </script>
@endsection