$(function () {
    let fajlnev = "/api/bolcsode";
    let ajaxhivas = new AjaxHivas();
    ajaxhivas.getAjax(fajlnev, adatLista);
  //--
  //külön osztályba:
    function adatLista(bolcsodek) {
      const szuloElem = $(".table");
      const sablonElem = $(".adatok");
  
      bolcsodek.forEach(function (adat) {
        let ujElem = sablonElem.clone().appendTo(szuloElem);
        const bolcsode = new Bolcsode(ujElem, adat);
      });
      sablonElem.remove();
    }
    //--
    
    $(".modositUrlap").hide();
  
    $(window).on("modosit", (event) => {
      $(".modositUrlap").show();
      $("#id").attr("value", event.detail.id);
      $("#cim").attr("value", event.detail.cim);
      $("#nev").attr("value", event.detail.nev);
      $("#agazatiAzon").attr("value", event.detail.agazati_azon);
      $("#szgyfKod").attr("value", event.detail.szgyf_kod);
      $("#ferohelyekSzama").attr("value", event.detail.ferohelyek_szama);
      $("#feorAzon").attr("value", event.detail.feor);
      $("#agazatiPotlek").attr("value", event.detail.agazati_potlek);
    
  
       $('#idB').hide();
      $("#Ujmodositadat").on("click", function () {
        console.log("modositasadat!");
        let id = $("#id").val();
        let cim = $("#cim").val();
        let nev = $("#nev").val();
        let agazatiAzon = $("#agazatiAzon").val();
        let szgyfKod = $("#szgyfKod").val();
        let ferohelyek_szama = $("#ferohelyekSzama").val();
        let feor = $("#feorAzon").val();
        let agazatiPotlek = $("#agazatiPotlek").val();
        let adat = {
          "id": id,
          "cim": cim,
          "nev": nev,
          "agazati_azon": agazatiAzon,
          "szgyf_kod": szgyfKod,
          "ferohelyek_szama": ferohelyek_szama,
          "feor": feor,
          "agazati_potlek": agazatiPotlek,
        };
        console.log(adat);
        console.log(fajlnev)
        console.log(id);
        ajaxhivas.putAjax(fajlnev, adat,id);
       
        $(".modositUrlap").hide();
        ajaxhivas.getAjax(fajlnev, adatLista);

      });
    });
    
   
  });
  