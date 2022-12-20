const formRegister = jQuery("#formRegister");
formRegister.validate({
    // Specify validation rules
    rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        name: "required",
        username: "required",
        password: "required",
        email: {
            email: true,
            required: true,
        },
    },
    // Specify validation error messages
    messages: {
        name: "Vui lòng nhập Họ & tên",
        username: "Vui lòng nhập tên đăng nhập",
        password: "Vui lòng nhập mật khẩu",
        email: {
            email: "Email không hợp lệ.",
            required: "Vui lòng nhập email",
        },
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function (form) {
        const params = getFormData(formRegister);
        const url = formRegister.data('url');
        params.url = url;
        handleRegister(params);
        return false;
    },
});
const handleRegister = (params) => {
    let _token   = $('meta[name="csrf-token"]').attr('content');
    params._token = _token;
    $.ajax({
        type: "post",
        url: params.url,
        data: params,
        dataType: "json",
        beforeSend: function() {
        },
        success: function (response) {
            swal("Thông báo","Đăng ký thành công","success");
            console.log(response);
        }
    });
}