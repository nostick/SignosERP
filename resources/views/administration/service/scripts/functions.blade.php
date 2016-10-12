<script>

    //Abrir modal de crear categoria en index
    $('#addBtnCategory').on('click',function(){
        $('#category-add').modal('show');
    });

    //Validar formulario de crear categoria en index
    //Create Form Company Validation
    $("#categorySave").validate({
        highlight: function(label) {
            //$(label.form).find("label[for=" + label.id + "]")
                    //.text('');
            $('#name').attr('placeholder','');
            $(label).closest('.form-group').addClass('has-error');
        },
        rules: {
            // simple rule, converted to {required:true}
            name: "required"
        },
        messages: {
            name: "Escribe el nombre de la categoria"
        }

    });

    //Eliminar Servicio
    $('.delete').on('click',function(){
        var $item = $(this).closest("tr").find("td:nth-child(2)").data('service');
        $('#service-delete-item').attr("data-service",$item);
        $('#service-delete-item').modal('show');
    });

    $('#delete-confirm').on('click',function(e){
        e.preventDefault();

        var $item = $('#service-delete-item').attr("data-service");
        var token = $(this).data('token');
        var url   = '{{url('service')}}';
        $.ajax({
            url:    url+'/'+$item,
            type: 'POST',
            data: {_method: 'delete', _token :token,'id':$item}
        }).success(function(data){
            console.log(data);
            setTimeout(function () {
                window.location.href = '{{route('service.index')}}'; //will redirect to your blog page (an ex: blog.html)
            }, 2000);

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "500",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.success("El registro ha sido eliminado con exito!", "Servicio Eliminado");
        });
    });

    //Suspender o Activar Servicio
    $('.suspend').on('click',function(){
        var $item = $(this).closest("tr").find("td:nth-child(2)").data('service');
        $('#service-suspend-item').attr("data-service",$item);
        $('#service-suspend-item').modal('show');
    });

    $('#suspend-confirm').on('click',function(e){
        e.preventDefault();

        var $item = $('#service-suspend-item').attr("data-service");
        var token = $(this).data('token');
        var url   = '{{url('service/suspend')}}';
        $.ajax({
            url:    url+'/'+$item,
            type: 'POST',
            data: {_token :token,'id':$item}
        }).success(function(data){
            console.log(data);
            setTimeout(function () {
                window.location.href = '{{route('service.index')}}'; //will redirect to your blog page (an ex: blog.html)
            }, 2000);

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "500",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            if(data.message == true){
                toastr.success("El servicio ha sido activado con exito!", "Servicio Activado");
            }else{
                toastr.success("El servicio ha sido suspendido con exito!", "Servicio Suspendido");
            }


        });
    });
</script>