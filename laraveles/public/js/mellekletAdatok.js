 class Adatok{
	constructor(elem, adat){
		this.elem=elem;
		this.adat=adat;

		this.nev=this.elem.children("#nev");
		this.szulH=this.elem.children("#szulHely");
		this.szulI=this.elem.children("#szulIdo");
		this.anyjaN=this.elem.children("#anyjaNeve");

		this
	}

	setAdatok(ertek){
		this.nev.attr('value',ertek.nev);
		this.szulH.attr('value',ertek.szul_hely);
		this.szulI.attr('value',ertek.szul_ido);
		this.anyjaN.attr('value',ertek.anyja_neve);
	}
} 

$(function () {
	let ajax = new AjaxHivas();

	let fajlnev="/melleklet1/"+1;
	console.log(fajlnev);
		

	/* function adatLista(tomb) {
		const szuloElem = $(".table");
		const sablonElem = $(".adatok");
	   
		tomb.forEach(function (adat) {
		   let ujElem = sablonElem.clone().appendTo(szuloElem);
			const bolcsode = new Adatok(szuloElem, ujElem);         
		});
	
		sablonElem.remove();
	}  */
}); 