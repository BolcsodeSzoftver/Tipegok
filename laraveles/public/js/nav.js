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

    if (window.matchMedia("(max-width: 1200px)").matches) {
        $('.agazatiPTablazat').css('border-collapse','collapse');
        $('.agazatiPTablazat').css('border-spacing',0);
        $('.agazatiPTablazat').css('width','100%');
        $('.agazatiPTablazat').css('border','1px solid #ddd');
      }
});
