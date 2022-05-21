$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  });
function deleteRecord(uri){
    //var result = confirm("Want to delete?");
    Swal.fire({
            title: 'Are you sure you want to Delete?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            }).then((result) => {
            if (result.value)
            {
                $.ajax({
                    url:   uri ,
                    type: 'DELETE',

                    success: function(result) {
                       if(result.status){
                             location.reload();
                        }

                    }
                });
            }
        });
}
function updateRecord(uri){
    Swal.fire({
            title: 'Are you sure you want to Update?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Update',
            }).then((result) => {
            if (result.value)
            {
                $.ajax({
                    url:   uri ,
                    type: 'GET',
                    success: function(result) {
                       if(result.status){
                             location.reload();
                        }

                    }
                });
            }
        });
}

function deleteMedium(uri){
    //var result = confirm("Want to delete?");
    Swal.fire({
            title: 'Are you sure you want to Delete?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            }).then((result) => {
            if (result.value)
            {
                $.ajax({
                    url:   uri ,
                    type: 'DELETE',

                    success: function(result) {
                       if(result.status){
                             location.reload();
                        }

                    }
                });
            }
        });
}
function deleteStyle(uri){
    //var result = confirm("Want to delete?");
    Swal.fire({
            title: 'Are you sure you want to Delete?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            }).then((result) => {
            if (result.value)
            {
                $.ajax({
                    url:   uri ,
                    type: 'DELETE',

                    success: function(result) {
                       if(result.status){
                             location.reload();
                        }

                    }
                });
            }
        });
}
function deleteArtist(uri){
    //var result = confirm("Want to delete?");
    Swal.fire({
            title: 'Are you sure you want to Delete?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            }).then((result) => {
            if (result.value)
            {
                $.ajax({
                    url:   uri ,
                    type: 'DELETE',

                    success: function(result) {
                       if(result.status){
                             location.reload();
                        }

                    }
                });
            }
        });
}
function deleteCustomer(uri){
    //var result = confirm("Want to delete?");
    Swal.fire({
            title: 'Are you sure you want to Delete?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            }).then((result) => {
            if (result.value)
            {
                $.ajax({
                    url:   uri ,
                    type: 'DELETE',

                    success: function(result) {
                       if(result.status){
                             location.reload();
                        }

                    }
                });
            }
        });
}
function deleteArtcatalog(uri){
    //var result = confirm("Want to delete?");
    Swal.fire({
            title: 'Are you sure you want to Delete?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            }).then((result) => {
            if (result.value)
            {
                $.ajax({
                    url:   uri ,
                    type: 'DELETE',

                    success: function(result) {
                       if(result.status){
                             location.reload();
                        }

                    }
                });
            }
        });
}
