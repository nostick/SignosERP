<div style="display: none;" data-client="" class="modal fade in" id="category-add" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{route('service.category.store')}}" method="POST" name="categorySave" id="categorySave">
            {{ csrf_field() }}
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Crear una categoria de servicios</h4>
            </div>
            <div class="modal-body">
                <div class="form-group form-md-line-input has-success">
                    <label class="col-md-2 control-label" for="name">Categoria</label>
                    <div class="col-md-10">
                        <div class="input-icon right">
                            <i class="icon-notebook"></i>
                            <input class="form-control" id="name" name="name" placeholder="Nombre de la categoria" type="text">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">Nombre de la categoria</span>

                        </div>
                    </div>
                </div>
                <input type="hidden" name="slug" id="slug" value=" ">
                <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline pull-left btn-circle" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn green btn-outline btn-circle" id="add-confirm" data-token="{{ csrf_token() }}">Crear</button>
            </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>