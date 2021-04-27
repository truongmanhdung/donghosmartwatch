$(document).ready(function () {
    var tt = document.querySelector('.tt_hd');
    var work = document.querySelector('.work h1');
    var text = document.querySelector('.text_get');
    var img = document.querySelector('.img_get');
    console.log(sessionStorage.getItem('kinhte'));
    console.log(sessionStorage.getItem('hoatdong'));
    if (sessionStorage.getItem('kinhte') == '') {
        tt.innerHTML = sessionStorage.getItem('hoatdong');
        work.innerHTML = sessionStorage.getItem('hoatdong');
        text.innerHTML = sessionStorage.getItem('text_hd');
        img.src = sessionStorage.getItem('img_hd');
    }
    if(sessionStorage.getItem('hoatdong') == ''){
        tt.innerHTML = sessionStorage.getItem('kinhte');
        work.innerHTML = sessionStorage.getItem('kinhte');
        text.innerHTML = sessionStorage.getItem('text_kt');
        img.src = sessionStorage.getItem('img_kt');
    }
});
