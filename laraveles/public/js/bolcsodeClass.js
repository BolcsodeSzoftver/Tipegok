class Bolcsode {
    constructor(elem, adat) {
        this.elem = elem;
        this.adat = adat;
        this.gombModosit = elem.children(".modosit");
        this.gombTorol = elem.children(".torol");

        this.cimElem = elem.children(".cim");
        this.nevElem = elem.children(".nev");
        this.agazatiAzonElem = elem.children(".agazati_azon");
        this.szgyfKodElem = elem.children(".szgyf_kod");
        this.feroHelyekSzamaElem = elem.children(".ferohelyek_szama");
        this.feorElem = elem.children(".feor");
        this.agazatiPotlekElem = elem.children(".agazati_potlek");
        this.setAdatok(this.adat);
        this.gombModosit.on("click", () => {
            console.log("gom");
            this.kattintasTrigger("modosit");
        });
        this.gombTorol.on("click", () => {
            console.log("gom");
            this.kattintasTrigger("torol");
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
            detail: this.adat,
        });
        window.dispatchEvent(esemeny);
        console.log("kattintastrigger");
    }

    szurveKiir(params) {
      
    }
}
