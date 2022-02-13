function fenntLista(tomb) {
    const szuloElem = $("#adat");
    const sablonElem = $("#sablon .adatok");

    //szuloElem.empty();
    //sablonElem.show();
	$(".form").hide();

    tomb.forEach(function (adat) {
        /* console.log(adat); */
        let ujElem = sablonElem.clone().appendTo(szuloElem);
        const ujFennt = new Fenntarto(ujElem, adat);
    });
	
    $("#bolcsiKeres").on("click", function () {
		$("#bolcsiKeres").hide();
		$(".form").show();
        console.log("jee");
        let option = "";
        $(".bolcsiNev").empty();
        tomb.forEach(function (adat) {
            option =
                "<option value='" + adat.id + "'>" + adat.nev + "</option>";
            $(".bolcsiNev").append(option);
        });

	});

    sablonElem.remove(); //sablonelem eltávolítása
}

