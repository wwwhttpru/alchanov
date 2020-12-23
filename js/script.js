$(document).ready(
    function () {
        $("#form-auth").submit(
            function (e) {
                e.preventDefault();

                let login = $.trim($("#login").val());
                let password = $.trim($("#password").val());
                console.log('login, password пробелы');
                if (login !== '' && password !== '') {
                    $(this).unbind().submit();
                }
            }
        );
    },
);