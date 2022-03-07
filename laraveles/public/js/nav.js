$(function () {
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    path = decodeURIComponent(path);

    $("#navMenu a").each(function () {
        var href = $(this).attr("href");
        if (path.substring(0, href.length) === href) {
             $(this).closest("li").addClass("menu__item--current"); 
        }
    });
});
