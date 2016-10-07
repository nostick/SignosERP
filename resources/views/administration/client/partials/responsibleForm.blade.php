@if(!isset($client))

<div class="col-md-12 " style="display: none;" id="extraForm">
    <!-- BEGIN Portlet PORTLET-->
    <div class="portlet box blue-hoki">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-bars"></i>Responsable Inscripto </div>
            <div class="tools">
                <a title="" data-original-title="" href="javascript:;" class="collapse"> </a>
            </div>
        </div>
        <div class="portlet-body">

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="social_razon" id="social_razon" required>
                            <label for="social_razon">Razon Social</label>
                            <span class="help-block">Razon Social</span>
                            <i class="fa fa-gavel"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="cuit" id="cuit">
                            <label for="cuit">CUIT</label>
                            <span class="help-block">CUIT</span>
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                        <div class="input-icon">
                            <input class="form-control" type="text" name="fiscalAddress" id="fiscalAddress">
                            <label for="fiscalAddress">Domicilio Fiscal</label>
                            <span class="help-block">Domicilio Fiscal</span>
                            <i class="fa fa-suitcase"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END Portlet PORTLET-->
</div>

@elseif($client->type == 1)
    <div class="col-md-12 " id="extraForm">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-bars"></i>Responsable Inscripto </div>
                <div class="tools">
                    <a title="" data-original-title="" href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon">
                                <input class="form-control" type="text" name="social_razon" id="social_razon" value="{{$client->responsibleType->social_rason}}">
                                <label for="social_razon">Razon Social</label>
                                <span class="help-block">Razon Social</span>
                                <i class="fa fa-gavel"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon">
                                <input class="form-control" type="text" name="cuit" id="cuit" value="{{$client->responsibleType->cuit}}">
                                <label for="cuit">CUIT</label>
                                <span class="help-block">CUIT</span>
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon">
                                <input class="form-control" type="text" name="fiscalAddress" id="fiscalAddress" value="{{$client->responsibleType->address}}">
                                <label for="fiscalAddress">Domicilio Fiscal</label>
                                <span class="help-block">Domicilio Fiscal</span>
                                <i class="fa fa-suitcase"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END Portlet PORTLET-->
    </div>
@elseif($client->type != 1)

    <div class="col-md-12 " style="display: none;" id="extraForm">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-bars"></i>Responsable Inscripto </div>
                <div class="tools">
                    <a title="" data-original-title="" href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon">
                                <input class="form-control" type="text" name="social_razon" id="social_razon" required>
                                <label for="social_razon">Razon Social</label>
                                <span class="help-block">Razon Social</span>
                                <i class="fa fa-gavel"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon">
                                <input class="form-control" type="text" name="cuit" id="cuit">
                                <label for="cuit">CUIT</label>
                                <span class="help-block">CUIT</span>
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                            <div class="input-icon">
                                <input class="form-control" type="text" name="fiscalAddress" id="fiscalAddress">
                                <label for="fiscalAddress">Domicilio Fiscal</label>
                                <span class="help-block">Domicilio Fiscal</span>
                                <i class="fa fa-suitcase"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END Portlet PORTLET-->
    </div>
@endif