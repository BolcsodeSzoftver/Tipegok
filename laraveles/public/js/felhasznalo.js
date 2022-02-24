$(function () {
    $(".modositGomb").on("click", function () {
        let id = this.id;
        $("#usersId").val(id);
        $(".adatok").find(".nev").each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#nameInput").val($(this).text());
                }
            });
      $(".adatok")
            .find(".email")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#emailInput").val($(this).text());
                }
            }); 

    });
});
