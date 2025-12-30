$("#showPassword").click(function(){
    if($(this).hasClass("ph-eye")){
        $(this).removeClass("ph-eye");
        $(this).addClass("ph-eye-slash");
        $("#user_password").attr("type", "password");
    } else {
        $(this).removeClass("ph-eye-slash");
        $(this).addClass("ph-eye");
        $("#user_password").attr("type", "text");
    }
});

$("#login-form").submit(function(e) {
    e.preventDefault();

    // if (!emailPattern.test($("#user_username").val())) {
    //     swalInit.fire({
    //         position: 'top-end',
    //         toast: true,
    //         text: 'Please enter a valid @gsfe.tupcavite.edu.ph email address!',
    //         icon: 'error',
    //         allowOutsideClick: false,
    //         showConfirmButton: false,
    //         timer: 3000
    //     });
    // }
    var formData = {
        user_email: $("#user_username").val(),
        user_password: $("#user_password").val()
    };

    swalInit.fire({
        text: 'Please wait...',
        allowOutsideClick: false,
        showConfirmButton: false,
    });

    $.ajax({
        url: '/login',
        method: 'POST',
        data: formData,
        success: function(data) {
            data = JSON.parse(data);
            if (data.success === 'false') {
                swalInit.close();
                swalInit.fire({
                    title: 'Failed!',
                    text: data.message,
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2000
                });
            } else {
                swalInit.close();
                swalInit.fire({
                    title: 'Success',
                    text: data.message,
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2000
                }).then(() => {
                    window.location = `/${data.user_role}/home`;
                });
            }
        },
        error: function(error) {
            swalInit.close();
            swalInit.fire({
                title: 'Error',
                text: 'There is error occurred. Please contact the administrator.',
                icon: 'error'
            });
            console.log("Error: ", error);
        }
    });

});