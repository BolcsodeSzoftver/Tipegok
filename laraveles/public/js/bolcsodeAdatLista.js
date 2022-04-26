function adatLista(bolcsodek) {
    const szuloElem = $(".table");
    const sablonElem = $(".adatok");
   
    bolcsodek.forEach(function (adat) {
        const bolcsode = new Bolcsode(szuloElem, adat);         
    });

    sablonElem.remove();
}