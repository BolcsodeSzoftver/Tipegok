class Bolcsode {
	constructor(tabla, adat) {
		this.sablon = ` <tr class="adatok">
		<td class="modositBolcsi">
			<button class="btn btn-primary" id="modositadat" type="button" data-toggle="modal"
				data-target="#exampleModalLong">
				<i class='fa fa-edit'></i>
			</button>
		</td>
		<td class="torolBolcsi">
			<button class="btn btn-primary" id="toroladat" type="button" data-toggle="modal" data-target="#exampleModalCenter">
				<i class="fa fa-trash"></i>
			</button>
		</td>
		<td class="cim"></td>
		<td class="nev"></td>
		<td class="agazati_azon"></td>
		<td class="szgyf_kod"></td>
		<td class="ferohelyek_szama"></td>
		<td class="feor"></td>
		<td class="agazati_potlek"></td>
		</tr>`;
		this.tabla = tabla;
		this.tabla.append(this.sablon);
		this.elem = this.tabla.find('tr:last');
		this.adat = adat;
		this.gombModosit = this.elem.children('.modositBolcsi');
		this.gombTorol = this.elem.children('.torolBolcsi');
		

		this.cimElem = this.elem.children('.cim');
		this.nevElem = this.elem.children('.nev');
		this.agazatiAzonElem = this.elem.children('.agazati_azon');
		this.szgyfKodElem = this.elem.children('.szgyf_kod');
		this.feroHelyekSzamaElem = this.elem.children('.ferohelyek_szama');
		this.feorElem = this.elem.children('.feor');
		this.agazatiPotlekElem = this.elem.children('.agazati_potlek');
		this.setAdatok(this.adat);
		this.gombModosit.on('click', () => {
			this.kattintasTrigger('modosit');
		});
		  this.gombTorol.on('click', () => {;
			this.kattintasTrigger('EsemenyTorolBolcsi');
		});  
		
	}

	setAdatok(ertekek) {
		this.cimElem.html(ertekek.cim);
		this.nevElem.html(ertekek.nev);
		this.agazatiAzonElem.html(ertekek.agazati_azon);
		this.szgyfKodElem.html(ertekek.szgyf_kod);
		this.feroHelyekSzamaElem.html(ertekek.ferohelyek_szama);
		this.feorElem.html(ertekek.feor);
		this.agazatiPotlekElem.html(ertekek.agazati_potlek);
	}
	kattintasTrigger(esemenyneve) {
		let esemeny = new CustomEvent(esemenyneve, {
			detail: this.adat
		});
		window.dispatchEvent(esemeny);
	}
}
