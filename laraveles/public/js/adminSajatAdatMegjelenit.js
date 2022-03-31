$(function () {
    $(".adatok2").hide();

    $(".dolgozoModalAdatok1").on("click", function () {
        $(".adatok1").show();
        $(".adatok2").hide();
    });

    $(".dolgozoModalAdatok2").on("click", function () {
        $(".adatok2").show();
        $(".adatok1").hide();
    });
});
