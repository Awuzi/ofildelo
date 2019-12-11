$.getJSON("http://127.0.0.1:8000/api/ponts", function (datas) {
    let lesPonts = JSON.parse(JSON.stringify(datas));
    lesPonts.forEach(unPont => {
        $('.listePonts').append(`
                <div class="card card-accent-dark">
                    <div class="card-body">
                        <h5 class="card-title elem_patri font-weight-bold">${unPont.elem_patri}</h5>
                        <div class="card-title">
                            <span class="commune">${unPont.commune}</span> <span class="identifiant">(${unPont.identifiant.substring(0, 2)})</span>
                        </div>
                    <p class="text text-muted elem_princ">${unPont.elem_princ}</p>
                    </div>
                    <div class="card-footer">
                       <a href="#" class="text-right far fa-heart float-right text-decoration-none" onclick="addFavoris(${unPont.identifiant})"></a>
                    </div>
                </div>
        `);
    });
});

//stocker les favoris localement comme dans le TP avec storage.js
function addFavoris(id) {
    let mesFavoris = [];
    mesFavoris = id;
    console.log(mesFavoris);
}