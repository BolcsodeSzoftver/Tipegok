$(function() {
	let ajax = new AjaxHivas();

	$('select').change(() => {
		//console.log($('select').val());
		let fajlnev="/melleklet1/"+$('select').val();
		console.log(fajlnev);
		ajax.getAjax(fajlnev, adatLista);
	});

	function adatLista(tomb) {
		tomb.forEach(function (ertek) {
			console.log(ertek.nev);
			$('#nev').attr('value',ertek.nev);
			$('#szulHely').attr('value',ertek.szul_hely);
			$('#szulIdo').attr('value',ertek.szul_ido);
			$('#anyjaNeve').attr('value',ertek.anyja_neve);
		});
	}
});