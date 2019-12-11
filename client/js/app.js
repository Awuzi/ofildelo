$.getJSON("http://127.0.0.1:8000/api/ponts", function (datas) {
    let lesPonts = JSON.parse(JSON.stringify(datas));
    /*    for (let i = 0; i < lesPonts.length ; i++) {
            $("#elem_patri").html(lesPonts[i].elem_patri);
            $("#elem_princ").html(lesPonts[i].elem_princ);
            $("#commune").html(lesPonts[i].commune);
            $("#identifian").html(lesPonts[i].identifiant.substring(0,2));
        }*/
    lesPonts.forEach(unPont => {
        $("#elem_patri").html(unPont.elem_patri);
        $("#elem_princ").html(unPont.elem_princ);
        $("#commune").html(unPont.commune);
        $("#identifian").html("(" + unPont.identifiant.substring(0, 2) + ")");
    });

});

//Plus tard!
/*$.ajax({
    url: './test.php',
    type: 'POST',
    data: {data: objJSon},
    success: function () {
        alert('the data was successfully sent to the server');
    }
});*/
