function felhasznaloLista(tomb) {
	const szuloElem = $('.table');
	const sablonElem = $('.adatok');
	
	tomb.forEach(function(adat) {
		//let ujElem = sablonElem.clone().appendTo(szuloElem);
		const felhasznalo = new Felhasznalo(szuloElem, adat);
	});
	sablonElem.remove();
} 