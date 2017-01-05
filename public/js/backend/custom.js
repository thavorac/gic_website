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

                console.log('elete');
                // confirm then
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    dataType: 'json',
                    data: {method: '_DELETE'},
                }).always(function (data) {
                    datatable.DataTable().draw(false);
                });
            }
        });
        return false;

    });
}