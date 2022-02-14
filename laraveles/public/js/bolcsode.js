$(function () {
    let fajlnev = "/api/bolcsode";
    let ajaxhivas = new AjaxHivas();
    ajaxhivas.getAjax(fajlnev, adatLista);
  
    
    

    //$(".modositUrlap").hide();


    $(window).on('torol', (event) => {
		console.log('torles');
		ajaxhivas.deleteAjax(fajlnev, event.detail.id);
        console.log(event.detail.id);
        //ajaxhivas.getAjax(fajlnev, adatLista);
        location.reload();
	});
    
    $(".adatModositEnged").on("click", function(){
        console.log('modositEnged');
        $('input').removeAttr('readonly');

    });
    $("#ujBolcsi").on("click", function(){
        console.log('ujBolcsi');
        $("#idB").hide();
        $("#adatokMod").hide();
        $('input').removeAttr('readonly');    

    });
  
  
});
