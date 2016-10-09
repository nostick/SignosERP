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
</script>