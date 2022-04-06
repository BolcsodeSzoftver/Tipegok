$(function () {
    let ajax = new AjaxHivas();
    let bizonyitvanyEleresiUt = "/api/bizonyitvany";

    $(".bizonyitvanyokGomb").on("click", function () {
        console.log("bizonyitvany gomb");
        let id = this.id;
        console.log(this.id);
        ajax.getAjax(bizonyitvanyEleresiUt, bizonyitvanyLista);

        function bizonyitvanyLista(tomb) {
            /* console.log(tomb); */
            $("#bizSajatAdatok").empty();
            $("#bizSajatAdatok").append(
                '<table class="table table-bordered mb-5  table-responsive"><thead><tr><th>Végzettség</th><th>Bizonyítványt kiállító intézmény neve</th><th>Kiadás dátuma</th><th>Bizonyítvány száma</th><th>Pontokszáma</th><th>Dokumentumok</th></tr></thead></table>'
            );
            tomb.forEach(function (adat) {
                console.log(tomb);
                if (adat.alkalmazott_id == id) {
                    console.log(tomb);
                    $("#bizSajatAdatok table").append(
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
                        console.log(element);
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
                        console.log(element);
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
                        console.log(element);
                        $("#dokumentumok").append(
                            '<div class="kep3"><a href="#" class="adatKep"><img src="dokumentumok/' +
                                element +
                                '" id="dokumentum' +
                                idKep++ +
                                '"" data-toggle="modal" data-target="#dokumentumokNagyKepModal"></a></div>'
                        );
                    });

                    $(".adatKep").on("click", function () {
                        console.log("asd");
                        $(".nagyKep").attr(
                            "src",
                            $(this).find("img").attr("src")
                        );
                        $("#dokumentumokNagyKepModal").modal("show");
                        console.log($(this).find("img").attr("src"));
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
});
