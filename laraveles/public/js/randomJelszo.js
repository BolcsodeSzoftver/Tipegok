$(function () {
    let randomstring = Math.random().toString(36).slice(-8);
    $(".jelszoGeneralas").on("click", function () {
        $("#jelszo").val(randomstring);
        console.log(randomstring)
    });
   
});
