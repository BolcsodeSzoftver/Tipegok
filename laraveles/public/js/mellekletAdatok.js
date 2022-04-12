$(function() {
	
	let ajax = new AjaxHivas();
	$('.kereso_box select').selectpicker();

	$('select').change(() => {
		let alkalmazott="/alkalmazott/"+$('select').val();
		let dolgozo="/dolgozo/"+$('select').val();
		let fenntarto="/fenntarto/"+$('select').val();
		let bizonyitvany="/bizonyitvany/"+$('select').val();
		console.log(alkalmazott, fenntarto);
		ajax.getAjax(alkalmazott, adatLista1);
		ajax.getAjax(dolgozo, adatLista2);
		ajax.getAjax(fenntarto, adatLista3);
		ajax.getAjax(bizonyitvany, adatLista4);
	});

	function adatLista1(tomb) {
		tomb.forEach(function (ertek) {
			console.log(ertek.nev);
			$('#nev').attr('value',ertek.nev);
			$('#szulNev').attr('value',ertek.szul_nev);
			$('#szulHely').attr('value',ertek.szul_hely);
			$('#szulIdo').attr('value',ertek.szul_ido);
			$('#anyjaNeve').attr('value',ertek.anyja_neve);
			$('#cim').attr('value',ertek.allando_lakhely);
			$('#tajSz').attr('value',ertek.tajszam);
			$('#allamP').attr('value',ertek.all_polgarsag);
			if(ertek.nem==0){$('#nem').attr('value',"férfi");}
			if(ertek.nem==1){$('#nem').attr('value',"nő");}
		});
	}

	function adatLista2(tomb) {
		tomb.forEach(function (ertek) {
			$('#munkaKor').attr('value',ertek.munkakor);
		});
	}

	function adatLista3(tomb) {
		tomb.forEach(function (ertek) {
			//console.log(ertek.szekhely);
			$('#szekHely').attr('value',ertek.szekhely);
			$('#megye').attr('value',ertek.megye);
			$('#orvosNeve').attr('value',ertek.uzemorvos_nev);
			$('#orvosCime').attr('value',ertek.uzemorvos_cim);
			$('#orvosTel').attr('value',ertek.uzemorvos_telefonszam);
			$('#fenntartoNev').attr('value',ertek.nev);
		});
	}

	function adatLista4(tomb) {
		tomb.forEach(function (ertek) {
			$('#vegzettseg').attr('value',ertek.vegzettseg);
			$('#bizIntezmenyNev').attr('value',ertek.biz_intezmeny_nev);
			$('#bizonyitvanySz').attr('value',ertek.bizonyitvany_szam);
			$('#kiadasDatum').attr('value',ertek.kiadas_datuma);
		});
	}
});
