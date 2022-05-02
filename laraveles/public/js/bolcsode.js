$(function () {
    let ajaxhivas = new AjaxHivas();
    let vegpont = "/api/bolcsode";

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


        $("#idB").hide();
        $("#Ujmodositadat").on("click", function () {
            let id = $("#id").val();
            let cim = $("#cim").val();
            let nev = $("#nev").val();
            let agazatiAzon = $("#agazatiAzon").val();
            let szgyfKod = $("#szgyfKod").val();
            let ferohelyek_szama = $("#ferohelyekSzama").val();
            let feor = $("#feorAzon").val();
            let agazatiPotlek = $("#agazatiPotlek").val();
            let fenntarto = $("#fenntarto").val();
            let admin = $("#bolcsode_admin").val();
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
                bolcsode_admin: admin
            };
            ajaxhivas.putAjax(vegpont, adat, id);
            console.log(admin);
            location.reload();
        });
    });
    $(window).on("EsemenyTorolBolcsi", (event) => {
        $(".megerositTorles").attr("id", event.detail.id);
    });
    $(".megerositTorles").on("click", () => {
        ajaxhivas.deleteAjax(vegpont, $(".megerositTorles").attr("id"));
        location.reload();
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
        let vegpont = "/keresFenntarto/" + $("select").val();
        ajaxhivas.getAjax(vegpont, adatLista);
    });

    $(".adatModositEnged").on("click", function () {
        $("input").removeAttr("readonly");
    });

    $(".IDk").hide();
    let userJogo = $("#userJogosultsag").val();

    if (userJogo == $("#adminID").val()) {
        $("#bolcsiForm").hide();
        let vegpont = "/bolcsi/" + $("#userID").val();
        ajaxhivas.getAjax(vegpont, adatLista);
    }

    if (userJogo == $("#szuperAdminID").val()) {
        let vegpont = "/api/bolcsode";
        ajaxhivas.getAjax(vegpont, adatLista);
    }
});
