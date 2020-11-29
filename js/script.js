$(document).ready(
    function () {
        $("#form-login").submit(
            function (e) {
                e.preventDefault();

                var login = $.trim($("#login").val());
                var password = $.trim($("#password").val());
                console.log(login, password);
                if (login != '' && password != '') {
                    $(this).unbind().submit();

                }
            }
        );
    },
    function () {
        $("#form-signin").submit(
            function (e) {
                e.preventDefault();

                var name = $.trim($("#name").val());
                var login = $.trim($("#login").val());
                var password = $.trim($("#password").val());

                if (login != '' || password != '' || name != '') {
                    $(this).unbind().submit();
                }
            }
        );
    },
);