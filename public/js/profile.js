"use strict";

$(document).ready(function () {
    // REGISTRAR NUEVO group
    $("#createGroupForm").on("submit", function (e) {
        e.preventDefault(); //antes de enviar
        //se asignan los valores
        $("#btnCreate").prop("disabled", true); //para desatribal el boton hasta que se llene el form
        $(".error").removeClass("alert-danger").hide(); //para quitar los errores una vez que se haya realizado la operacion correctamente
        var formData = new FormData(this);
        //enviar datos por ajax
        $.ajax({
            url: routeCreateGroup, //a donde se enviara los datos
            type: "POST", //el tipo de envio
            dataType: "json",
            data: formData,
            contentType: false,
            processData: false,
            //si regrasa que el proceso fue correctamente hecho
            //response contiene la respuesta si se realilo la actividad bien o no
            success: function (data) {
                $("#btnCreate").prop("disabled", false); //se habilita el boton
                if (data.status) {
                    //.reset limipia el formulario
                    $("#createGroupForm")[0].reset();
                    //enviar el mensaje
                    //toastr.metodo('el contenido del mensaje','titulo del mensaje')
                    toastr.success(
                        "Se creo correctamente el grupo espere la verificacion.",
                        "Nuevo Grupo",
                        {
                            timeOut: 3000, //el tiempo que dura el mensaje
                        }
                    );
                } else {
                    if (data.errors.name) {
                        $("#nameError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.name);
                    }
                    if (data.errors.email) {
                        $("#emailError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.email);
                    }
                    if (!data.errors.name && !data.errors.email) {
                        toastr.error("Error en crear el grupo", "Error.", {
                            timeOut: 3000, //el tiempo que dura el mensaje
                        });
                    }
                }
            },
        });
    });

    // editar profile
    $("#editProfileForm").on("submit", function (e) {
        e.preventDefault(); //antes de enviar
        //se asignan los valores
        $("#btnEditProfile").prop("disabled", true); //para desatribal el boton hasta que se llene el form
        $(".error").removeClass("alert-danger").hide(); //para quitar los errores una vez que se haya realizado la operacion correctamente
        var formData = new FormData(this);
        //enviar datos por ajax
        $.ajax({
            url: routeUpdateProfile, //a donde se enviara los datos
            type: "POST", //el tipo de envio
            dataType: "json",
            data: formData,
            contentType: false,
            processData: false,
            //si regrasa que el proceso fue correctamente hecho
            //response contiene la respuesta si se realilo la actividad bien o no
            success: function (data) {
                $("#btnEditProfile").prop("disabled", false); //se habilita el boton
                if (data.status) {
                    //enviar el mensaje
                    //toastr.metodo('el contenido del mensaje','titulo del mensaje')
                    //window.location.reload();
                    //location.reload();
                    toastr.success(
                        "Se ha modificado el perfil correctamente.",
                        "Edicion De Perfil",
                        {
                            timeOut: 10000, //el tiempo que dura el mensaje
                        }
                    );
                    $("#profileInfo").load(location.href + " #profileInfo"); //recargar un elemento de la pagina sin tener que recargar toda la pagina
                } else {
                    if (data.errors.username) {
                        $("#usernameError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.username);
                    }
                    if (data.errors.avatar) {
                        $("#avatarError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.avatar);
                    }
                    if (data.errors.countryId) {
                        $("#countryIdError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.countryId);
                    }
                    if (data.errors.gender) {
                        $("#genderError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.gender);
                    }
                    if (data.errors.birthday) {
                        $("#birthdayError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.birthday);
                    }
                    if (data.errors.facebook) {
                        $("#facebookError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.facebook);
                    }
                    if (data.errors.twitter) {
                        $("#twitterError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.twitter);
                    }
                    if (data.errors.web) {
                        $("#webError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.web);
                    }
                    if (data.errors.profileView) {
                        $("#profileViewError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.profileView);
                    }
                    if (data.errors.modeView) {
                        $("#modeViewError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.modeView);
                    }

                    if (
                        !data.errors.username &&
                        !data.errors.avatar &&
                        !data.errors.countryId &&
                        !data.errors.gender &&
                        !data.errors.birthday &&
                        !data.errors.facebook &&
                        !data.errors.twitter &&
                        !data.errors.web &&
                        !data.errors.profileView &&
                        !data.errors.modeView
                    ) {
                        toastr.error("Error en modificar el perfil", "Error.", {
                            timeOut: 3000, //el tiempo que dura el mensaje
                        });
                    }
                }
            },
        });
    });

    // editar profile pass
    $("#editProfilePassForm").on("submit", function (e) {
        e.preventDefault(); //antes de enviar
        //se asignan los valores
        $("#btnEditProfilePass").prop("disabled", true); //para desatribal el boton hasta que se llene el form
        $(".error").removeClass("alert-danger").hide(); //para quitar los errores una vez que se haya realizado la operacion correctamente
        var formData = new FormData(this);
        //enviar datos por ajax
        $.ajax({
            url: routeUpdatePassProfile, //a donde se enviara los datos
            type: "POST", //el tipo de envio
            dataType: "json",
            data: formData,
            contentType: false,
            processData: false,
            //si regrasa que el proceso fue correctamente hecho
            //response contiene la respuesta si se realilo la actividad bien o no
            success: function (data) {
                $("#btnEditProfilePass").prop("disabled", false); //se habilita el boton
                if (data.status) {
                    //enviar el mensaje
                    //toastr.metodo('el contenido del mensaje','titulo del mensaje')
                    //window.location.reload();
                    //location.reload();
                    toastr.success(
                        "Se ha modificado la contraseña correctamente.",
                        "Edicion De Contraseña",
                        {
                            timeOut: 10000, //el tiempo que dura el mensaje
                        }
                    );
                } else {
                    if (data.errors.password) {
                        $("#passwordError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.password);
                    }
                    if (data.errors.passwordConfirmation) {
                        $("#passwordConfirmationError")
                            .addClass("text-danger")
                            .show()
                            .text(data.errors.passwordConfirmation);
                    }

                    if (
                        !data.errors.password &&
                        !data.errors.passwordConfirmation
                    ) {
                        toastr.error(
                            "Error en modificar la contraseña " + data.errors,
                            "Error.",
                            {
                                timeOut: 3000, //el tiempo que dura el mensaje
                            }
                        );
                    }
                }
            },
        });
    });
});
