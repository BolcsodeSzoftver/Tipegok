$(".orvosiAdatokGomb").on("click", function () {
    let id = this.id;
    console.log(this.id);
    ajax.getAjax(eleresiUt, orvosiAdatLista);
});