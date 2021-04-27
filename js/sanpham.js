$(document).ready(function () {
    var img_sp = document.querySelector('.img_sp');
    var name1 = document.querySelector('.sp-body-heading h5');
    var name2 = document.querySelector('.sp_content h5');
    var price = document.querySelector('.gia');
    img_sp.src = sessionStorage.getItem('img_src');
    name1.innerHTML = sessionStorage.getItem('name');
    name2.innerHTML = sessionStorage.getItem('name');
    price.innerHTML = sessionStorage.getItem('price');
    
    sessionStorage.setItem('namedung',name1.innerHTML);
    sessionStorage.setItem('giadung',price.innerHTML);
    sessionStorage.setItem('imgdung',img_sp.src);
});