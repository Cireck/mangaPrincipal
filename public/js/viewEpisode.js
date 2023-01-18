"use strict";
var element = "";
var key = "";
$(document).ready(function () {
    //funcion para hacer las imagenes en ancho
    $("#fullWidthBtn").on("click", function (e) {
        localStorage.setItem("viewer-full-width", "full_width");
        if ($("#main-container").hasClass("container")) {
            element = $("#main-container");
            element
                .removeClass("container")
                .addClass("container-fluid p-0 m-0"); //el estilo ccs hace que se anche las imaganes
        }
        $("#fullWidthBtn").hide();
        $("#adaptedBtn").show();
    });
    //funcion para hacer las imagenes en ajustado
    $("#adaptedBtn").on("click", function (e) {
        localStorage.setItem("viewer-full-width", "adapted");
        if ($("#main-container").hasClass("container-fluid")) {
            element = $("#main-container");
            element
                .removeClass("container-fluid p-0 m-0")
                .addClass("container");
        }
        $("#adaptedBtn").hide();
        $("#fullWidthBtn").show();
    });
    //funcion para la pantalla completa
    $("#fullScreenBtn").on("click", function () {
        (document.fullScreenElement && null !== document.fullScreenElement) ||
        (!document.mozFullScreen && !document.webkitIsFullScreen)
            ? document.documentElement.requestFullScreen
                ? document.documentElement.requestFullScreen()
                : document.documentElement.mozRequestFullScreen
                ? document.documentElement.mozRequestFullScreen()
                : document.documentElement.webkitRequestFullScreen &&
                  document.documentElement.webkitRequestFullScreen(
                      Element.ALLOW_KEYBOARD_INPUT
                  )
            : document.cancelFullScreen
            ? document.cancelFullScreen()
            : document.mozCancelFullScreen
            ? document.mozCancelFullScreen()
            : document.webkitCancelFullScreen &&
              document.webkitCancelFullScreen();
    });

    var episodePrevious = $("#episodeFollowing").find("a");
    var url = episodePrevious.attr("href");
    console.log(url);
});

$(document).on("keydown", function (event) {
    key = String.fromCharCode(event.keyCode);
    switch (key) {
        case "A":
            goPrevPage();
            return false;
        case "D":
            goNextPage();
            return false;
        default:
            return true;
    }
});

function goPrevPage() {
    var url = $("#previousPage").attr("href");
    if (url) {
        $(location).attr("href", url);
    } else {
        goPrevEpisode();
    }
}

function goNextPage() {
    var url = $("#nextPage").attr("href");
    if (url) {
        $(location).attr("href", url);
    } else {
        goNextEpisode();
    }
}

function goPrevEpisode() {
    var episodePrevious = $("#episodePrevious").find("a");
    var url = episodePrevious.attr("href");
    $(location).attr("href", url);
}
function goNextEpisode() {
    var episodeFollowing = $("#episodeFollowing").find("a");
    var url = episodeFollowing.attr("href");
    $(location).attr("href", url);
}

/*
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
*/
