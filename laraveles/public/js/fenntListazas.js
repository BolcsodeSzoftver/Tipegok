function fenntLista(tomb) {
    const szuloElem = $("#adat");
    const sablonElem = $("#sablon .adatok");

    //szuloElem.empty();
    //sablonElem.show();
    $(".form").hide();
    $("#bolcsiKeres").on("click", function () {
        console.log("bölcsikeres");
		$("#bolcsiKeres").hide();
		$(".form").show();
        console.log("jee");
        let option = "";
        $(".bolcsiNev").empty();
        tomb.forEach(function (adat) {
            option =
                "<option id='fenn' value='" + adat.nev + "'>" + adat.nev + "</option>";
            $(".bolcsiNev").append(option);
        });
        $("select").change(()=>{
            console.log("mukszik");
           for (let index = 0; index < tomb.length; index++) {
            if (tomb[index].nev === $("select").val()) {
               

              }
               
           }
            
          });

	});

    tomb.forEach(function (adat) {
        /* console.log(adat); */
        let ujElem = sablonElem.clone().appendTo(szuloElem);
        const ujFennt = new Fenntarto(ujElem, adat);
      
    });
  
   

    sablonElem.remove(); //sablonelem eltávolítása
}


