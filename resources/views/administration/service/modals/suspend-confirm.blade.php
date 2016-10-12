<div style="display: none;" data-service="" class="modal fade in" id="service-suspend-item" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Confirmacion de Suspencion</h4>
            </div>
            <div class="modal-body">
                @if(isset($service) && $service->status == true)
                    Esta seguro que desea suspender este servicio?
                @else
                    Esta seguro que desea quitar la suspension a este servicio?
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline btn-circle" data-dismiss="modal">Cerrar</button>
                @if(isset($service) && $service->status == true)
                <button type="submit" class="btn red btn-outline btn-circle" id="suspend-confirm" data-token="{{ csrf_token() }}">
                        Suspender
                </button>
                @else
                    <button type="submit" class="btn btn-outline btn-circle green-jungle " id="suspend-confirm" data-token="{{ csrf_token() }}">
                        Activar
                    </button>
                @endif
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>