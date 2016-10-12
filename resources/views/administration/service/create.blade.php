@extends('layouts.template')

@section('title')
    Crear Servicio
@endsection

@section('content')

    @include('administration.service.partials.breadcrum',['line'=>'Crear Servicio'])

    <h1 class="page-title"> Crear servicio
        <small>Registro de nuevo servicio</small>
    </h1>

    <div class="row">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-dark"><h4>
                        <i class="icon-puzzle font-dark"></i>
                        <span class="caption-subject bold">Nuevo servicio</span></h4>
                </div>
                <div class="tools">
                </div>
            </div>
            <div class="portlet-body">
                <form action="{{route('service.store')}}" name="service-save" method="POST" id="service-save">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group form-md-line-input has-success">
                            <select class="form-control" id="category_id" name="category_id">
                                <option value="">Seleccione categoria</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <label for="category_id">Categoria de servicio</label>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                <div class="input-icon">
                                    <input class="form-control" type="text" name="name" id="name" >
                                    <label for="name">Nombre</label>
                                    <span class="help-block">Nombre del Servicio</span>
                                    <i class="fa fa-cube"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                <div class="input-icon">
                                    <input class="form-control" type="text" name="description" id="description" >
                                    <label for="description">Descripcion</label>
                                    <span class="help-block">Detalles del servicio</span>
                                    <i class="fa fa-book"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">


                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                <div class="input-icon">
                                    <input class="form-control" type="text" name="price" id="price" >
                                    <label for="price">Precio</label>
                                    <span class="help-block">Precio del Servicio</span>
                                    <i class="fa fa-money"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-md-radios">
                                <label><i class="fa fa-history"></i> Ciclo</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio has-success">
                                        <input id="radio14" name="cycle" class="md-radiobtn" type="radio" value="Ninguno">
                                        <label for="radio14">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Ninguno</label>
                                    </div>
                                    <div class="md-radio has-success">
                                        <input id="radio15" name="cycle" class="md-radiobtn" type="radio" value="Mensual">
                                        <label for="radio15">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Mensual </label>
                                    </div>
                                    <div class="md-radio has-success">
                                        <input id="radio16" name="cycle" class="md-radiobtn" type="radio" value="Anual">
                                        <label for="radio16">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Anual </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="width: 153px; margin-left: 0px;" class="bootstrap-switch-container form-group">
                                <span style="width: 51px;" class="bootstrap-switch-handle-on bootstrap-switch-success">
                                    <i class="fa fa-circle-o"></i> Estatus
                                </span>
                                <input class="make-switch" checked=""
                                       data-on-color="success"
                                       data-off-color="default"
                                       data-on-text="Activo"
                                       data-off-text="Suspendido"
                                       name="status"
                                       id="status"
                                       type="checkbox">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-circle btn-lg pull-right btn-outline green" >
                        <span class="hidden-sm hidden-xs">Guardar&nbsp;</span>&nbsp;
                        <i class="fa fa-plus"></i>
                    </button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('after-scripts')
    <script>

        //Create Form Company Validation
        $("#service-save").validate({

            highlight: function(label) {
                $(label.form).find("label[for=" + label.id + "]")
                        .text('');
                $(label).closest('.form-group').addClass('has-error');
            },
            rules: {
                // simple rule, converted to {required:true}
                name: "required",
                description: "required",
                price: "required",
                category_id: "required"
            }
        });

    </script>
@endsection