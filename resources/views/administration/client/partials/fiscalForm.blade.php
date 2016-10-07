<div class="col-md-12 ">
    <!-- BEGIN Portlet PORTLET-->
    <div class="portlet box blue-hoki">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-balance-scale"></i>Datos Fiscales </div>
            <div class="tools">
                <a title="" data-original-title="" href="javascript:;" class="collapse"> </a>
            </div>
        </div>
        <div class="portlet-body">

            <div class="form-group form-md-radios">
                <div class="md-radio-list">
                    <div class="md-radio">
                        <input id="radio9" name="radio" class="md-radiobtn" type="radio"
                               @if(isset($client) && $client->type == 1)
                               checked="checked"
                               @endif
                               value="1">
                        <label for="radio9">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Responsable Inscripto </label>
                    </div>
                    <div class="md-radio">
                        <input id="radio10" name="radio" class="md-radiobtn" type="radio"
                               @if(isset($client) && $client->type == 2)
                               checked="checked"
                               @endif
                               value="2">
                        <label for="radio10">
                            <span class="inc"></span>
                            <span class="check"></span>
                            <span class="box"></span> Monotributista </label>
                    </div>
                    <div class="md-radio">
                        <input id="radio11" name="radio" class="md-radiobtn" type="radio"
                               @if(isset($client) && $client->type == 3)
                               checked="checked"
                               @endif
                               value="3">
                        <label for="radio11">
                            <span class="inc"></span>
                            <span class="check"></span>
                            <span class="box"></span> Consumidor Final </label>
                    </div>
                    <div class="md-radio">
                        <input id="radio13" name="radio" class="md-radiobtn " type="radio"
                               @if(isset($client) && $client->type == 4)
                               checked="checked"
                               @elseif(!isset($client))
                               checked="checked"
                               @endif
                               value="4">
                        <label for="radio13">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Exento </label>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END Portlet PORTLET-->
</div>