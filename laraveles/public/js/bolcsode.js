$(function () {
    let ajaxhivas = new AjaxHivas();

    $('.IDk').hide();
    let userJogo=$('#userJogosultsag').val();
    console.log('jog:'+userJogo);

    if(userJogo==$('#adminID').val()){
        $("#bolcsiForm").hide();
        let fajlnev = "/bolcsi/"+$('#alkalmazottID').val();
        ajaxhivas.getAjax(fajlnev, adatLista);
    }

    if(userJogo==$('#szuperAdminID').val()){
        let fajlnev = "/api/bolcsode";
        ajaxhivas.getAjax(fajlnev, adatLista);
    }

    $(".megerositTorles").on("click", () => {
        ajaxhivas.deleteAjax(fajlnev, $(".megerositTorles").attr("id"));
        location.reload();
    });

    //$(".modositUrlap").hide();
    $(window).on("modosit", (event) => {
        $(".modositUrlap").show();
        $("#id").attr("value", event.detail.id);
        $("#cim").attr("value", event.detail.cim);
        $("#nev").attr("value", event.detail.nev);
        $("#agazatiAzon").attr("value", event.detail.agazati_azon);
        $("#szgyfKod").attr("value", event.detail.szgyf_kod);
        $("#ferohelyekSzama").attr("value", event.detail.ferohelyek_szama);
        $("#feorAzon").attr("value", event.detail.feor);
        $("#agazatiPotlek").attr("value", event.detail.agazati_potlek);
        $("#fenntarto").attr("value", event.detail.fennt_id);

        $("#idB").hide();
        $("#Ujmodositadat").on("click", function () {
            console.log("modositasadat!");
            let id = $("#id").val();
            let cim = $("#cim").val();
            let nev = $("#nev").val();
            let agazatiAzon = $("#agazatiAzon").val();
            let szgyfKod = $("#szgyfKod").val();
            let ferohelyek_szama = $("#ferohelyekSzama").val();
            let feor = $("#feorAzon").val();
            let agazatiPotlek = $("#agazatiPotlek").val();
            let fenntarto = $("#fenntarto").val();
            let adat = {
                id: id,
                cim: cim,
                nev: nev,
                agazati_azon: agazatiAzon,
                szgyf_kod: szgyfKod,
                ferohelyek_szama: ferohelyek_szama,
                feor: feor,
                agazati_potlek: agazatiPotlek,
                fennt_id: fenntarto,
            };
            console.log(adat);
            console.log(fajlnev);
            console.log(id);
            console.log(fenntarto);

            ajaxhivas.putAjax(fajlnev, adat, id);

            //$(".modositUrlap").hide();
            //ajaxhivas.getAjax(fajlnev, adatLista);
            //location.reload();
        });
    });
    $(window).on("EsemenyTorolBolcsi", (event) => {
        $(".megerositTorles").attr("id", event.detail.id);
    });

    $(".adatModositEnged").on("click", function () {
        console.log("modositEnged");
        $("input").removeAttr("readonly");
    });

    $(".bolcsiNev").change(() => {
        $(".table").empty();
        $(".table").append(`<thead><tr>
			<th scope="col"></th>
			<th scope="col"></th>
			<th scope="col">Cím</th>
			<th scope="col">Név</th>
			<th scope="col">Ágazati azonosító</th>
			<th scope="col">SZGYF kód</th>
			<th scope="col">Férőhelyek száma</th>
			<th scope="col">FEOR azonosító</th>
			<th scope="col">Ágazati pótlék</th>
		</tr></thead>`);
        let fajlnev = "/teszt/" + $("select").val();
        ajaxhivas.getAjax(fajlnev, adatLista);
        console.log("muksziik");
        console.log($("select").val());
    });
});
