$(function () {
    const fennt = [];
    let vegpont = "/api/fenntarto"; /* ' http://localhost:3000/fennt'; *///let vegpont legyen majd
    let ajax = new AjaxHivas();
    ajax.getAjax(vegpont, fenntLista);

    $(".urlap").hide();
     //--
  //külön osztályba:
    function fenntLista(tomb) {
        const szuloElem = $("#adat");
        const sablonElem = $("#sablon .adatok");

        szuloElem.empty();
        sablonElem.show();
        console.log(adat);
        tomb.forEach(function (adat) {
            console.log(adat);
            fennt.push(adat);

            let ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujFennt = new Fenntarto(ujElem, adat);
        });
        sablonElem.hide(); //sablonelem eltávolítása
    }
    //--

    $("#modositadat").on("click", function () {
        console.log(fennt);
        $("#fId").hide();
        $(".urlap").show();
        //$("table").hide();
        $("#modositadat").hide();
        //console.log(fennt[0].uzemorvos_nev);
        $("#id").attr("value", fennt[0].id);
        $("#nev").attr("value", fennt[0].nev);
        $("#kepv").attr("value", fennt[0].kepviselo);
        $("#megye").attr("value", fennt[0].megye);
        $("#szekh").attr("value", fennt[0].szekhely);
        $("#agazatia").attr("value", fennt[0].agazati_azon);
        $("#adoSzam").attr("value", fennt[0].adoszam);
        $("#cegsz").attr("value", fennt[0].cegjegyzekszam);
        $("#stat").attr("value", fennt[0].statisztikaiszam);
        $("#kormanyHivatal").attr("value", fennt[0].illetekes_kormányh);
        $("#bsz").attr("value", fennt[0].bolcsodek_szama);
        $("#oNev").attr("value", fennt[0].uzemorvos_nev);
        $("#oTel").attr("value", fennt[0].uzemorvos_telefonszam);
        $("#oCim").attr("value", fennt[0].uzemorvos_cim);
    });

    $("#adatMentes").on("click", function () {
        console.log("ment");
        let fId = $("#id").val();
        let nev = $("#nev").val();
        let szekhely = $("#szekh").val();
        let agazatiA = $("#agazatia").val();
        let kepviselo = $("#kepv").val();
        let adoSz = $("#adoSzam").val();
        let m = $("#megye").val();
        let cegSzam = $("#cegsz").val();
        let stat = $("#stat").val();
        let kormanyH = $("#kormanyHivatal").val();
        let bSzam = $("#bsz").val();
        let oNev = $("#oNev").val();
        let oCim = $("#oCim").val();
        let oTel = $("#oTel").val();

        let adat = {
            "id": fId,
            "nev": nev,
            "szekhely": szekhely,
            "agazati_azon": agazatiA,
            "kepviselo": kepviselo,
            "adoszam": adoSz,
            "megye": m,
            "cegjegyzekszam": cegSzam,
            "statisztikaiszam": stat,
            "illetekes_kormányh": kormanyH,
            "bolcsodek_szama": bSzam,
            "uzemorvos_nev": oNev,
            "uzemorvos_cim": oCim,
            "uzemorvos_telefonszam": oTel,
        };
        
        console.log(fId);
        console.log(adat);
        ajax.putAjax(vegpont, adat, fId);
        $(".urlap").hide();
       ajax.getAjax(vegpont, fenntLista);
      
    });
});
