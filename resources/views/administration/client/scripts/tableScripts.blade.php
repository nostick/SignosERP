<script>
    $(document).ready(function () {
    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('#client-table tbody tr').hide();
            $('#client-table tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));
    });

    $table1= $("#client-table").DataTable({
        "ordering": true,
        "pageLength": 5,
        "sDom": '<"top">rt<"bottom"p><"clear">',
        "aaSorting": [1,'asc'],
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:  ",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
    //$('div.dataTables_filter').addClass('pull-right');
    $('div#client-table_paginate').addClass('pull-right');

</script>