
var is_username = 0;

$(document).ready(function() {

    $('#passwordResetLable, #credDiv').hide();

    $('#username, #city_name').on('keypress input', function(e) {
        $(this).removeClass('is-invalid');
        if (e.type === 'input') {
            setTimeout(function() {
                var inputValue = $(this).val();
                var sanitizedValue = inputValue.replace(/[^\w]/gi, '');
                $(this).val(sanitizedValue);
            }.bind(this), 0);
        } else {
            var charCode = e.which || e.keyCode;
            if ((charCode === 32) || !(charCode >= 48 && charCode <= 57) && !(charCode >= 65 && charCode <= 90) && !(charCode >= 97 && charCode <= 122)) {
                e.preventDefault();
            }
        }
    });

    $('#eye1').click(function(){
        if($('#eye1 i').hasClass('mdi-eye-off-outline')){
            $('#eye1 i').removeClass('mdi-eye-off-outline').addClass('mdi-eye-outline');
            $('#password').attr('type','text');
        }else{
            $('#eye1 i').removeClass('mdi-eye-outline').addClass('mdi-eye-off-outline');
            $('#password').attr('type','password');
        }
    });

    $('#password').bind('keyup blur', function(e){
        var keyCode = e.which;

        if(keyCode === 32){
            e.preventDefault();
            $(this).val('');
        }
    });

    $('#password').on('change', function() {
        var new_password = $(this).val();

        if (new_password.length != 0  && (new_password.length < 6 || new_password.length > 14)) {
            toastr['error']("Password should be between 6 and 14 characters.");
            $(this).addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid');
        }
    });

    $("[name=agent_login_type]").on("change", function() {
        getLoginType();
    });

    $('#passwordReset').change(function() {
        if ($(this).is(':checked')) {
            $('#password').attr('readonly', false);
        } else {
            $('#password').val('').removeClass('is-invalid').attr('readonly', true);
        }
    });
    
    $('#sub_agent_name').on('keyup blur input', function (e) {
        var inputValue = $(this).val();
        var capitalizedValue = capitalizeString(inputValue);
        $(this).val(capitalizedValue);

        $("#formSubAgent").removeClass('was-validated');
        var value = $(this).val();

        if(value == ''){
            $(this).addClass("is-invalid");
        }else{
            $(this).removeClass ("is-invalid");
        }
    });

    $('#sub_agent_mobile_number, #sub_agent_whatsapp_number').on('keyup blur', function (e) {

        $("#formSubAgent").removeClass('was-validated');

        var value = $(this).val();

        if (e.type === 'keyup') {
            var numericValue = parseFloat(value);

            if (isNaN(numericValue)) {
                $('#sub_agent_whatsapp_number').val('').removeClass("is-invalid");
            } else {
                if (value.length === 10) {
                    $('#sub_agent_whatsapp_number').removeClass("is-invalid");
                }else{
                    $('#sub_agent_whatsapp_number').addClass("is-invalid");
                }
                $('#sub_agent_whatsapp_number').val(numericValue);
            }
        }

        if (value.length !== '' && value.length !== 0) {
            if (value.length === 10) {
                if(e.target.id === 'sub_agent_whatsapp_number'){
                    $('#sub_agent_whatsapp_number').removeClass("is-invalid");
                }else{
                    if (value.length !== ''){
                        $('#sub_agent_mobile_number').removeClass("is-invalid");
                    }
                }
            } else {
                $(this).addClass("is-invalid").removeClass("is-valid");
            }
        } else {               
            $(this).removeClass("is-invalid");
        }
    });

    $('#sub_agent_mobile_number , #sub_agent_whatsapp_number').on('change',function(e) {
        var mobile = $(this).val();

        if (mobile.length > 10) {
            e.preventDefault();
        }

        if(mobile.length != ''){
            if (e.target.value.length === 10) {
                $(this).removeClass("is-invalid");
    
            }else{
                $(this).addClass("is-invalid").removeClass("is-valid");

                var errorMessage = (e.target.id === 'sub_agent_mobile_number') ? "Mobile number length must be 10 digits" : "Whatsapp number length must be 10 digits";
                toastr['error'](errorMessage);
            }
        }else{
            $(this).removeClass("is-invalid");
        }
    });

    $("#sub_agent_mobile_number , #sub_agent_whatsapp_number").on('paste', function (evt) {
        var input = $(this);

        setTimeout(function () {
            var inputValues = input.val();

            var sanitizedValue = inputValues.replace(/ /g, "");
            input.val(sanitizedValue);

            if (!/[0-9]/.test(sanitizedValue)) {
                evt.preventDefault();
            }
        }, 0);
    });

    var emailErrorShown = false;
    $("#sub_agent_email").bind("keyup blur", function() {
        var email = $(this).val();

        if (email.trim() === "") {
            $(this).prop('required', false).removeClass("is-invalid");
            emailErrorShown = false;
        } else {
            $(this).prop('required', true);

            if (validateEmail(email)) {
                $(this).removeClass("is-invalid");
                emailErrorShown = false;
            } else {
                if (!emailErrorShown) {
                    $(this).addClass("is-invalid");
                    emailErrorShown = true;
                }
            }
        }
    });

    $('#sub_agent_email').on('change',function(e) {
        var email = $(this).val();

        if(email.length != ''){
            if (!validateEmail(email)) {
                $(this).addClass("is-invalid").removeClass("is-valid");
                toastr['error']("Please enter a valid email address");
            }
        }else{
            $(this).removeClass("is-invalid");
        }
    });

    $("#sub_agency_level_id, #sub_agent_agency_level_id").select2({
        ajax: {
            url: ajaxSearchAgencyLevel,
            dataType: 'json',
            delay: 0,
            data: function(params) {
                return {
                    search_value: params.term, // search term
                    page: params.page
                };
            },
            processResults: function(data, params) {
                params.page = params.page || 1;

                return {
                    results: data.results,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: false
        },
        placeholder: 'Search for agency level',
    });

    $("#city_id").select2({
        ajax: {
            url: ajaxSearchCity,
            dataType: 'json',
            delay: 0,
            data: function(params) {
                return {
                    search_value: params.term, // search term
                    page: params.page
                };
            },
            processResults: function(data, params) {
                params.page = params.page || 1;

                return {
                    results: data.results,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: false
        },
        placeholder: 'Search for city',
    });

    resetSubAgentInputForm();
    
    $("input:required, select:required").on("keyup change", function(e) {
        var fieldValue = $(this).val();
        
        if (!fieldValue || fieldValue === '' || fieldValue === null) {
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else {
            $(this).addClass("is-valid").removeClass("is-invalid");
        }
    });
});

function getLoginType() {
    var value = $("input[type=radio][name=agent_login_type]:checked").val();
    
    if (value == "Yes") {
        if(is_username == 1){
            $('#password').attr('readonly', true);
        }else{
            $('#password').attr('readonly', false);
        }
        $('#credDiv').show();
    } else {
        $('#credDiv').hide();
    }

    return value;
}

function validateEmail(email) {
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return regex.test(email)
}

function resetSubAgentInputForm() {
    is_username = 0;
    
    getLoginType();
    
    $('#passwordResetLable').hide();
    
    $('#formSubAgent').trigger("reset").removeClass('was-validated');
    $("#city_id").empty().trigger("change");
    $("#sub_agency_level_id").empty().trigger("change");
    $('#sub_agent_id').val('');
    
    setTimeout(function() {
        $("#username, #password, #sub_agent_name, #sub_agent_mobile_number, #sub_agent_whatsapp_number, #sub_agent_email, #city_id").removeClass('is-invalid , is-valid');
    }, 500);
}
