$(function () {
    let ajax = new AjaxHivas();
    let dolgozoEleresiUt = "/api/dolgozo/";

    $(".dolgozoGomb").on("click", function () {
        let id = this.id;
        console.log(this.id);
        ajax.getAjax(dolgozoEleresiUt, dolgozotLista);
        function dolgozotLista(tomb) {
            /* console.log(tomb); */
            $("#dolgozoAdatok").empty();
            tomb.forEach(function (adat) {
                if (adat.alkalmazott_id == id) {
                    console.log(adat);
                    $("#dolgozoAdatok").append(
                        '<div class="row">' +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.brutto_alapber +
                            '" class="form-control" name="brutto_alapber" value="' +
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
                            '" class="form-control" name="heti_munkaora" value="' +
                            adat.heti_munkaora +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.heti_munkaora +
                            '">Heti munkaóra</label>' +
                            "</div>" +
                            "</div>" +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.szgf_kod +
                            '" class="form-control" name="szgf_kod" value="' +
                            adat.szgf_kod +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.szgf_kod +
                            '">SZGF kód</label>' +
                            "</div>" +
                            "</div>" +
                            "</div>"
                    );
                    $("#dolgozoAdatok").append(
                        '<hr><div class="row">' +
                            '<div class="col"> ' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.besorolas_betu +
                            '" class="form-control" name="besorolas_betu" value="' +
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
                            '" class="form-control" name="besorolas_szam" value="' +
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
                        '<hr><div class="row">' +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.feor_azon +
                            '" class="form-control" name="feor_azon" value="' +
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
                            '" class="form-control" name="eves_szabi" value="' +
                            adat.eves_szabi +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.eves_szabi +
                            '">Éves szabadság</label>' +
                            "</div>"
                    );
					$("#dolgozoAdatok").append(
                        '<hr><div class="row">' +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.munkakor +
                            '" class="form-control" name="munkakor" value="' +
                            adat.munkakor +
                            '" readonly>' +
                            '<label class="form-label" for="' +
                            adat.munkakor +
                            '">Munkakör</label>' +
                            "</div>" +
                            "</div>" +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.vegzettseg +
                            '" class="form-control" name="vegzettseg" value="' +
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
                        '<hr><div class="row">' +
                            '<div class="col">' +
                            '<div class="form-outline">' +
                            '<input type="text" id="' +
                            adat.kp_utalas +
                            '" class="form-control" name="kp_utalas" value="' +
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
                            '" class="form-control" name="sz_szakkepzet" value="' +
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
                     let action = dolgozoEleresiUt + id;
                    $(".modositDolgozo").attr("action", action);
                }
            });
        }
    });
});
