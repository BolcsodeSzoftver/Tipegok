$(function () {
    $("#mentes").hide();
    $(".allapot").hide();
    $("#megjelenikGomb").on("click",function(){
        $("#mentes").show();
    });

    $("#nincsGomb").on("click",function(){
        $("#mentes").hide();
    });
    $("#nincsGomb2").on("click",function(){
        $("#mentes").hide();
    });

    $(".nav-link").click(function () {
        if ($(this).hasClass("active")) {
            $(".nav-link").removeClass("active");
        } else {
            $(".nav-link").removeClass("active");
            $(this).addClass("active");
        }
    });
    
    function urlapFejlecElrejtese() {
        for (let i = 2; i < 6; i++) {
            $(".t" + i).hide();
        }
    }
    urlapFejlecElrejtese();

    for (let i = 1; i < 6; i++) {
        $("#adatokT" + i).on("click", function () {
            for (let k = 1; k < 5; k++) {
                $(".t" + (i + k)).hide();
                $(".t" + (i - k)).hide();
            }
            $(".t" + i).show();
        });
    }
});