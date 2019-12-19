$.getJSON("http://127.0.0.1:8000/api/ponts", function (datas) {
    let lesPonts = JSON.parse(JSON.stringify(datas)); //add to array
    //ranger les ponts par ordre alphabetique commune
    lesPonts.sort((a, b) => (a.commune > b.commune) ? 1 : ((b.commune > a.commune) ? -1 : 0));
    lesPonts.forEach(unPont => {
        let pontViaducOuPasserelle = (typePont) => {
            return typePont === 'pont' ? 'pont' : typePont === 'passerelle' ? 'passerelle' : typePont === 'viaduc' ? 'viaduc' : typePont === 'front' ? 'front' : 'autre';
        };
        let getDepartement = (dep) => {
            return dep === '75' ? '75' : dep === '77' ? '77' : dep === '78' ? '78' : dep === '91' ? '91' : dep === '92' ? '92' : dep === '93' ? '93' : dep === '94' ? '94' : dep === '95' ? '95' : null;
        };
        $('.listePonts').append(`
            <tr>
                <td class="commune" id="${unPont.identifiant}">${unPont.commune}</td>
                <td>${unPont.elem_patri}</td>
                <td class="departement" style="text-align: center">${getDepartement(unPont.identifiant.substring(0, 2))} <br> <span class="text-muted font-italic" style="font-size: 10px">(${unPont.identifiant})</span></td>
                <td>${unPont.elem_princ}</td>
                <td class="typePont" hidden> ${pontViaducOuPasserelle(unPont.elem_patri.split(' ')[0].toLowerCase())}</td>
            </tr>
        `);
    });
});

//filtre type
$(document).ready(function () {
    $("input:checkbox").on("change", function () {
        const a = $("input:checkbox:checked").val();
        console.log(a);
        if ($(this).prop("checked")) {
            $(".typePont:not(:contains(" + a + "))").parent().hide();
        } else {
            $(".typePont").parent().show();
        }
    });
});

//filtre departements
$(document).ready(function () {
    $("input:checkbox").on("change", function () {
        const a = $("input:checkbox:checked").val();
        console.log(a);
        if ($(this).prop("checked")) {
            $(".departement:not(:contains(" + a + "))").parent().hide();
        } else {
            $(".departement").parent().show();
        }
    });
});

const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
favorites.forEach(function (favorite) {
    document.getElementById(favorite).addClassName = "fav";
});
document.querySelector('.listePonts').addEventListener('click', function (e) {
    const id = e.target.id,
        index = favorites.indexOf(id);
    if (!id) return;
    if (index === -1) {
        favorites.push(id);
        $('.favList').append(`<li> ${id} </li>`);
    } else {
        favorites.splice(index, 1);
    }
    localStorage.setItem('favorites', JSON.stringify(favorites));
});