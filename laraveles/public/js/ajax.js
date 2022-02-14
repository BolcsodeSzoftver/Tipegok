class AjaxHivas {
    constructor() {}
    getAjax(fajlnev, myCallback) {
        const bolcsodek = [];
        $.ajax({
            url: fajlnev,
            type: "GET",
            success: function (result) {
                
                result.forEach((element) => {
                    bolcsodek.push(element);
                });

                myCallback(bolcsodek);
            },
        });
    }
    postAjax(fajlnev, adat) {
        $.ajax({
            url: fajlnev,
            type: "POST",
            data: adat,
            success: function (result) {},
        });
    }
    putAjax(fajlnev, adat, id) {
        console.log(adat);
        $.ajax({
            url: fajlnev + "/" + id,
            type: "PUT",
            data: adat,
            success: function (result) {},
            error: function (xhr, textStatus, errorThrown) {
                console.log(
                    "STATUS: " + textStatus + "\nERROR THROWN: " + errorThrown
                );
            },
        });
    }
    deleteAjax(fajlnev, id) {
        $.ajax({
            url: fajlnev + "/" + id,
            type: "DELETE",
            success: function (result) {},
        });
    }
}
