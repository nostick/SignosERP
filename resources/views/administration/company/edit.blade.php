@extends('layouts.template')

@section('title')
    Editar Compañia
@endsection

@section('content')
    <h1 class="page-title"> Compañias
        <small>detalle y listado de las compañias</small>
    </h1>

    @include('administration.company.partials.breadcrum',['line' => 'Editar'])

    <div class="row">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-dark"><h4>
                        <i class="icon-globe font-dark"></i>
                        <span class="caption-subject bold">Editar Compañia</span></h4>
                </div>
                <div class="tools">
                </div>
            </div>
            <div class="portlet-body">
                <form action="{{route('company.update',$company->id)}}" name="company-save" method="POST" id="company-save">
                    {{ csrf_field() }}

                    {{ method_field('PUT') }}
                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="nick_name" id="nick_name" value="{{$company->nick_name}}">
                            <label for="nick_name">Fantasia</label>
                            <span class="help-block">Nombre(Fantasia) de la Compañia</span>
                            <i class="fa fa-child"></i>
                        </div>
                    </div>

                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="name" id="name" value="{{$company->name}}">
                            <label for="name">Nombre</label>
                            <span class="help-block">Nombre de la Compañia</span>
                            <i class="fa fa-cube"></i>
                        </div>
                    </div>

                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="address" id="address" value="{{$company->address}}">
                            <label for="address">Domicilio</label>
                            <span class="help-block">Direccion de la Compañia</span>
                            <i class="fa fa-map-marker "></i>
                        </div>
                    </div>

                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="location" id="location" value="{{$company->location}}">
                            <label for="location">Localidad</label>
                            <span class="help-block">Ciudad Evita - Localidad</span>
                            <i class="fa fa-map-signs "></i>
                        </div>
                    </div>

                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="postal_code" id="postal_code" value="{{$company->postal_code}}">
                            <label for="postal_code">Codigo Postal</label>
                            <span class="help-block">1601 - Codigo Postal</span>
                            <i class="fa fa-fax"></i>
                        </div>
                    </div>

                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="phone" id="phone" value="{{$company->phone}}">
                            <label for="phone">Telefono</label>
                            <span class="help-block">+54 11 1234-5678</span>
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>

                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="email" name="email" id="email" value="{{$company->email}}">
                            <label for="email">E-mail</label>
                            <span class="help-block">user@user.com</span>
                            <i class="fa fa-envelope "></i>
                        </div>
                    </div>

                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="cuit" id="cuit" value="{{$company->cuit}}">
                            <label for="cuit">CUIT</label>
                            <span class="help-block">2012345678</span>
                            <i class="fa fa-user "></i>
                        </div>
                    </div>

                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="iibb" id="iibb" value="{{$company->iibb}}">
                            <label for="iibb">Numero de IIBB</label>
                            <span class="help-block">Numero de IIBB</span>
                            <i class="fa fa-get-pocket "></i>
                        </div>
                    </div>

                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="bank_data" id="bank_data" value="{{$company->bank_data}}">
                            <label for="bank_data">Informacion Bancaria</label>
                            <span class="help-block">Datos de Transferencia o Deposito</span>
                            <i class="fa fa-credit-card "></i>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-lg green pull-right"> Guardar
                        <i class="fa fa-plus"></i>
                    </button>
                    <a href="{{route('company.index')}}" class="btn btn-lg red">
                        <i class="fa fa-chevron-left "></i>
                        Regresar
                    </a>


                </form>
            </div>
        </div>
    </div>

@endsection

@section('after-scripts')
    <script>

        //Create Form Company Validation
        $("#company-save").validate({

            highlight: function(label) {
                $(label.form).find("label[for=" + label.id + "]")
                        .text('');
                $(label).closest('.form-group').addClass('has-error');
            },
            rules: {
                // simple rule, converted to {required:true}
                nick_name: "required",
                name: "required",
                address: "required",
                location: "required",
                postal_code: "required",
                phone: "required",
                cuit: "required",
                bank_data: "required",
                email: {
                    required: true,
                    email: true
                },
                iibb: "required"
            }
        });

    </script>
@endsection