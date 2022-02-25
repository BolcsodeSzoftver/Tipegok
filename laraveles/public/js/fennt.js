$(function () {
    let ajax = new AjaxHivas();

    $('.IDk').hide();
    let userJogo=$('#userJogosultsag').val();
    console.log('jog:'+userJogo);

    if(userJogo==$('#adminID').val()){
        let vegpont = "/fennt/"+$('#fenntID').val();
        ajax.getAjax(vegpont, fenntLista);
    }

    if(userJogo==$('#szuperAdminID').val()){
        let vegpont = "/api/fenntarto";
        ajax.getAjax(vegpont, fenntLista);
    }

    $(".megerositTorles").on("click", () => {
        console.log("megerositTorles");
        ajax.deleteAjax(vegpont, $(".megerositTorles").attr("id"));
        location.reload();
    });

    $(window).on("modosit", (event) => {
        console.log(event);
        //$(".urlap").show();
        //$("table").hide();
        //$("#modositadat").hide();

        $("#Fenntartoid").attr("value", event.detail.id);
        $("#nev").attr("value", event.detail.nev);
        $("#kepv").attr("value", event.detail.kepviselo);
        $("#megye").attr("value", event.detail.megye);
        $("#szekh").attr("value", event.detail.szekhely);
        $("#agazatia").attr("value", event.detail.agazati_azon);
        $("#adoSzam").attr("value", event.detail.adoszam);
        $("#cegsz").attr("value", event.detail.cegjegyzekszam);
        $("#stat").attr("value", event.detail.statisztikaiszam);
        $("#kormanyHivatal").attr("value", event.detail.illetekes_kormányh);
        $("#bsz").attr("value", event.detail.bolcsodek_szama);
        $("#oNev").attr("value", event.detail.uzemorvos_nev);
        $("#oTel").attr("value", event.detail.uzemorvos_telefonszam);
        $("#oCim").attr("value", event.detail.uzemorvos_cim);

        $("#fId").hide();
        $("#adatMentes").on("click", function () {
            console.log("ment");
            let fId = $("#Fenntartoid").val();
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
                id: fId,
                nev: nev,
                szekhely: szekhely,
                agazati_azon: agazatiA,
                kepviselo: kepviselo,
                adoszam: adoSz,
                megye: m,
                cegjegyzekszam: cegSzam,
                statisztikaiszam: stat,
                illetekes_kormányh: kormanyH,
                bolcsodek_szama: bSzam,
                uzemorvos_nev: oNev,
                uzemorvos_cim: oCim,
                uzemorvos_telefonszam: oTel,
            };
            console.log(fId);
            ajax.putAjax(vegpont, adat, fId);
            // $(".urlap").hide();
            location.reload();//Az aktuális dokumentum újratöltése
            //ajax.getAjax(vegpont, fenntLista);
        });
    });

    $(window).on('torol', (event) => {
        console.log('toroleees')
		$(".megerositTorles").attr("id", event.detail.id);
	});
  

    $(".adatModositEnged").on("click", function(){
        console.log('modositEnged');
        $('input').removeAttr('readonly');

    });
    

    
});

