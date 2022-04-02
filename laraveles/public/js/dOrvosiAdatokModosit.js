$(function() {
	$('.orvosiAdatokGomb').on('click', function() {
		let id = this.id;
		console.log(this.id);
		ajax.getAjax(eleresiUt, orvosiAdatLista);
		function orvosiAdatLista(tomb) {
			/* console.log(tomb); */
			$('#orvosiAdatok').empty();
			tomb.forEach(function(adat) {
				if (adat.alkalmazott_id == id) {
					
				}
			});
		}
	});
});
