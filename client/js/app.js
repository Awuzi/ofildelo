$.getJSON("http://127.0.0.1:8000/api/ponts", function (datas) {
    let lesPonts = JSON.parse(JSON.stringify(datas));
    lesPonts.sort((a, b) => (a.commune > b.commune) ? 1 : ((b.commune > a.commune) ? -1 : 0)); //ranger les ponts par ordre alphabetique commune
    lesPonts.forEach(unPont => {
        const typePont = unPont.elem_patri.split(' ')[0];
        $('.listePonts').append(`
                <tr>
                    <td class="commune">${unPont.commune}</td>
                    <td>${unPont.elem_patri}</td>
                    <td style="text-align: center">${unPont.identifiant.substring(0, 2)}</td>
                    <td >${unPont.elem_princ}</td>
                </tr>
        `);
    });
});

function filterById() { //recupere l'attribut value de la checkbox qui à été cliquée
    $('input:checkbox').click(function () {
        if ($(this).prop("checked")) {
            $(".commune:not(:contains(" + $(this).attr('value') + "))").parent().parent().parent().hide();
        } else {
            $(".commune:not(:contains(" + $(this).attr('value') + "))").parent().parent().parent().show();
        }
    });
}

filterById();

//stocker les favoris localement comme dans le TP avec storage.js
function addFavoris(id) {
    let mesFavoris = [];
    mesFavoris = id;
    console.log(mesFavoris);
}