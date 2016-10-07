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
</script>