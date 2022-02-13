class Alkalmazott {
	constructor(elem, adat) {
		this.elem = elem;
		this.adat = adat;

        this.gombModosit = elem.children('.modosit');
		this.gombTorol = elem.children('.torol');

		this.nev = elem.children('#nev');
		this.cim = elem.children('#cim');
        this.tel = elem.children('#tel');
		this.anyjaN = elem.children('#anyjaNeve');
		
		this.szulNev = elem.children('#szulN');
		this.szulHely = elem.children('#szulH');
        this.szulIdo = elem.children('#szulI');
		this.adoazonJel = elem.children('#adoA');
		this.tajSzam = elem.children('#taj');
		this.nem = elem.children('#nem');
        this.bankszamlaSzam = elem.children('#bankSz');
		this.tartozkodasiHely = elem.children('#tartHely');
		this.hazasE = elem.children('#hazas');
		this.tAlattiGy = elem.children('#gyerek');
        this.allPorg = elem.children('#polgar'); 

		this.setAdatok(this.adat);

		this.gombModosit.on('click', () => {
			console.log('modosit');
			this.kattintasTrigger('modosit');
		});
		this.gombTorol.on("click", () => {
			console.log("gom");
			this.kattintasTrigger("torol");
			
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
		let esemeny = new CustomEvent(esemenyneve, {detail: this.adat });
		window.dispatchEvent(esemeny);
	}
}