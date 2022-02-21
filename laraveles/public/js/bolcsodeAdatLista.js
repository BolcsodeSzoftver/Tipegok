function adatLista(bolcsodek) {
    const szuloElem = $(".table");
    const sablonElem = $(".adatok");
   
    bolcsodek.forEach(function (adat) {
       // let ujElem = sablonElem.clone().appendTo(szuloElem);
        const bolcsode = new Bolcsode(szuloElem, adat);         
    });

    sablonElem.remove();
}