// Gia Thanh Vuong - CPRG210 - Web Application Concepts - May 2016
// This script will highlight the current page link/button
$(document).ready( function () {
    var pathname = (window.location.pathname.match(/[^\/]+$/)[0]);
    $(".menu li").removeClass("current");
    $(".menu li a[href='" + pathname  + "']").parent().addClass("current");
});
