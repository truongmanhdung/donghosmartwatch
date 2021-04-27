var product_link = document.querySelectorAll('.product_link');
var name2 = document.querySelectorAll('.product_name h5');
var price2 = document.querySelectorAll('.price2');
var img = document.querySelectorAll('.product_img img');
for (let i = 0; i < product_link.length; i++) {
    product_link[i].onclick = function () {
        sessionStorage.setItem('price2', price2[i].innerHTML);
        sessionStorage.setItem('img2', img[i].src);
        sessionStorage.setItem('name2', name2[i].innerHTML);
    }
    
}
var img_sp = document.querySelector('.img_sp');
var name1 = document.querySelector('.sp-body-heading h5');
var name3 = document.querySelector('.sp_content h5');
var price = document.querySelector('.gia');
    img_sp.src = sessionStorage.getItem('img2');
    name1.innerHTML = sessionStorage.getItem('name2');
    name3.innerHTML = sessionStorage.getItem('name2');
    price.innerHTML = sessionStorage.getItem('price2');
    sessionStorage.setItem('namedung',name1.innerHTML);
    sessionStorage.setItem('giadung',price.innerHTML);
    sessionStorage.setItem('imgdung',img_sp.src);