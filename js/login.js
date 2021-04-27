$(document).ready(function () {
    $('.dn').click(function (e) { 
        e.preventDefault();
        $('.span1').addClass('hover_span');
        $('.span2').removeClass('hover_span');
        $('.dangnhap').addClass('login_hien');
        $('.dangki').removeClass('login_hien');
    });
    $('.dk').click(function (e) { 
        e.preventDefault();
        $('.span2').addClass('hover_span');
        $('.span1').removeClass('hover_span');
        $('.dangki').addClass('login_hien');
        $('.dangnhap').removeClass('login_hien');
    });
    setTimeout(() => {
        alert("bạn phải đăng nhập hoặc đăng kí");
    }, 2000);
    setTimeout(() => {
        $('.login').addClass('login_bandau');
    }, 4000);
});