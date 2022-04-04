class AjaxHivas {
    constructor() {}
    getAjax(eleresiUt, myCallback) {
        const tomb = [];
        $.ajax({
            url: eleresiUt,
            type: "GET",
            success: function (result) {
                
                result.forEach((element) => {
                    tomb.push(element);
                });

                myCallback(tomb);
            },
        });
    }
    postAjax(eleresiUt, adat) {
        $.ajax({
            url: eleresiUt,
            type: "POST",
            data: adat,
            success: function (result) {},
        });
    }
    putAjax(eleresiUt, adat, id) {
        console.log(adat);
        $.ajax({
            url: eleresiUt + "/" + id,
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
    deleteAjax(eleresiUt, id) {
        $.ajax({
            url: eleresiUt + "/" + id,
            type: "DELETE",
            success: function (result) {},
        });
    }
}
