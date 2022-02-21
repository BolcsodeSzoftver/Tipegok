class Fenntarto {
	constructor(elem, adat) {
		this.elem = elem;
		this.adat = adat;

		this.gombModosit = elem.children('.modosit');
		this.gombTorol = elem.children('.torol');

		this.nev = elem.children('.nev');
		this.kepviselo = elem.children('.kepviselo');
		this.megye = elem.children('.megye');
		this.szekhely = elem.children('.szekhely');
		this.agazatiAzon = elem.children('.agazatiA');
		this.adoszam = elem.children('.adoszam');
		this.cegjSzam = elem.children('.cegjSzam');
		this.statSzam = elem.children('.statSzam');
		this.kHivatal = elem.children('.kHivatal');
		this.bolcsiSzam = elem.children('.bolcsiSzam');
		this.oNev = elem.children('.oNev');
		this.oTel = elem.children('.oTel');
		this.oCim = elem.children('.oCim');

		this.setAdatok(this.adat);

		this.gombModosit.on('click', () => {
			console.log('modosit');
			this.kattintasTrigger('modosit');
		});

		this.gombTorol.on('click', () => {
			this.kattintasTrigger('torol');
		});
	}

	setAdatok(ertekek) {
		this.nev.html(ertekek.nev);
		this.kepviselo.html(ertekek.kepviselo);
		this.megye.html(ertekek.megye);
		this.szekhely.html(ertekek.szekhely);
		this.agazatiAzon.html(ertekek.agazati_azon);
		this.adoszam.html(ertekek.adoszam);
		this.cegjSzam.html(ertekek.cegjegyzekszam);
		this.statSzam.html(ertekek.statisztikaiszam);
		this.kHivatal.html(ertekek.illetekes_kormányh);
		this.bolcsiSzam.html(ertekek.bolcsodek_szama);
		this.oNev.html(ertekek.uzemorvos_nev);
		this.oTel.html(ertekek.uzemorvos_telefonszam);
		this.oCim.html(ertekek.uzemorvos_cim);
	}

	kattintasTrigger(esemenyneve) {
		let esemeny = new CustomEvent(esemenyneve, {detail: this.adat });
		window.dispatchEvent(esemeny);
	} 
}