function dolgozoLista(tomb) {
	const szuloElem = $('.table');
	const sablonElem = $('.adatok');
	
	tomb.forEach(function(adat) {
		//let ujElem = sablonElem.clone().appendTo(szuloElem);
		const alkalmazott = new Alkalmazott(szuloElem, adat);
	});
	sablonElem.remove();
}

function rendezes(tomb){
	tomb.sort((a, b) => {
		return Number(a.nev > b.nev) - 0.5;
	  });

	dolgozoLista(tomb);
}