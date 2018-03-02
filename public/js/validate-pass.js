$(document).ready(function () {


    /*Verificar Contraseña Actual*/

    $("#4").html("<input id=\"pass_actual2\" class=\"form-control border-input\" type=\"password\">");

    $("#oci").hide();

    $("#pass_actual2").focusout(function () {
        if ($("#pass-actual2").val() === $("#pass_actual").val()) {
            $("#5").html("<br><span style='color: #e92230;'>Ingrese nuevamente la contraseña actual correctamente...</span><br>");
        }
        else {
            if ($("#pass-actual2").val() !== $("#pass_actual").val()) {
                $("#renew_pass").show();
                $("#5").html("<br><span style='color: #e92230;'>Contraseña valida!!!...</span><br>");
            }
        }
    });


    /*Verificar Nuevas Contraseñas*/
    $("#renew_pass").hide();

    $("#pass-confirm").focusout(function () {
        if ($("#pass-confirm").val().length === 0) {
            $("#2").html("<br><span style='color: #e92230;'>Ingrese una nueva contraseña...</span><br>");
            $("#3").html("<button type=\"submit\" class=\"btn btn-primary\" disabled>Confirmar</button>");
        }
    });

    $("#pass").focusout(function () {
        if ($("#pass").val().length === 0) {
            $("#2").html("<br><span style='color: #e92230;'>Ingrese una nueva contraseña...</span><br>");
            $("#3").html("<button type=\"submit\" class=\"btn btn-primary\" disabled>Confirmar</button>");
        }
    });

    /*$("#pass-confirm").focusout(function () {
        if ($("#pass").val() != $("#pass-confirm").val()) {
            $("#2").html("<br><span style='color: #e92230;'>Las contraseñas no coinciden! Ingrese nuevamente...</span><br>");
            $("#3").html("<button type=\"submit\" class=\"btn btn-primary\" disabled>Confirmar</button>");
        }
        else {
            $("#2").html("<br><span style='color: #26dee9;'>Las contraseñas coinciden</span><br>");
            $("#3").html("<button type=\"submit\" class=\"btn btn-primary\">Confirmar</button>");
        }
    });


    $("#pass").focusout(function () {
        if ($("#pass-confirm").val().length === 0) {
            $("#2").html("<br><span style='color: #e92230;'>Ingrese una nueva contraseña...</span><br>");
            $("#3").html("<button type=\"submit\" class=\"btn btn-primary\" disabled>Confirmar</button>");
        }
    });

    $("#pass").focusout(function () {
        if ($("#pass").val() != $("#pass-confirm").val()) {
            $("#2").html("<br><span style='color: #e92230;'>Las contraseñas no coinciden! Ingrese nuevamente...</span><br>");
            $("#3").html("<button type=\"submit\" class=\"btn btn-primary\" disabled>Confirmar</button>");
        }
        else {
            $("#2").html("<br><span style='color: #26dee9;'>Las contraseñas coinciden</span><br>");
            $("#3").html("<button type=\"submit\" class=\"btn btn-primary\">Confirmar</button>");
        }
    });*/

    $("#pass").focusin(function () {
        $("#2").html("");

    });
    $("#pass-confirm").focusin(function () {
        $("#2").html("");
    });
});