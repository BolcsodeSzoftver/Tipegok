function adatLista(bolcsodek) {
    const szuloElem = $(".table");
    const sablonElem = $(".adatok");
    //$("tbody").empty();
    bolcsodek.forEach(function (adat) {
        let ujElem = sablonElem.clone().appendTo(szuloElem);
        const bolcsode = new Bolcsode(ujElem, adat);      
       
    });
    $(".bolcsiNev").on("click", function(){
        let option="";
        $(".bolcsiNev").empty();
        bolcsodek.forEach(function(adat){
            option="<option value='"+adat.id+"'>"+adat.nev+"</option>";
            $(".bolcsiNev").append(option);
        });

       /* console.log("option")
        console.log("sziaa");
        $(".bolcsiNev").empty();
        bolcsodek.forEach(function(adat) {
            $(".bolcsiNev").append("<option value=" + adat.id + ">" + adat.nev + "</option>")
        });*/
        
    });
 
    sablonElem.remove();
   

}

