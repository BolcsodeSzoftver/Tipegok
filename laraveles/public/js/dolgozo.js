$(function () {
    $(".adatModositEnged").on("click", function () {
        console.log("modositEnged");
        $("input").removeAttr("readonly");
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

    $(".modositGomb").on("click", function () {
        let id = this.id;
        console.log(this.id);
        $("#dolgozoId").val(id);
        $(".adatokDolgozo")
            .find(".nev")
            .each(function () {
                console.log(this.id);
                console.log(id);
                if (this.id === id) {
                    console.log($(this).text());
                    $("#nev").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".allandoLakhely")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#allandoLak").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".telefonszam")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#tel").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".anyjaNev")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#anyjaNeve").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".szulN")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#szulN").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".szulH")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#szulH").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".szulI")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#szulI").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".cim")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#allandoLak").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".tartHely")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#tartHely").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".taj")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#tajSz").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".adoA")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#adoAzon").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".bankSz")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#bankSZ").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".nem")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#nem").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".hazas")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#hazas").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".gyerek")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#tizenhatAGy").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".polgar")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#allPorg").val($(this).text());
                }
            });
    });

    $(".dolgozoTorles").on("click", function () {
        let id = this.id;
        console.log(this.id);
        let action = "/api/dolgozo/" + id;
        $(".torles").attr("action", action);
    });

    $(".allapot").hide();
    $(".id").hide();
    $(".bolcsodeIdTd").hide();
    $("#bolcsodeId").hide();
    $("#alkalmazottId").hide(); 

    $(".jovhagyas").on("click", function () {
        $(".adatokDolgozoAllapot")
            .find(".allapot")
            .each(function () {
                if ($(".allapot").attr("id") === "0") {
                    console.log($(this).text());
                    $("#allapot").val($(this).text());
                }
            });

        $(".jovahagyasKezd").on("click", function () {
            let id = this.id;
            console.log(this.id);
            if(this.id == id){
                $("#nevKiri").html(this.name);
            }
            let action = "/api/dolgozo/" + id;
            $(".allapotModosit").attr("action", action);
                $(".adatokDolgozoAllapot")
                .find(".id")
                .each(function () {
                    if (this.id === id) {
                        console.log($(this).text());
                        $("#alkalmazottId").val($(this).text());
                    }
                });
                $(".adatokDolgozoAllapot")
                .find(".bolcsodeIdTd")
                .each(function () {
                    if (this.id === id) {
                        console.log($(this).text());
                        $("#bolcsodeId").val($(this).text());
                    }
                });
        });

        


    });


});
