class Alkalmazott {
	constructor(tabla, adat) {
		this.sablon = `<tr class="adatok">
		<td class="modosit">
		  <button class="btn btn-primary" id="modositadat" type="button" data-toggle="modal"
			  data-target="#exampleModalLong">
			  <i class='fa fa-edit'></i>
		  </button>
	  </td>
	  <td class="torol">
		  <button class="btn btn-primary" id="toroladat" type="button">
			  <i class="fa fa-trash"></i>
		  </button>
	  </td>
		<td id="nev"></td>
		
		  <td class="t1" id="cim"></td>
		  <td class="t1" id="tel"></td>
		  <td class="t1" id="anyjaNeve"></td>
		
		  <td class="t2" id="szulN"></td>
		  <td class="t2" id="szulH"></td>
		  <td class="t2" id="szulI"></td>
	   
		  <td class="t3" id="cim"></td>
		  <td class="t3" id="tartHely"></td>
		
		  <td class="t4"id="taj"></td>
		  <td class="t4"id="adoA"></td>
		  <td class="t4"id="bankSz"></td>
	   
		  <td class="t5" id="nem"></td>
		  <td class="t5" id="hazas"></td>
		  <td class="t5" id="gyerek"></td>
		  <td class="t5" id="polgar"></td>
		
	  </tr>`;
		this.tabla = tabla;
		this.tabla.append(this.sablon);
		this.elem = this.tabla.find('tr:last');
		this.adat = adat;

		this.gombModosit = this.elem.children('.modosit');
		this.gombTorol = this.elem.children('.torol');

		this.nev = this.elem.children('#nev');
		this.cim = this.elem.children('#cim');
		this.tel = this.elem.children('#tel');
		this.anyjaN = this.elem.children('#anyjaNeve');

		this.szulNev = this.elem.children('#szulN');
		this.szulHely = this.elem.children('#szulH');
		this.szulIdo = this.elem.children('#szulI');
		this.adoazonJel = this.elem.children('#adoA');
		this.tajSzam = this.elem.children('#taj');
		this.nem = this.elem.children('#nem');
		this.bankszamlaSzam = this.elem.children('#bankSz');
		this.tartozkodasiHely = this.elem.children('#tartHely');
		this.hazasE = this.elem.children('#hazas');
		this.tAlattiGy = this.elem.children('#gyerek');
		this.allPorg = this.elem.children('#polgar');

		this.setAdatok(this.adat);

		this.gombModosit.on('click', () => {
			console.log('modosit');
			this.kattintasTrigger('modosit');
		});
		this.gombTorol.on('click', () => {
			console.log('gom');
			this.kattintasTrigger('torol');
		});
	}

	setAdatok(ertekek) {
		this.nev.html(ertekek.nev);
		this.cim.html(ertekek.allando_lakhely);
		this.tel.html(ertekek.telefonszam);
		this.anyjaN.html(ertekek.anyja_neve);

		this.szulNev.html(ertekek.szul_nev);
		this.szulHely.html(ertekek.szul_hely);
		this.szulIdo.html(ertekek.szul_ido);
		this.adoazonJel.html(ertekek.adoazon_jel);
		this.tajSzam.html(ertekek.tajszam);
		this.nem.html(ertekek.nem);
		this.bankszamlaSzam.html(ertekek.banszamla_szam);
		this.tartozkodasiHely.html(ertekek.tartozkodasi_hely);
		this.hazasE.html(ertekek.hazas_e);
		this.tAlattiGy.html(ertekek.tizenhat_alatti_gyermek);
		this.allPorg.html(ertekek.all_polgarsag);
	}

	kattintasTrigger(esemenyneve) {
		let esemeny = new CustomEvent(esemenyneve, { detail: this.adat });
		window.dispatchEvent(esemeny);
	}
}