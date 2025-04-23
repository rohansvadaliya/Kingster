function format_amount(amount){
    amount = (amount).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
    return amount;
}

function capitalizeString(input) {
//     return input.toLowerCase().replace(/\b\w/g, function(word) {
//         return word.toUpperCase();
//     });
// }

    return input.replace(/\b\w+/g, function(word) {
        // Check if the word is already in all uppercase
        if (word === word.toUpperCase()) {
            return word;
        }
        return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
    });
}

function formatPercentageInput($element){
    var numericValue = $element.val();
    var numericValue = $element.val().replace(/,/g, '');
    // var numericValue = inputValue.replace(/[^\d.]/g, '');
    // numericValue = numericValue.replace(/(\..*)\./g, '$1');
    // numericValue = numericValue.replace(/^0+(?!\.)/, '');

    // var parts = numericValue.split('.');
    // if (parts.length > 1) {
    //     parts[0] = parts[0].slice(0, 3);
    //     parts[1] = parts[1].substring(0, 2);
    // } else {
    //     parts[0] = parts[0].slice(0, 3);
    // }
    
    // numericValue = parts.join('.');    

    if (parseFloat(numericValue) > 100) {
        numericValue = '100.00';
        $element.val(numericValue);
    }

    // clearTimeout($element.data('timeout'));

    // $element.data('timeout', setTimeout(function() {
        // var currentAmount = $element.val();
        // if (currentAmount.length > 0 && !currentAmount.includes('.')) {
        //     $element.val(currentAmount + '.00');
        // } else if (currentAmount.includes('.') && currentAmount.split('.')[1].length === 0) {
        //     $element.val(currentAmount + '00');
        // } else if (currentAmount.includes('.') && currentAmount.split('.')[1].length === 1) {
        //     $element.val(currentAmount + '0');
        // }else if(currentAmount == '' || currentAmount == undefined){
        //     $element.val('0.00');
        // }
    // }, 3000));
}

function formatAmountInput($element){
    var amount = $element.val();

    var numericAmount = amount.replace(/[^0-9.]/g, '');
    numericAmount = numericAmount.replace(/\.{2,}/g, '.').replace(/(\..*)\./g, '$1');
    numericAmount = numericAmount.replace(/^0+/, '').replace(/^(\.)/, '0$1');

    var parts = numericAmount.split('.');
    parts[0] = parts[0].slice(0, 10);
    if (parts.length > 1) {
        parts[1] = parts[1].slice(0, 2);
    }

    numericAmount = parts.join('.');

    $element.val(numericAmount);

    clearTimeout($element.data('timeout'));

    $element.data('timeout', setTimeout(function() {
        var currentAmount = $element.val();
        if (currentAmount.length > 0 && !currentAmount.includes('.')) {
            $element.val(currentAmount + '.00');
        } else if (currentAmount.includes('.') && currentAmount.split('.')[1].length === 0) {
            $element.val(currentAmount + '00');
        } else if (currentAmount.includes('.') && currentAmount.split('.')[1].length === 1) {
            $element.val(currentAmount + '0');
        }else if(currentAmount == '' || currentAmount == undefined){
            $element.val('0.00');
        }
    }, 3000));
}

function formatMinusAmountInput($element){
    var amount = $element.val();

    var numericAmount = amount.replace(/[^0-9.-]|(?<=.)-/g, ''); // Allow digits, dot, and minus symbol only at the beginning
    numericAmount = numericAmount.replace(/\.{2,}/g, '.').replace(/(\..*)\./g, '$1');
    numericAmount = numericAmount.replace(/^0+/, '').replace(/^(\.)/, '0$1');

    var parts = numericAmount.split('.');
    parts[0] = parts[0].slice(0, 10);
    if (parts.length > 1) {
        parts[1] = parts[1].slice(0, 2);
    }

    numericAmount = parts.join('.');

    $element.val(numericAmount);

    clearTimeout($element.data('timeout'));

    $element.data('timeout', setTimeout(function() {
        var currentAmount = $element.val();
        if (currentAmount.length > 0 && !currentAmount.includes('.')) {
            $element.val(currentAmount + '.00');
        } else if (currentAmount.includes('.') && currentAmount.split('.')[1].length === 0) {
            $element.val(currentAmount + '00');
        } else if (currentAmount.includes('.') && currentAmount.split('.')[1].length === 1) {
            $element.val(currentAmount + '0');
        } else if (currentAmount == '' || currentAmount == undefined) {
            $element.val('0.00');
        }
    }, 3000));
}

function formatNosInput($element){
    var amount = $element.val();
    var numericAmount = amount.replace(/[^0-9]/g, '');
    
    if (numericAmount.charAt(0) === '0') {
        numericAmount = numericAmount.slice(1);
    }
    
    numericAmount = numericAmount.slice(0, 7);
    $element.val(numericAmount);
}

function generateUniqueIdentifier() {
    // const timestamp = Date.now();
    // const randomNumber = Math.floor(Math.random() * (99999999 - 10000000 + 1)) + 10000000;
    // const uniqueIdentifier = timestamp + randomNumber.toString();
    // return uniqueIdentifier.slice(0, 17);

    const today = new Date();
    let yy = today.getFullYear().toString().substr(-2);
    let mm = today.getMonth() + 1;
    let dd = today.getDate();

    if (dd < 10) dd = '0' + dd;
    if (mm < 10) mm = '0' + mm;
    const documentNumber = dd + mm + yy + Math.floor(Math.random() * 89999 + 10000);
    
    return documentNumber;
}

// function isNumber(evt) {
//     var ch = String.fromCharCode(evt.which);
//     if (!/[0-9]/.test(ch)) {
//         evt.preventDefault();
//     }
// }

function isNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    
    // First check if the character is a number
    if (!/[0-9]/.test(ch)) {
        evt.preventDefault();
        return;
    }
    
    // Get the input element and its current value
    var input = evt.target;
    var currentValue = input.value + ch;
    
    console.log(currentValue);
    // Check if the resulting value consists only of zeros
    if (/^0+$/.test(currentValue)) {
        evt.preventDefault();
    }
}

function debounce(func, wait) {
    let timeout;
    return function(...args) {
        const context = this;
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(context, args), wait);
    };
}

function formatDate(date) {
    if (/^\d{2}-\d{2}-\d{4}$/.test(date)) {
        return date;
    }

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (day < 10) {
        day = '0' + day;
    }
    if (month < 10) {
        month = '0' + month;
    }

    return day + '-' + month + '-' + year;
}

function documentNumber() {
    const today = new Date();
    let yy = today.getFullYear().toString().substr(-2);
    let mm = today.getMonth() + 1;
    let dd = today.getDate();
    
    if (dd < 10) dd = '0' + dd;
    if (mm < 10) mm = '0' + mm;
    const documentNumber = dd + mm + yy + Math.floor(Math.random() * 99999999 + 100000000);

    return documentNumber;
}

function formatZeroAmountInput($element) {
    var amount = $element.val();

    var numericAmount = amount.replace(/[^0-9.]/g, '');
    numericAmount = numericAmount.replace(/\.{2,}/g, '.').replace(/(\..*)\./g, '$1');
    numericAmount = numericAmount.replace(/^0+(?=\d)/, '');

    var parts = numericAmount.split('.');
    parts[0] = parts[0].slice(0, 10);
    if (parts.length > 1) {
        parts[1] = parts[1].slice(0, 2);
    }

    numericAmount = parts.join('.');
    $element.val(numericAmount);

    clearTimeout($element.data('timeout'));

    $element.data('timeout', setTimeout(function() {
        var currentAmount = $element.val();
        if (currentAmount.length > 0 && !currentAmount.includes('.')) {
            $element.val(currentAmount + '.00');
        } else if (currentAmount.includes('.') && currentAmount.split('.')[1].length === 0) {
            $element.val(currentAmount + '00');
        } else if (currentAmount.includes('.') && currentAmount.split('.')[1].length === 1) {
            $element.val(currentAmount + '0');
        } else if (currentAmount === '' || currentAmount === undefined) {
            $element.val('0.00');
        }
    }, 3000));
}

function padNumber(number) {
    if (number < 10) {
        return '0' + number;
    }
    return number;
}

function setupDatePair(startDateInput, endDateInput) {
    var datepickerConfig = {
        format: 'dd-mm-yyyy',
        autoclose: true
    };

    startDateInput.datepicker(datepickerConfig).on('changeDate', function(e) {
        var endDate = endDateInput.datepicker('getDate');
        if (e.date > endDate) {
            endDateInput.datepicker('setDate', null);
            endDateInput.val("");
        }
    });

    endDateInput.datepicker(datepickerConfig).on('changeDate', function(e) {
        var startDate = startDateInput.datepicker('getDate');
        if (e.date < startDate) {
            startDateInput.datepicker('setDate', null);
            startDateInput.val("");
        }
    });
}

function AddFollowUp(claim_intimation_id, type, id){
    $("#modalAddFollowUp").modal('show');
    $('#formAddFollowUps').trigger('reset').removeClass('was-validated');

    setTimeout(function() {
        $("#data_id").val(id);
    }, 400);

    $("#follow_up_type").val(type);
    $("#follow_up_id").val('');

    $('#followupDatatable').DataTable().clear().destroy();

    setTimeout(function() {
        $('#followupDatatable').DataTable({
            "aoColumnDefs": [{"bSortable": true,"aTargets": [0, 1, 2, 3]}],
            "order": [[2, 'desc']],
            "ordering": true,
            "processing": true,
            "serverSide": true,
            "scrollX": true,
            "scrollY": function() {return $(window).height() - 450;},
            "lengthMenu": [[10, 50, 100, 150],[10, 50, 100, 150]],
            "language": {"processing": '<button type="button" class="btn btn-dark waves-effect waves-light"><i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i> Processing...</button>'},
            "ajax": {
                "url": followUpsUrl,
                "type": "GET",
                "data": {
                    "follow_up_type": type,
                    "id": id,
                    "claim_intimation_id" : claim_intimation_id,
                }         
            },
            "aoColumns": [
                {"mData": "action","bSortable": false},
                {"mData": "tab","bSortable": false},
                {"mData": "date"},
                {"mData": "remarks"},
            ]
        });
    }, 200);
}

function saveFollowUp(){
    $.ajax({
        type: "POST",
        url: followUpSave,
        data: {
            "follow_up_type": function() { return $("#follow_up_type").val()},
            "data_id": function() { return $("#data_id").val()},
            "follow_up_id": function() { return $("#follow_up_id").val()},
            "follow_up_date": function() { return $("#follow_up_date").val()},
            "follow_up_remarks": function() { return $("#follow_up_remarks").val()},
            "current_tab": function() { return $("#current_tab").val()},
        },
        beforeSend: function(){
            showLoader();
        },
        success: function(resultData) {
            hideLoader();
            if (resultData['status'] == 1) {                
                toastr["success"](resultData['msg']);

                const pathSegments = window.location.pathname; // Get the path from the URL
                const segments = pathSegments.split('/'); // Split the path into segments
                const segment = segments.pop(); // Get the last segment
                                
                if(segment == 'due-calender'){
                    $('#my-calander').zabuto_calendar('data');
                }

                $("#datatable, #datatable8").DataTable().draw();

                var tableData = $('#followupDatatable').DataTable().draw();

                tableData.on('xhr', function() {
                    var responseData = tableData.ajax.json();
        
                    $("#data_id").val(responseData['record_id']);
                });

                $('#formAddFollowUps').trigger('reset');
                $("#follow_up_id").val('');
                $("#follow_up_type").val(resultData['data']['current_tab']);
                $("#current_tab").val(resultData['data']['current_tab']);
            } else {
                toastr['error'](resultData['msg']);
                $('#formAddFollowUps').addClass('was-validated');
            }
        }
    });
}

function deleteFollowUp(id){
    swal.fire({
        title: "Are you sure want to delete this?",
        text: "You won't be able to revert this!",
        showCancelButton: true,
        confirmButtonColor: "#526BDF",
        cancelButtonColor: "#EC6767",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel it!",
    }).then((result) => {
        if (result.isConfirmed) {
            removeFollowUp(id);
        }
    });
}

function removeFollowUp(id){  
    $.ajax({
        type: 'GET',
        url: deleteFollowUpUrl + "?id=" + id,
        success: function(resultData) {
            if (resultData['status'] == 1) {
                toastr["success"](resultData['msg']);
                $('#followupDatatable').DataTable().ajax.reload(null, false);

                const pathSegments = window.location.pathname; // Get the path from the URL
                const segments = pathSegments.split('/'); // Split the path into segments
                const segment = segments.pop(); // Get the last segment
                                
                if(segment == 'due-calender'){
                    $('#my-calander').zabuto_calendar('data');
                }

                $("#datatable, #datatable8").DataTable().draw();
            }else{
                toastr["error"](resultData['msg']);
            }
        }
    });
}

function editFollowUp(id){   
    $.ajax({
        type: 'GET',
        url: editFollowUpUrl + "?id=" + id,
        success: function(resultData) {
            if (resultData['status'] == 1) {
                $("#follow_up_id").val(resultData['data']['id']);
                $("#data_id").val(resultData['data']['data_id']);
                $("#follow_up_date").val(resultData['data']['follow_up_date']);
                $("#follow_up_remarks").val(resultData['data']['follow_up_remarks']);
                $("#follow_up_type").val(resultData['data']['tab']);

                $('#follow_up_date').datepicker('destroy');

                $('#follow_up_date').datepicker({
                    update: resultData['data']['follow_up_date'],
                    format: "dd-mm-yyyy",
                    container: "#modalAddFollowUp",
                }).on('changeDate', function() {
                    $('.datepicker').hide();
                });
            }else{
                toastr["error"](resultData['msg']);
            }
        }
    });
}

function followUpDone(id){
    swal.fire({
        title: "Are you sure want to complete this?",
        text: "You won't be able to revert this!",
        showCancelButton: true,
        confirmButtonColor: "#526BDF",
        cancelButtonColor: "#EC6767",
        confirmButtonText: "Yes, complete it!",
        cancelButtonText: "No, cancel it!",
    }).then((result) => {
        if (result.isConfirmed) {
            CompleteFollowUp(id);
        }
    });
}

function CompleteFollowUp(id){
    $.ajax({
        type: 'GET',
        url: completeFollowUpUrl + "?id=" + id,
        success: function(resultData) {
            if (resultData['status'] == 1) {
                toastr["success"](resultData['msg']);
                $('#followupDatatable').DataTable().ajax.reload(null, false);

                const pathSegments = window.location.pathname; // Get the path from the URL
                const segments = pathSegments.split('/'); // Split the path into segments
                const segment = segments.pop(); // Get the last segment
                                
                if(segment == 'due-calender'){
                    $('#my-calander').zabuto_calendar('data');
                }

                $("#datatable, #datatable8").DataTable().draw();
            }else{
                toastr["error"](resultData['msg']);
            }
        }
    });
}