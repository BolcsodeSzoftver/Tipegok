$(function () {
    $(".adatModositEnged").on("click", function () {
        $("input").removeAttr("readonly");
    });
    $(".modositGomb").on("click", function () {
        let id = this.id;
        $("#usersId").val(id);
        $(".adatok").find(".nev").each(function () {
                if (this.id === id) {
                    $("#nameInput").val($(this).text());
                }
            });
      $(".adatok")
            .find(".email")
            .each(function () {
                if (this.id === id) {
                    $("#emailInput").val($(this).text());
                }
            }); 

    });
});
