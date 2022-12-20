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
        const url = formRegister.data("url");
        params.url = url;
        handleRegister(params);
        return false;
    },
});
const handleRegister = (params) => {
    let _token = $('meta[name="csrf-token"]').attr("content");
    params._token = _token;
    $.ajax({
        type: "post",
        url: params.url,
        data: params,
        dataType: "json",
        beforeSend: function () {},
        success: function (response) {
            let status = response.status;
            let msg = response.msg;
            if (status == 200) {
                swal("Thông báo", "Đăng ký thành công", "success");
            } else {
                swal(
                    {
                        title: "Thông báo",
                        text: "Vui lòng kiểm tra lại thông tin",
                        icon: "warning",
                    },
                    function () {
                        for (let key in msg) {
                            const msg_item = msg[key];
                            parent = jQuery(`input[name='${key}']`).parent();
                            parent.append(
                                `<label id='${key}-error' class="error" for='${key}'>${msg_item}</label>`
                            );
                        }
                    }
                );
            }

            console.log(response);
        },
    });
};
