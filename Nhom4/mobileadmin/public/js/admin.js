
$(document).ready(function() {
    $("#btnAddProduct").click(function() {
        var validate = validateFormProtuct();
        if (validate) {
            $("#formProduct").submit();
        } else {
            //"Validate failed!"
        }
    })
    $("#btnAddManufacture").click(function() {
        var validate = validateFormManufacture();
        if (validate) {
            $("#formManufacture").submit();
        } else {
            //"Validate failed!"
        }
    })
    $("#btnAddProtype").click(function() {
        var validate = validateFormManufacture();
        if (validate) {
            $("#formProtype").submit();
        } else {
            //"Validate failed!"
        }
    })


    function validateFormProtuct() {
        var name = $('#name').val();
        var description = $('#description').val();
        var price = $('#price').val();
        var price_int = parseInt(price);
        var fileUpload = $('#fileUpload').val();

        var isValid = true;
        $(".msg-error").remove();
        if (name == '') {
            $("#name").after('<br><span class="msg-error text-error">The name field is required</span>');
            $("#name").addClass("border-danger");
            isValid = false;
        }
        if (description == '') {
            $("#description").after('<br><span class="msg-error text-error">The description field is required</span>');
            $("#description").addClass("border border-danger");
            isValid = false;
        }
        if (price == '' ) {
            $("#price").after('<br><span class="msg-error text-error">The price field is required</span>');
            $("#price").addClass("border border-danger");
            isValid = false;
        }
        if (fileUpload == '') {
            $("#file").after('<div style = "margin-left: 200px;"><span class="msg-error text-error">The fileUpload field is required</span></div>');
            $("#file").addClass("border border-danger");
            isValid = false;
        }
        if (price != '' && Number.isInteger(price_int)  == false ) {
            $("#price").after('<br><span class="msg-error text-error">The price is must interger</span>');
            $("#price").addClass("border border-danger");
            isValid = false;
        }
        if (isValid) {
            $("#name").removeClass("border border-danger");
            $("#description").removeClass("border border-danger");
            $("#price").removeClass("border border-danger");
            $("#fileUpload").removeClass("border border-danger");
        }
        return isValid;
    }

    function validateFormManufacture() {
        var name = $('#name').val();
        var fileUpload = $('#fileUpload').val();

        var isValid = true;
        $(".msg-error").remove();
        if (name == '') {
            $("#name").after('<br><span class="msg-error text-error">The name field is required</span>');
            $("#name").addClass("border-danger");
            isValid = false;
        }
        if (fileUpload == '') {
            $("#file").after('<div style = "margin-left: 200px;"><span class="msg-error text-error">The fileUpload field is required</span></div>');
            $("#file").addClass("border border-danger");
            isValid = false;
        }
        if (isValid) {
            $("#name").removeClass("border border-danger");
            $("#fileUpload").removeClass("border border-danger");
        }
        return isValid;
    }

});