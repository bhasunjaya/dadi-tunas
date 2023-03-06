import "./bootstrap";
import "../scss/bootstrap.scss";
import "../scss/icons.scss";
import "../scss/app.scss";

import "metismenu";

$(() => {
    console.log("de");

    $("#side-menu").metisMenu();

    $("#vertical-menu-btn").on("click", function (event) {
        event.preventDefault();
        $("body").toggleClass("sidebar-enable");
        if ($(window).width() >= 992) {
            $("body").toggleClass("vertical-collpsed");
        } else {
            $("body").removeClass("vertical-collpsed");
        }
    });

    $("#sidebar-menu a").each(function () {
        var pageUrl = window.location.href.split(/[?#]/)[0];
        if (this.href == pageUrl) {
            $(this).addClass("active");
            $(this).parent().addClass("mm-active"); // add active to li of the current link
            $(this).parent().parent().addClass("mm-show");
            $(this).parent().parent().prev().addClass("mm-active"); // add active class to an anchor
            $(this).parent().parent().parent().addClass("mm-active");
            $(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link
            $(this)
                .parent()
                .parent()
                .parent()
                .parent()
                .parent()
                .addClass("mm-active");
        }
    });
    // focus active menu in left sidebar

    if (
        $("#sidebar-menu").length > 0 &&
        $("#sidebar-menu .mm-active .active").length > 0
    ) {
        var activeMenu = $("#sidebar-menu .mm-active .active").offset().top;
        if (activeMenu > 300) {
            activeMenu = activeMenu - 300;
            $(".vertical-menu .simplebar-content-wrapper").animate(
                { scrollTop: activeMenu },
                "slow"
            );
        }
    }
    $("#password-addon").on("click", function () {
        if ($(this).siblings("input").length > 0) {
            $(this).siblings("input").attr("type") == "password"
                ? $(this).siblings("input").attr("type", "input")
                : $(this).siblings("input").attr("type", "password");
        }
    });

    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    var popoverTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="popover"]')
    );
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });

    var offcanvasElementList = [].slice.call(
        document.querySelectorAll(".offcanvas")
    );
    var offcanvasList = offcanvasElementList.map(function (offcanvasEl) {
        return new bootstrap.Offcanvas(offcanvasEl);
    });

});
