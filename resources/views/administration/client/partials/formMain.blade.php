<div class="col-md-12 ">
    <!-- BEGIN Portlet PORTLET-->
    <div class="portlet box blue-hoki">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-user"></i>Ficha Cliente </div>
            <div class="tools">
                <a title="" data-original-title="" href="javascript:;" class="collapse"> </a>
            </div>
        </div>
        <div class="portlet-body">
@if(isset($client))

<div class="row">
    <div class="col-lg-4">
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <div class="input-icon">
                <input class="form-control" type="text" name="name" id="name" value="{{$client->name}}">
                <label for="name">Nombre</label>
                <span class="help-block">Nombre</span>
                <i class="fa fa-child"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <div class="input-icon">
                <input class="form-control" type="text" name="last_name" id="last_name" value="{{$client->last_name}}">
                <label for="last_name">Apellido</label>
                <span class="help-block">Apellido</span>
                <i class="fa fa-at"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <div class="input-icon">
                <input class="form-control" type="text" name="company" id="company" value="{{$client->company}}">
                <label for="company">Empresa</label>
                <span class="help-block">Nombre de la Empresa</span>
                <i class="fa fa-cube"></i>
            </div>
        </div>
    </div>


</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <div class="input-icon">
                <input class="form-control" type="text" name="home_phone" id="home_phone" value="{{$client->home_phone}}">
                <label for="home_phone">Telefono Fijo</label>
                <span class="help-block">Telefono Fijo</span>
                <i class="fa fa-fax"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group form-md-line-input has-success form-md-floating-label">
            <div class="input-icon">
                <input class="form-control" type="text" name="mobile_phone" id="mobile_phone" value="{{$client->mobile_phone}}">
                <label for="mobile_phone">Celular</label>
                <span class="help-block">Celular</span>
                <i class="fa fa-phone"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group form-md-line-input has-success form-md-floating-label" >
            <div class="input-icon">
                <input class="form-control" type="text" name="email" id="email" value="{{$client->email}}">
                <label for="email">Email</label>
                <span class="help-block">user@user.com</span>
                <i class="fa fa fa-envelope"></i>
            </div>
        </div>
    </div>
</div>

<div class="form-group form-md-line-input has-success form-md-floating-label">
    <div class="input-icon">
        <input class="form-control" type="text" name="address" id="address" value="{{$client->address}}">
        <label for="address">Direccion</label>
        <span class="help-block">Direccion</span>
        <i class="fa fa-map-marker "></i>
    </div>
</div>
@else

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon">
                                <input class="form-control" type="text" name="name" id="name">
                                <label for="name">Nombre</label>
                                <span class="help-block">Nombre</span>
                                <i class="fa fa-child"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon">
                                <input class="form-control" type="text" name="last_name" id="last_name">
                                <label for="last_name">Apellido</label>
                                <span class="help-block">Apellido</span>
                                <i class="fa fa-at"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon">
                                <input class="form-control" type="text" name="company" id="company">
                                <label for="company">Empresa</label>
                                <span class="help-block">Nombre de la Empresa</span>
                                <i class="fa fa-cube"></i>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon">
                                <input class="form-control" type="text" name="home_phone" id="home_phone">
                                <label for="home_phone">Telefono Fijo</label>
                                <span class="help-block">Telefono Fijo</span>
                                <i class="fa fa-fax"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon">
                                <input class="form-control" type="text" name="mobile_phone" id="mobile_phone">
                                <label for="mobile_phone">Celular</label>
                                <span class="help-block">Celular</span>
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group form-md-line-input has-success form-md-floating-label" >
                            <div class="input-icon">
                                <input class="form-control" type="text" name="email" id="email">
                                <label for="email">Email</label>
                                <span class="help-block">user@user.com</span>
                                <i class="fa fa fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group form-md-line-input has-success form-md-floating-label">
                    <div class="input-icon">
                        <input class="form-control" type="text" name="address" id="address">
                        <label for="address">Direccion</label>
                        <span class="help-block">Direccion</span>
                        <i class="fa fa-map-marker "></i>
                    </div>
                </div>
            @endif
</div>
</div>
<!-- END Portlet PORTLET-->
</div>