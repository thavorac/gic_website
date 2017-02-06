function enableDeleteRecord(datatable){
    datatable.on('click', '.btn-delete[data-remote]', function (e) {
        var url = $(this).data('remote');
        e.preventDefault();
        swal({
            title: "Warning",
            text: "Are you sure you want to delete this item?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: true
        }, function(confirmed) {
            if (confirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // confirm then
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    dataType: 'json',
                    data: {method: '_DELETE'},
                    success: function (response) {
                        if (response.success) {
                            notify("success","Info", response.message);
                        } else {
                            notify("error","Error", response.message);
                        }
                    }
                }).always(function (data) {
                    datatable.DataTable().draw(false);
                });
            }
        });
        return false;

    });
}
function notify(type, message, title){
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr[type](message, title);
}