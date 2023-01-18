"use strict";

$(document).ready(function () {
    var search = "";
    var form = "";
    var order = "";
    var orderList = "";
    var aplicarFiltros = "";

    $(document).on("click", ".pagination a", function (e) {
        e.preventDefault();
        getDatos();
        var page = $(this).attr("href").split("page=")[1];
        fetchData(page);
    });

    $("#form-filters").submit(function (e) {
        e.preventDefault();
        aplicarFiltros = "si";
        getDatos();
        fetchFiltros();
        $(".collapse").removeClass("show");
        $("body, html").animate(
            {
                scrollTop: "0px",
            },
            300
        );

        // $("#form-filters").submit();
    });
    $("#search_submit").click(function () {
        getDatos();
        fetchFiltros();
    });
    $(document).keypress(function (e) {
        if (e.which === 13) {
            getDatos();
            fetchFiltros();
        }
    });
    function fetchData(page) {
        $.ajax({
            url: routeBuscadorListGroup + "?page=" + page,
            type: "GET",
            data: {
                search: search,
                form: form,
                order: order,
                orderList: orderList,
                aplicarFiltros: aplicarFiltros,
            },

            success: function (data) {
                $("#list").html(data);
            },
        });
    }
    function fetchFiltros() {
        $.ajax({
            url: routeBuscadorListGroup,
            type: "GET",
            data: {
                search: search,
                form: form,
                order: order,
                orderList: orderList,
                aplicarFiltros: aplicarFiltros,
            },

            success: function (data) {
                $("#list").html(data);
            },
        });
    }
    function getDatos() {
        search = $("#title_item").val();
        form = $("#form-filters").serialize();
        order = $("#order option:selected").val();
        orderList = $("#orderList option:selected").val();
    }
});

function checkStatus() {
    if ($("#type").val() !== "" && $("#type").val() !== "one_shot") {
        $("#status_filter").show();
        $("#translation_status_filter").show();
        $("#status_filter_line").show();
        $("#translation_status_filter_line").show();
    } else {
        $("#status").val("");
        $("#status_filter").hide();
        $("#status_filter").val("");
        $("#translation_status_filter").hide();
        $("#status_filter_line").hide();
        $("#translation_status_filter_line").hide();
    }
}
