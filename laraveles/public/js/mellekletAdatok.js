$(function() {
	let ajax = new AjaxHivas();

	$('select').change(() => {
		//console.log($('select').val());
		let fajlnev1="/melleklet1/"+$('select').val();
		let fajlnev2="/melleklet2/"+$('select').val();
		console.log(fajlnev1, fajlnev2);
		ajax.getAjax(fajlnev1, adatLista1);
		ajax.getAjax(fajlnev2, adatLista2);
	});

	function adatLista1(tomb) {
		tomb.forEach(function (ertek) {
			console.log(ertek.nev);
			$('#nev').attr('value',ertek.nev);
			$('#szulHely').attr('value',ertek.szul_hely);
			$('#szulIdo').attr('value',ertek.szul_ido);
			$('#anyjaNeve').attr('value',ertek.anyja_neve);
			$('#cim').attr('value',ertek.allando_lakhely);
			$('#tajSz').attr('value',ertek.tajszam);
		});
	}

	function adatLista2(tomb) {
		tomb.forEach(function (ertek) {
			console.log(ertek.uzemorvos_nev);
			$('#orvosNeve').attr('value',ertek.uzemorvos_nev);
			$('#orvosCime').attr('value',ertek.uzemorvos_cim);
			$('#orvosTel').attr('value',ertek.uzemorvos_telefonszam);
		});
	}
});
