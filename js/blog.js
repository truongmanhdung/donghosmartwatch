$(document).ready(function () {
    var h3_click = document.querySelectorAll('.post-text h3 a');
    var img_post = document.querySelectorAll('.blog_img img');
    var post_text = document.querySelectorAll('.post_text');
    for (let i = 0; i < h3_click.length; i++) {
        h3_click[i].onclick = function () {
            sessionStorage.setItem("h3_text",h3_click[i].innerHTML);
            sessionStorage.setItem("img_post",img_post[i].src);
            sessionStorage.setItem("post_text",post_text[i].innerHTML);
        }
    }
    var btn_send = document.querySelectorAll('.btn_send');
    for (let i = 0; i < btn_send.length; i++) {
        btn_send[i].onclick = function () {
            sessionStorage.setItem("h3_text",h3_click[i].innerHTML);
            sessionStorage.setItem("img_post",img_post[i].src);
            sessionStorage.setItem("post_text",post_text[i].innerHTML);
        }
        
    }
});