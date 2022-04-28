$(function () {
    let ajax = new AjaxHivas();
    let bizonyitvanyEleresiUt = "/api/bizonyitvany";
    $(".nav-link").click(function () {
        if ($(this).hasClass("active")) {
            $(".nav-link").removeClass("active");
        } else {
            $(".nav-link").removeClass("active");
            $(this).addClass("active");
        }
    });

    $(".adatModositEnged").on("click", function () {
        $("input").removeAttr("readonly");
    });
    function tablazatFejlecElrejtese() {
        for (let i = 2; i < 6; i++) {
            $(".t" + i).hide();
        }
    }
    tablazatFejlecElrejtese();
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
    $(".bizonyitvanyokGomb").on("click", function () {
        let id = this.id;
        ajax.getAjax(bizonyitvanyEleresiUt, bizonyitvanyLista);

        function bizonyitvanyLista(tomb) {
            $("#bizAdatokDolgozo").empty();
            $("#bizAdatokDolgozo").append(
                '<table class="table table-bordered mb-5  table-responsive"><thead><tr><th>Végzettség</th><th>Bizonyítványt kiállító intézmény neve</th><th>Kiadás dátuma</th><th>Bizonyítvány száma</th><th>Pontokszáma</th><th>Dokumentumok</th></tr></thead></table>'
            );
            tomb.forEach(function (adat) {
                if (adat.alkalmazott_id == id) {
                    $("#bizAdatokDolgozo table").append(
                        "<tbody><tr><td>" +
                            adat.vegzettseg +
                            "</td><td>" +
                            adat.biz_intezmeny_nev +
                            "</td><td>" +
                            adat.kiadas_datuma +
                            "</td><td>" +
                            adat.bizonyitvany_szam +
                            "</td><td>" +
                            adat.pontokszama +
                            '</td><td><button class="dokumentum" data-toggle="modal" data-target="#dokumentumokModal">Dokumentumok</button></td></tr></tbody>'
                    );

                    let idKep = 1;
                    $("#dokumentumok").empty();
                    let kepek = JSON.parse(adat.gyakorlati_igazolas);
                    kepek.forEach((element) => {
                        $("#dokumentumok").append(
                            '<div class="kep1"><a href="#" class="adatKep"><img src="dokumentumok/' +
                                element +
                                '" id="dokumentum' +
                                idKep++ +
                                '"" data-toggle="modal" data-target="#dokumentumokNagyKepModal"></a></div>'
                        );
                    });

                    let kepek2 = JSON.parse(adat.oep_konyv_masolat);
                    kepek2.forEach((element) => {
                        $("#dokumentumok").append(
                            '<div class="kep2"><a href="#" class="adatKep"><img src="dokumentumok/' +
                                element +
                                '" id="dokumentum' +
                                idKep++ +
                                '"" data-toggle="modal" data-target="#dokumentumokNagyKepModal"></a></div>'
                        );
                    });

                    let kepek3 = JSON.parse(adat.dokumentum_feltoltese);
                    kepek3.forEach((element) => {
                        $("#dokumentumok").append(
                            '<div class="kep3"><a href="#" class="adatKep"><img src="dokumentumok/' +
                                element +
                                '" id="dokumentum' +
                                idKep++ +
                                '"" data-toggle="modal" data-target="#dokumentumokNagyKepModal"></a></div>'
                        );
                    });

                    $(".adatKep").on("click", function () {
                        $(".nagyKep").attr(
                            "src",
                            $(this).find("img").attr("src")
                        );
                        $("#dokumentumokNagyKepModal").modal("show");
                        $("#letoltGomb").attr(
                            "href",
                            $(this).find("img").attr("src")
                        );
                    });

                    function urlapFejlecElrejtese() {
                        for (let i = 2; i < 6; i++) {
                            $(".kep" + i).hide();
                        }
                    }
                    urlapFejlecElrejtese();

                    for (let i = 1; i < 6; i++) {
                        $("#adatokKepT" + i).on("click", function () {
                            for (let k = 1; k < 5; k++) {
                                $(".kep" + (i + k)).hide();
                                $(".kep" + (i - k)).hide();
                            }
                            $(".kep" + i).show();
                        });
                    }
                }
            });
        }
    });

    $(".dolgozoTorles").on("click", function () {
        let id = this.id;
        let action = "/api/alkalmazott/" + id;
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
                    $("#allapot").val($(this).text());
                }
            });

        $(".jovahagyasKezd").on("click", function () {
            let id = this.id;
            if (this.id == id) {
                $("#nevKiri").html(this.name);
            }
            let action = "/api/alkalmazott/" + id;
            $(".allapotModosit").attr("action", action);
            $(".adatokDolgozoAllapot")
                .find(".id")
                .each(function () {
                    if (this.id === id) {
                        $("#alkalmazottId").val($(this).text());
                    }
                });
            $(".adatokDolgozoAllapot")
                .find(".bolcsodeIdTd")
                .each(function () {
                    if (this.id === id) {
                        $("#bolcsodeId").val($(this).text());
                    }
                });
        });
        $(document).on("click", "#gomb", function () {
            window.location.replace(window.location.href);
        });

        $("#kezpenz").click(function () {
            $("#utalas").prop("checked", false)  
        });
        $("#utalas").click(function () {
            $("#kezpenz").prop("checked", false)  
        });
    });
});
