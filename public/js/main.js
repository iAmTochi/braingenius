//--------------------------------------------------------------------
//------------- My Sweet Alert functions-----------------------------
//----------------------------------------------------------------

// Deleting Users Alert--using for all users
$(".deleteBtn").click(function () {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'mr-2 btn btn-danger'
        },
        buttonsStyling: false,
    })

    swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            $('.deleteUser').submit();
            swalWithBootstrapButtons.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
});


function notify(exclaim, msg, type) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
        },
        buttonsStyling: false,
    })

    swalWithBootstrapButtons.fire({
        title: exclaim,
        text: msg,
        type: type,
        confirmButtonText: 'Okay',
        reverseButtons: true
    });
}



// function notify(exclaim, msg, type) {
//     Swal.fire(exclaim, msg, type);
// }
