function fenntLista(tomb) {
	const szuloElem = $('#adat');
	const sablonElem = $('#sablon .adatok');

	//szuloElem.empty();
	//sablonElem.show();

	tomb.forEach(function(adat) {
		/* console.log(adat); */
		let ujElem = sablonElem.clone().appendTo(szuloElem);
		const ujFennt = new Fenntarto(ujElem, adat);
	});
	sablonElem.remove(); //sablonelem eltávolítása
}