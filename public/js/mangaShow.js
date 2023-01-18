"use strict";
//vote manga
//las variables que no estan aqui esta en manga.scripts.scriptManga
$(document).ready(function () {
    $(document).on("click", 'div[id="vote"]', function (e) {
        e.preventDefault();
        var vote = $(this);
        $.ajax({
            url: routeVoteManga, //a donde se enviara los datos
            dataType: "json",
            data: {
                mangaId: mangaId,
                vote: vote.attr("data-vote"),
            },
            //si regrasa que el proceso fue correctamente hecho
            //response contiene la respuesta si se realilo la actividad bien o no
            success: function (data) {
                if (data.status) {
                    toastr.success("Se ha votado correctamente.", "Manga", {
                        timeOut: 3000, //el tiempo que dura el mensaje
                    });
                } else {
                    if (data.errors) {
                        toastr.error("Error en votar", "Error.", {
                            timeOut: 3000, //el tiempo que dura el mensaje
                        });
                    } else {
                        toastr.error(
                            "Debe de inicar sesion para votar",
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

    //cambiar si el usuario sigue un manga o no y que tipo de siguiente es follow,wish , ect
    $(document).on("click", 'div[id="itemPending"]', function (e) {
        e.preventDefault();
        //enviar datos por ajax
        var itemBar = $(this).attr("data-status");
        $.ajax({
            url: routeChangeItemPending, //a donde se enviara los datos
            dataType: "json",
            data: {
                mangaId: mangaId,
                itemBar: itemBar,
            },
            //si regrasa que el proceso fue correctamente hecho
            //response contiene la respuesta si se realilo la actividad bien o no
            success: function (data) {
                if (data.status) {
                    if (data.itemBar) {
                        $(".element-header-bar-element").removeClass("active");
                        $("." + data.itemBar).addClass("active");
                        toastr.success(
                            "Se ha marcado correctamente.",
                            "Manga",
                            {
                                timeOut: 3000, //el tiempo que dura el mensaje
                            }
                        );
                    } else {
                        $(".element-header-bar-element").removeClass("active");
                        toastr.success(
                            "Se ha desmarcado correctamente.",
                            "Manga",
                            {
                                timeOut: 3000, //el tiempo que dura el mensaje
                            }
                        );
                    }
                } else {
                    if (data.errors) {
                        toastr.error("Error en marcar manga", "Error.", {
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

    $("#episodes").accordion({
        collapsible: true,
    });
    $("#listEpisodes").accordion({
        collapsible: true,
    });
});



function loadDisqus() {
    if (!is_disqus_loaded) {
        is_disqus_loaded = true;
        var d = document,
            s = d.createElement("script");
        s.src = "//" + disqus_shortname + ".disqus.com/embed.js";
        s.setAttribute("data-timestamp", +new Date());
        (d.head || d.body).appendChild(s);
    }
}
