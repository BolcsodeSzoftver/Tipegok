class UjDolgozo {
    constructor(elem) {
        this.elem = elem;

        this.gombMent = this.elem.children(".mentes");

        this.gombMent.on("click", () => {
            console.log("mentes");
            this.kattintasTrigger("mentes");
        });
    }

    kattintasTrigger(esemenyneve) {
        let esemeny = new CustomEvent(esemenyneve, {
            detail: this.adat,
        });
        window.dispatchEvent(esemeny);
        console.log("kattintastrigger");
    }

    
}
