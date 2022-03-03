$(function() {
	let ajax = new AjaxHivas();

	$('select').change(() => {
		//console.log($('select').val());
		let dolgozo1="/melleklet1/"+$('select').val();
		let dolgozo2="/melleklet2/"+$('select').val();
		let fenntarto="/melleklet10/"+$('select').val();
		console.log(dolgozo1, fenntarto);
		ajax.getAjax(dolgozo1, adatLista1);
		ajax.getAjax(dolgozo2, adatLista2);
		ajax.getAjax(fenntarto, adatLista3);
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
			$('#munkaKor').attr('value',ertek.munkakor);
		});
	}

	function adatLista3(tomb) {
		tomb.forEach(function (ertek) {
			//console.log(ertek.uzemorvos_nev);
			$('#orvosNeve').attr('value',ertek.uzemorvos_nev);
			$('#orvosCime').attr('value',ertek.uzemorvos_cim);
			$('#orvosTel').attr('value',ertek.uzemorvos_telefonszam);
		});
	}
});
