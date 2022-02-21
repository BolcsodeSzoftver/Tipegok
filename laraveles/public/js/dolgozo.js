$(function() {
	let vegpont = '/api/dolgozo';
	let ajax = new AjaxHivas();

	ajax.getAjax(vegpont, dolgozoLista);

	$(".megerositTorles").on("click", () => {
        console.log("megerositTorles");
        ajax.deleteAjax(vegpont, $(".megerositTorles").attr("id"));
        location.reload();
    });

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
		$('#tartHely').attr('value', event.detail.tartozkodasi_hely);
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
				banszamla_szam: bankSZ
			};
			console.log(gId);
			ajax.putAjax(vegpont, adat, gId);
			// $(".urlap").hide();
			location.reload(); //Az aktuális dokumentum újratöltése
			//ajax.getAjax(vegpont, fenntLista);
		});
	});

	$(window).on('torol', (event) => {
        console.log('toroleees')
		$(".megerositTorles").attr("id", event.detail.id);
	});

	$('.adatModositEnged').on('click', function() {
		console.log('modositEnged');
		$('input').removeAttr('readonly');
	});

	$('#urlap1').on('click', function() {
		$('#adatok2').hide();
		$('#adatok1').show();
	});
	$('#urlap2').on('click', function() {
		$('#adatok1').hide();
		$('#adatok2').show();
	});

	tablazatFejlecElrejtese();
	function tablazatFejlecElrejtese(){
		for (let i = 2; i < 6; i++) {
			$('.t' + i).hide();
		}
	}

	$('#adatokT1').css('background-color', 'gray');
	$('#adatokT1').css('color', 'white');
	for (let i = 1; i < 6; i++) {
		$('#adatokT' + i).on('click', function() {
			for (let k = 1; k < 5; k++) {
				$('#adatokT' + (i + k)).css('background-color', 'white');
				$('#adatokT' + (i + k)).css('color', 'blue');
				$('#adatokT' + (i - k)).css('background-color', 'white');
				$('#adatokT' + (i - k)).css('color', 'blue');
				$('.t' + (i + k)).hide();
				$('.t' + (i - k)).hide();
			}
			$('#adatokT' + i).css('background-color', 'gray');
			$('#adatokT' + i).css('color', 'white');
			$('.t' + i).show();
		});
	}

	$('#szo').on('keyup', function() {
		tablaFejlecKiir();		
		let eleresiut = '/dolgozo/' + $('#szo').val();
		console.log(eleresiut);
		ajax.getAjax(eleresiut, dolgozoLista);
	});

	$('#dNev').on('click', function() {
		tablaFejlecKiir();
		console.log('rendez');
		ajax.getAjax(vegpont, rendezes);
	});

	function tablaFejlecKiir(){
		$('.table').empty();
		$('.table').append(` <tr>
		<th scope="col"></th>
		<th scope="col"></th>
		<th id="dNev" scope="col">Név</th>
		
		  <th class="t1" scope="col">Cím</th>
		  <th class="t1" scope="col">Telefonszám</th>
		  <th class="t1" scope="col">Anyja neve</th>

		  <th class="t2" scope="col">Születési név</th>
		  <th class="t2" scope="col">Születési hely</th>
		  <th class="t2" scope="col">Születési idő</th>
		
		  <th class="t3" scope="col">Állandó lakhely</th>
		  <th class="t3" scope="col">Tartozkodási hely</th>
	  
		  <th class="t4" scope="col">Tajszám</th>
		  <th class="t4" scope="col">Adóazonosító</th>
		  <th class="t4" scope="col">Bankszámla szám</th>
	  
		  <th class="t5" scope="col">Nem</th>
		  <th class="t5" scope="col">Házas</th>
		  <th class="t5" scope="col">16 éven aluli gyermekek száma</th>
		  <th class="t5" scope="col">Állam polgárság</th>
		
	  </tr>`);
	  
	}
});