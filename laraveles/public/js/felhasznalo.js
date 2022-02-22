$(function () {
    let vegpont = "/api/felhasznalo";
    let ajax = new AjaxHivas();
    $("#usersId").hide();

    $(window).on("modosit", (event) => {
        console.log('modosiiit')
        console.log(event);

        $("#usersId").attr("value", event.detail.id);
        $("#name").attr("value", event.detail.name);
        console.log(event.detail.name)
        $("#email").attr("value", event.detail.email);

        

        $("#adatMentes").on("click", function () {
            console.log("ment");
            let userId = $("#userId").val();
            let nev = $("#name").val();
            let email = $("#email").val();

            let adat = {
                id: userId,
                name: nev,
                email: email,
            };
            console.log(userId);
            ajax.putAjax(vegpont, adat, userId);
            // $(".urlap").hide();
            location.reload();
        });
    });
    $(window).on("torol", (event) => {
        console.log("törööl");

    });
    $(".adatModositEnged").on("click", function(){
        console.log('modositEnged');

    });
});
