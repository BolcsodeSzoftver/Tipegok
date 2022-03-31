$(function () {
    $(".modositGomb").on("click", function () {
        console.log("szia modosit");
        let id = this.id;
        console.log(this.id);
        $("#dolgozoId").val(id);
        $(".adatokDolgozo")
            .find(".nev")
            .each(function () {
                console.log(this.id);
                console.log(id);
                if (this.id === id) {
                    console.log($(this).text());
                    $("#nev").val($(this).text());
                }
            });

        $(".adatokDolgozo")
            .find(".allandoLakhely")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#allandoLak").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".telefonszam")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#tel").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".anyjaNev")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#anyjaNeve").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".szulN")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#szulN").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".szulH")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#szulH").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".szulI")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#szulI").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".cim")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#allandoLak").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".tartHely")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#tartHely").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".taj")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#tajSz").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".adoA")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#adoAzon").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".bankSz")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#bankSZ").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".nem")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#nem").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".hazas")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#hazas").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".gyerek")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#tizenhatAGy").val($(this).text());
                }
            });
        $(".adatokDolgozo")
            .find(".polgar")
            .each(function () {
                if (this.id === id) {
                    console.log($(this).text());
                    $("#allPorg").val($(this).text());
                }
            });
    });
});