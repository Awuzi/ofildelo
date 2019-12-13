$.getJSON("http://127.0.0.1:8000/api/ponts", function (datas) {
    let lesPonts = JSON.parse(JSON.stringify(datas));
    lesPonts.sort((a, b) => (a.commune > b.commune) ? 1 : ((b.commune > a.commune) ? -1 : 0)); //ranger les ponts par ordre alphabetique commune
    lesPonts.forEach(unPont => {
        function pontViaducOuPasserelle() {
            let typePont = unPont.elem_patri.split(' ')[0].toLowerCase();
            return unPont.elem_patri.split(' ')[0].toLowerCase() === 'pont' ? 'pont' : typePont === 'passerelle' ? 'passerelle' : typePont === 'viaduc' ? 'viaduc' : typePont === 'front' ? 'front' : 'autre';
            /*            if (typePont === 'pont') {
                            typePont = 'pont';
                        } else if (typePont === 'passerelle') {
                            typePont = 'passerelle';
                        } else if (typePont === 'viaduc') {
                            typePont = 'viaduc';
                        } else {
                            typePont = 'autres';
                        }*/
        }

        $('.listePonts').append(`
                <tr>
                    <td class="commune">${unPont.commune}</td>
                    <td>${unPont.elem_patri}</td>
                    <td style="text-align: center">${unPont.identifiant.substring(0, 2)}</td>
                    <td>${unPont.elem_princ}</td>
                    <td class="typePont" hidden> ${pontViaducOuPasserelle(unPont.elem_patri.split(' ')[0])}</td>
                </tr>
        `);
    });
});


$(document).ready(function () {
    $("input:checkbox").on("change", function () {
        var a = $("input:checkbox:checked").val();
        console.log(a);
        if ($(this).prop("checked")) {
            $(".typePont:not(:contains(" + a + "))").parent().hide();
        } else {
            $(".typePont").parent().show();
        }
    });
});


//stocker les favoris localement comme dans le TP avec storage.js
function addFavoris(id) {
    let mesFavoris = [];
    mesFavoris = id;
    console.log(mesFavoris);
}