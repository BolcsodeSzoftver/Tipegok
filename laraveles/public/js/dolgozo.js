$(function () {

   /*  $(".megerositTorles").on("click", () => {
        console.log("megerositTorles");
        ajax.deleteAjax(vegpont, $(".megerositTorles").attr("id"));
        location.reload();
    }); */
    $(".modositGomb").on("click", function () {
        let id = this.id;
		console.log(this.id);
        $("#dolgozoId").val(id);
        $(".adatokDolgozo")
            .find(".allandoLakhely")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#nev").val($(this).text());
                }
            });
        /* $(".adatok")
            .find(".email")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#emailInput").val($(this).text());
                }
            }); */
    });


   /*  $(window).on("torol", (event) => {
        console.log("toroleees");
        $(".megerositTorles").attr("id", event.detail.id);
    }); */

    $(".adatModositEnged").on("click", function () {
        console.log("modositEnged");
        $("input").removeAttr("readonly");
    });

    $("#urlap1").on("click", function () {
        $("#adatok2").hide();
        $("#adatok1").show();
    });
    $("#urlap2").on("click", function () {
        $("#adatok1").hide();
        $("#adatok2").show();
    });

    tablazatFejlecElrejtese();
    function tablazatFejlecElrejtese() {
        for (let i = 2; i < 6; i++) {
            $(".t" + i).hide();
        }
    }

    $("#adatokT1").css("background-color", "gray");
    $("#adatokT1").css("color", "white");
    for (let i = 1; i < 6; i++) {
        $("#adatokT" + i).on("click", function () {
            for (let k = 1; k < 5; k++) {
                $("#adatokT" + (i + k)).css("background-color", "white");
                $("#adatokT" + (i + k)).css("color", "blue");
                $("#adatokT" + (i - k)).css("background-color", "white");
                $("#adatokT" + (i - k)).css("color", "blue");
                $(".t" + (i + k)).hide();
                $(".t" + (i - k)).hide();
            }
            $("#adatokT" + i).css("background-color", "gray");
            $("#adatokT" + i).css("color", "white");
            $(".t" + i).show();
        });
    }
});
