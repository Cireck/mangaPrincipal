"use strict";

$(document).ready(function () {
    $("#follow-btn").on("click", function (e) {
        e.preventDefault();
        //enviar datos por ajax
        $.ajax({
            url: routefollowUserGroup, //a donde se enviara los datos
            dataType: "json",
            data: {
                groupId: groupId,
            },
            //si regrasa que el proceso fue correctamente hecho
            //response contiene la respuesta si se realilo la actividad bien o no
            success: function (data) {
                if (data.status) {
                    if (data.follow) {
                        $(".follow").addClass("active");
                        toastr.success(
                            "Se ha marcado correctamente.",
                            "Grupo",
                            {
                                timeOut: 3000, //el tiempo que dura el mensaje
                            }
                        );
                    } else {
                        $(".element-header-bar-element").removeClass("active");
                        toastr.success(
                            "Se ha desmarcado correctamente.",
                            "Grupo",
                            {
                                timeOut: 3000, //el tiempo que dura el mensaje
                            }
                        );
                    }
                } else {
                    if (data.errors) {
                        toastr.error("Error en marcar grupo", "Error.", {
                            timeOut: 3000, //el tiempo que dura el mensaje
                        });
                    } else {
                        toastr.error(
                            "Debe de inicar sesion para marcar",
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

    $(document).on("click", 'a[id="users"]', function (event) {
        event.preventDefault();
        var profileView = $(this).attr("data-view");

        if (profileView == 2) {
            toastr.warning("El usuario es privado", "Usuario.", {
                timeOut: 3000, //el tiempo que dura el mensaje
            });
        } else {
            $(location).attr("href", $(this).attr("href"));
        }
    });

    var type = "";
    var status = "";
    $(".filter-select").change(function () {
        getDatos();
        $.ajax({
            url: routeListProyects,
            type: "GET",
            data: {
                groupId: groupId,
                type: type,
                status: status,
            },
        }).done(function (data) {
            $("#proyects").html(data);
        });
    });

    $(document).on("click", ".pagination a", function (event) {
        event.preventDefault();
        getDatos();
        var page = $(this).attr("href").split("page=")[1];
        fetchData(page);
    });

    function fetchData(page) {
        $.ajax({
            url: routeListProyects + "?page=" + page,
            type: "GET",
            data: {
                groupId: groupId,
                type: type,
                status: status,
            },

            success: function (data) {
                $("#proyects").html(data);
            },
        });
    }
    function getDatos() {
        type = $("#type option:selected").val();
        status = $("#status option:selected").val();
    }
});
