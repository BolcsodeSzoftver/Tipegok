$(function () {
    let ajax = new AjaxHivas();
    let bizonyitvanyEleresiUt = "/api/bizonyitvany";
    let dolgozoEleresiUt = "/api/dolgozo";

    $(".adatModositEnged").on("click", function () {
        console.log("modositEnged");
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

<<<<<<< HEAD
    $("#adatok2").hide();

    $("#dolgozoModalAdatok1").on("click", function () {
        $("#adatok1").show();
        $("#adatok2").hide();
    });

    $("#dolgozoModalAdatok2").on("click", function () {
        $("#adatok2").show();
        $("#adatok1").hide();
    });
=======
	$('.adatok2').hide();

	$('.dolgozoModalAdatok1').on('click', function() {
		$('.adatok1').show();
		$('.adatok2').hide();
	});

	$('.dolgozoModalAdatok2').on('click', function() {
		$('.adatok2').show();
		$('.adatok1').hide();
	});
>>>>>>> e496f035f3e39297c36120db9055a41049ccc4de

    $(".bizonyitvanyokGomb").on("click", function () {
        let id = this.id;
        console.log(this.id);
        ajax.getAjax(bizonyitvanyEleresiUt, bizonyitvanyLista);
        function bizonyitvanyLista(tomb) {
            /* console.log(tomb); */
            $("#bizAdatok").empty();
            $("#bizAdatok").append(
                '<table class="table table-bordered mb-5"><thead><tr><th>Végzettség</th><th>Bizonyítványt kiállító intézmény neve</th><th>Kiadás dátuma</th><th>Bizonyítvány száma</th><th>Pontokszáma</th><th>Dokumentumok</th></tr></thead></table>'
            );
            tomb.forEach(function (adat) {
                if (adat.alkalmazott_id == id) {
                    $("#bizAdatok table").append(
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
                }
                let idKep = 1;
                $("#dokumentumok").empty();
                $("#dokumentumok").append(
                    '<div class="kep1"><p>Gyakorlati igazolás:</p><a href="#" class="adatKep"><img src="storage/' +
                        adat.gyakorlati_igazolas +
                        '" id="dokumentum' +
                        idKep++ +
                        '"" data-toggle="modal" data-target="#dokumentumokNagyKepModal"></a></div><div class="kep2"><p>OEP könyv másolat:</p><a href="#" class="adatKep"><img src="storage/' +
                        adat.oep_konyv_masolat +
                        '" id="dokumentum' +
                        idKep++ +
                        '" " data-toggle="modal" data-target="#dokumentumokNagyKepModal"></a></div><div class="kep3"><p>Egyébb dokumentumok:</p><a href="#" class="adatKep"><img src="storage/' +
                        adat.dokumentum_feltoltese +
                        '" id="dokumentum' +
                        idKep++ +
                        '" data-toggle="modal" data-target="#dokumentumokNagyKepModal"></a></div>'
                );
                $(".adatKep").on("click", function () {
                    console.log("asd");
                    $(".nagyKep").attr("src", $(this).find("img").attr("src"));                  
                    $("#dokumentumokNagyKepModal").modal("show");
                    console.log( $(this).find("img").attr("src"));
                    $("#letoltGomb").attr("href", $(this).find("img").attr("src"));               
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
            });
        }
    });

    $(".dolgozoGomb").on("click", function () {
        let id = this.id;
        console.log(this.id);
        ajax.getAjax(dolgozoEleresiUt, dolgozotLista);
        function dolgozotLista(tomb) {
            /* console.log(tomb); */
            $("#dolgozoAdatok").empty();
            tomb.forEach(function (adat) {
                console.log(adat);
                if (adat.alkalmazott_id == id) {
                    $("#dolgozoAdatok").append(
                        '<div class="row">' +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.brutto_alapber +
                            '" class="form-control" name="' +
                            adat.brutto_alapber +
                            '" value="' +
                            adat.brutto_alapber +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.brutto_alapber +
                            '">Bruttó alapbér</label>' +
                            "</div>" +
                            "</div>" +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.heti_munkaora +
                            '" class="form-control" name="' +
                            adat.heti_munkaora +
                            '" value="' +
                            adat.heti_munkaora +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.heti_munkaora +
                            '">Heti munkaóra</label>' +
                            "</div>" +
                            "</div>" +
                            "</div>"
                    );
                    $("#dolgozoAdatok").append(
                        '<div class="row">' +
                            '<div class="col"> ' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.besorolas_betu +
                            '" class="form-control" name="' +
                            adat.besorolas_betu +
                            '" value="' +
                            adat.besorolas_betu +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.besorolas_betu +
                            '">Besorolás betű</label>' +
                            "</div>" +
                            "</div>" +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.besorolas_szam +
                            '" class="form-control" name="' +
                            adat.besorolas_szam +
                            '" value="' +
                            adat.besorolas_szam +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.besorolas_szam +
                            '">Besorolás szám</label>' +
                            "</div>" +
                            "</div>" +
                            '<div class="col"> ' +
                            '<div class="form-outline">' +
                            '<label class="form-label" for="">' +
                            adat.agazati_potlek +
                            "</label><br>" +
                            '<label class="form-label" for="' +
                            adat.agazati_potlek +
                            '">Ágazati pótlék</label>' +
                            "</div>" +
                            "</div>" +
                            "</div>"
                    );
                    $("#dolgozoAdatok").append(
                        '<div class="row">' +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.feor_azon +
                            '" class="form-control" name="' +
                            adat.feor_azon +
                            '" value="' +
                            adat.feor_azon +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.feor_azon +
                            '">Feor azonosító</label>' +
                            "</div>" +
                            "</div>" +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.eves_szabi +
                            '" class="form-control" name="' +
                            adat.eves_szabi +
                            '" value="' +
                            adat.eves_szabi +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.eves_szabi +
                            '">Éves szabadság</label>' +
                            "</div>" +
                            "</div>" +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.vegzettseg +
                            '" class="form-control" name="' +
                            adat.vegzettseg +
                            '" value="' +
                            adat.vegzettseg +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.vegzettseg +
                            '">Végzettség</label>' +
                            "</div>" +
                            "</div>" +
                            "</div>"
                    );
                    $("#dolgozoAdatok").append(
                        '<div class="row">' +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.kp_utalas +
                            '" class="form-control" name="' +
                            adat.kp_utalas +
                            '" value="' +
                            adat.kp_utalas +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.kp_utalas +
                            '">Kézpénz vagy utalás</label>' +
                            "</div>" +
                            "</div>" +
                            '<div class="col"> ' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.sz_szakkepzet +
                            '" class="form-control" name="' +
                            adat.sz_szakkepzet +
                            '" value="' +
                            adat.sz_szakkepzet +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.sz_szakkepzet +
                            '">Sz szakképzet</label>' +
                            "</div>" +
                            "</div>" +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.belepesi_nap +
                            '" class="form-control" name="' +
                            adat.belepesi_nap +
                            '" value="' +
                            adat.belepesi_nap +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.belepesi_nap +
                            '">Belépés napja</label>' +
                            "</div>" +
                            "</div>" +
                            "</div>"
                    );
                }
            });
        }
    });

    $(".orvosiAdatokGomb").on("click", function () {
        let id = this.id;
        console.log(this.id);
        ajax.getAjax(eleresiUt, orvosiAdatLista);
    });

    $(".dolgozoTorles").on("click", function () {
        let id = this.id;
        console.log(this.id);
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
                    console.log($(this).text());
                    $("#allapot").val($(this).text());
                }
            });

        $(".jovahagyasKezd").on("click", function () {
            let id = this.id;
            console.log(this.id);
            if (this.id == id) {
                $("#nevKiri").html(this.name);
            }
            let action = "/api/alkalmazott/" + id;
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
        $(document).on("click", "#gomb", function () {
            window.location.replace(window.location.href);
        });
    });
});
