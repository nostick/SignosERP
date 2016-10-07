<div style="display: none;" data-client="" class="modal fade in" id="client-suspend-item" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Confirmacion de Suspencion</h4>
            </div>
            <div class="modal-body">
                @if($client->status == true)
                    Esta seguro que desea suspender este cliente?
                @else
                    Esta seguro que desea quitar la suspension a este cliente?
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cerrar</button>
                @if($client->status == true)
                <button type="submit" class="btn red" id="suspend-confirm" data-token="{{ csrf_token() }}">
                        Suspender
                </button>
                @else
                    <button type="submit" class="btn green-jungle " id="suspend-confirm" data-token="{{ csrf_token() }}">
                        Activar
                    </button>
                @endif
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>