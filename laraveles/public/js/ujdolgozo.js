$(function () {
    $("#mentes").hide();
    $(".allapot").hide();
    $(".userId").hide();
    $("#megjelenikGomb").on("click", function () {
        $("#mentes").show();
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
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this)
            .siblings(".custom-file-label")
            .addClass("selected")
            .html(fileName);
    });

    
    $("#bolcsode").change(() => {
        console.log($( "#bolcsode" ).val());
    });
    $("#igen").click(function () {
        $("#nem").prop("checked", false)  
    });
    $("#nem").click(function () {
        $("#igen").prop("checked", false)  
    });

    $("#no").click(function () {
        $("#ferfi").prop("checked", false)  
    });
    $("#ferfi").click(function () {
        $("#no").prop("checked", false)  
    });

});
