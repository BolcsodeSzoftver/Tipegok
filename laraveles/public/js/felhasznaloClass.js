class Felhasznalo {
    constructor(elem, adat) {
        this.elem = elem;
        this.adat = adat;

        this.gombModosit = elem.children(".modosit");
        this.gombTorol = elem.children(".torol");

        this.name = elem.children(".nev");
        this.email = elem.children(".email");
        this.setAdatok(this.adat);

        this.gombModosit.on('click', () => {
			console.log('modosit');
			this.kattintasTrigger('modosit');
		});

        this.gombTorol.on('click', () => {
            console.log('torol');
			this.kattintasTrigger('torol');
		});
    }

    setAdatok(ertekek) {
        this.name.html(ertekek.name);
        this.email.html(ertekek.email);
    }
    kattintasTrigger(esemenyneve) {
        let esemeny = new CustomEvent(esemenyneve, { detail: this.adat });
        window.dispatchEvent(esemeny);
    }

}
