function fenntLista(tomb) {
    const szuloElem = $("#adatFenntarto");
    const sablonElem = $("#sablonFenntarto .adatokFenntarto");

    tomb.forEach(function (adat) {
        let ujElem = sablonElem.clone().appendTo(szuloElem);
        const ujFennt = new Fenntarto(ujElem, adat);
      
    });
  
    sablonElem.remove(); 
}


