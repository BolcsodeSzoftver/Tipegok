function dolgozoLista(tomb) {
	const szuloElem = $('.table');
	const sablonElem = $('.adatok');
	
	tomb.forEach(function(adat) {
		let ujElem = sablonElem.clone().appendTo(szuloElem);
		const alkalmazott = new Alkalmazott(ujElem, adat);
	});
	sablonElem.remove();
}