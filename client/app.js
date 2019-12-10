/*
$.getJSON('http://127.0.0.1:8000/api/ponts/2', function(data) {
    console.log(data)
});*/
let url = 'http://127.0.0.1:8000/api/ponts/2';

function buttonClickGET() {

    fetch(url)
        .then(res => res.json())
        .then((out) => {
            console.log('Checkout this JSON! ', out);
        })
        .catch(err => {
            throw err
        });
}
