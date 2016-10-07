<script>
    $( "input[type=radio]" ).on( "click", function (){
        var type = $( "input:checked" ).val();

        if(type == 1){
            $("#extraForm").css('display','block');
        }else{
            $("#extraForm").css('display','none');
        }
    });

    //Create Form Company Validation
    $("#client-save").validate({

        highlight: function(label) {
            $(label.form).find("label[for=" + label.id + "]")
                    .text('');
            $(label).closest('.form-group').addClass('has-error');
        },
        rules: {
            // simple rule, converted to {required:true}
            name: "required",
            last_name: "required",
            company: "required",
            home_phone: "required",
            mobile_phone: "required",
            email: {
                required: true,
                email: true
            },
            address: "required",
            social_razon: "required",
            cuit: "required",
            fiscalAddress: "required"
        },
        messages: {
            name: "Escribe tu nombre",
            last_name: "Escribe tu apellido",
            company: "Nombre de tu compania",
            home_phone: "Numero de telefono fijo",
            mobile_phone: "Numero de telefono movil",
            email: {
                required: "Escribe tu email",
                email: "Tu email debe ser: name@domain.com"
            },
            address: "Escribe tu direccion",
            social_razon: "Escribe la razon social",
            cuit: "Escribe el CUIT",
            fiscalAddress: "Escribe la direccion fiscal"
        }

    });

    $('.delete').on('click',function(){
        var $item = $(this).closest("tr").find("td:nth-child(1)").data('client');
        $('#client-delete-item').attr("data-client",'{{$client->id}}');
        $('#client-delete-item').modal('show');
    });

    $('#delete-confirm').on('click',function(e){
        e.preventDefault();
        var $item = $('#client-delete-item').attr("data-client");
        var token = $(this).data('token');
        var url   = '{{url('clients')}}';
        $.ajax({
            url:    url+'/'+$item,
            type: 'POST',
            data: {_method: 'delete', _token :token,'id':$item}
        }).success(function(data){
            setTimeout(function () {
                window.location.href = '{{route('clients.index')}}'; //will redirect to your blog page (an ex: blog.html)
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

            toastr.success("El registro ha sido eliminado con exito!", "Cliente Eliminado");
        });
    });

    $('.suspend').on('click',function(){
        var $item = $(this).closest("tr").find("td:nth-child(1)").data('client');
        $('#client-suspend-item').attr("data-client",'{{$client->id}}');
        $('#client-suspend-item').modal('show');
    });

    $('#suspend-confirm').on('click',function(e){
        e.preventDefault();
        var $item = $('#client-suspend-item').attr("data-client");
        var token = $(this).data('token');
        var url   = '{{url('clients/suspend')}}';
        $.ajax({
            url:    url+'/'+$item,
            type: 'POST',
            data: {_method: 'POST', _token :token,'id':$item}
        }).success(function(data){
            setTimeout(function () {
                window.location.href = '{{route('clients.index')}}'; //will redirect to your blog page (an ex: blog.html)
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

            if('{{$client->status == true}}'){
                toastr.success("El cliente ha sido suspendido con exito!", "Cliente Suspendido");
            }else{
                toastr.success("El cliente ha sido reactivado con exito!", "Cliente Activado");
            }

        });
    });
</script>