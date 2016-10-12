<div style="display: none;" data-service="" class="modal fade in" id="service-suspend-item" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Confirmacion de Suspencion</h4>
            </div>
            <div class="modal-body">
                <p id="suspending" style="display: none">Esta seguro que desea suspender este servicio?</p>
                <p id="activating" style="display: none">Esta seguro que desea activar este servicio?</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline btn-circle pull-left" data-dismiss="modal">Cerrar</button>

                <button style="display: none" type="submit" class="btn red btn-outline btn-circle pull-right" id="suspend-confirm-1" data-token="{{ csrf_token() }}">
                        Suspender
                </button>

                    <button style="display: none" type="submit" class="btn btn-outline btn-circle green-jungle pull-right" id="suspend-confirm-2" data-token="{{ csrf_token() }}">
                        Activar
                    </button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>