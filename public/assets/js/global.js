function logout(){
    swal.fire({
        text: "Yakin ingin keluar?",
        icon: "warning",
        buttonsStyling: false,
        confirmButtonText: "Ya!",
        showCancelButton: true,
        cancelButtonText: "Tidak!",
        reverseButtons: true,
        customClass: {
            confirmButton: "btn font-weight-bold btn-light-danger",
            cancelButton: "btn font-weight-bold btn-light-primary"
        }
    }).then(function(confirm) {
        if (confirm.value) {
            $.ajax({
                type: "POST",
                url: "/logout",
                data: {
                    "_token": $('meta[name="_token"]').attr('content')
                },
                success: function (response) {
                    location.replace('/autentikasi')
                }
            });
        } else {
            console.log("conasdad")
        }
    })
}
