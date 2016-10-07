<script>

//Setting some functionalities buttons
$('#create-company').on('click',function(){
    location.href='{{route('company.create')}}';
});

$('.delete').on('click',function(){
    var $item = $(this).closest("tr").find("td:nth-child(1)").data('company');
    $('#company-delete-item').attr("data-company",$item);
    $('#company-delete-item').modal('show');
});

$('#delete-confirm').on('click',function(e){
    e.preventDefault();
    var $item = $('#company-delete-item').attr("data-company");
    var token = $(this).data('token');
    var url   = '{{url('company')}}';
    $.ajax({
        url:    url+'/'+$item,
        type: 'post',
        data: {_method: 'delete', _token :token}
    }).success(function(data){
        setTimeout(function () {
            window.location.href = '{{route('company.index')}}'; //will redirect to your blog page (an ex: blog.html)
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

        toastr.success("El registro ha sido eliminado con exito!", "Compañia Eliminada");
    });
});

//Success Message From Companies
    //Cuando crea una compania

if('{{$success}}' == 1){
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

    switch('{{$save}}'){
        case 'store':
            toastr.success("El registro ha sido guardado con exito!", "Nueva Compañia Creada");
            break;

        case 'update':
            toastr.success("El registro ha sido actualizado con exito!", "Compañia Editada");
            break;
    }



}
</script>