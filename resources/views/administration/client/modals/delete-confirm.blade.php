<div style="display: none;" data-client="" class="modal fade in" id="client-delete-item" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Confirmacion de Eliminacion</h4>
            </div>
            <div class="modal-body"> Esta seguro que desea eliminar este cliente? </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn red" id="delete-confirm" data-token="{{ csrf_token() }}">Eliminar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>