$(function() {
	let vegpont = '/api/dolgozo';
	let ajax = new AjaxHivas();

	ajax.getAjax(vegpont, dolgozoLista);

	$(window).on('modosit', (event) => {
		$('#id').attr('value', event.detail.id);
		$('#nev').attr('value', event.detail.nev);
		$('#anyjaNeve').attr('value', event.detail.anyja_neve);
		$('#szulN').attr('value', event.detail.szul_nev);
		$('#szulH').attr('value', event.detail.szul_hely);
		$('#szulI').attr('value', event.detail.szul_ido);
		$('#tel').attr('value', event.detail.telefonszam);
		$('#allPorg').attr('value', event.detail.all_polgarsag);
		$('#tizenhatAGy').attr('value', event.detail.tizenhat_alatti_gyermek);
		$('#nem').attr('value', event.detail.nem);
		$('#hazas').attr('value', event.detail.hazas_e);
		$('#allandoLak').attr('value', event.detail.allando_lakhely);
		$('#tartHely').attr('value', event.detail.tartozkodasi_hely );
		$('#adoAzon').attr('value', event.detail.adoazon_jel);
		$('#tajSz').attr('value', event.detail.tajszam);
		$('#bankSZ').attr('value', event.detail.banszamla_szam);

		$('#gId').hide();
		$('#adatok2').hide();
		$('.ment').on('click', function() {
			console.log('ment');
			let gId = $('#id').val();
			let nev = $('#nev').val();
			let anyjaNeve = $('#anyjaNeve').val();
			let szulN = $('#szulN').val();
			let szulH = $('#szulH').val();
			let szulI = $('#szulI').val();
			let tel = $('#tel').val();
			let allPorg = $('#allPorg').val();
			let tizenhatAGy = $('#tizenhatAGy').val();
			let nem = $('#nem').val();
			let hazas = $('#hazas').val();
			let allandoLak = $('#allandoLak').val();
			let tartHely = $('#tartHely').val();
			let adoAzon = $('#adoAzon').val();
			let tajSz = $('#tajSz').val();
			let bankSZ = $('#bankSZ').val();

			let adat = {
				id: gId,
				nev: nev,
				anyja_neve: anyjaNeve,
				szul_nev: szulN,
				szul_hely: szulH,
				szul_ido: szulI,
				telefonszam: tel,
				all_polgarsag: allPorg,
				tizenhat_alatti_gyermek: tizenhatAGy,
				nem: nem,
				hazas_e: hazas,
				allando_lakhely: allandoLak,
				tartozkodasi_hely: tartHely,
				adoazon_jel: adoAzon,
				tajszam: tajSz,
				banszamla_szam : bankSZ
			};
			console.log(gId);
			ajax.putAjax(vegpont, adat, gId);
			// $(".urlap").hide();
			location.reload(); //Az aktuális dokumentum újratöltése
			//ajax.getAjax(vegpont, fenntLista);
		});
	});

	$(window).on('torol', (event) => {
		console.log('torles');
		ajax.deleteAjax(vegpont, event.detail.id);
        console.log(event.detail.id);
        //ajax.getAjax(vegpont, fenntLista);
        location.reload();
	});

	$('.adatModositEnged').on('click', function() {
		console.log('modositEnged');
		$('input').removeAttr('readonly');
	});

    $("#urlap1").on('click', function(){
        $('#adatok2').hide();
        $('#adatok1').show();
    });
    $("#urlap2").on('click', function(){
        $('#adatok1').hide();
        $('#adatok2').show();
    });
});
