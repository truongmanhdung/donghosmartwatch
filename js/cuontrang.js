$(document).ready(function() {
    $(window).scroll(function() {
        var pos_body = $('html,body').scrollTop();
        var product1 = $('.header-content-item').offset().top;
        var product2 = $('.product2').offset().top;
        var product3 = $('.product3').offset().top;

        var product4 = $('.product4').offset().top;
        var product5 = $('.product5').offset().top;
        var product6 = $('.product6').offset().top;
        var product7 = $('.product7').offset().top;
        var product8 = $('.product8').offset().top;
        var product9 = $('.product9').offset().top;
        var product10 = $('.product10').offset().top;
        var product11 = $('.product11').offset().top;
        var product12= $('.product12').offset().top;
        var product13 = $('.product13').offset().top;
        var product14 = $('.product14').offset().top;
        var product15 = $('.product15').offset().top;
        var product16 = $('.product16').offset().top;
        var product17 = $('.product17').offset().top;
        var product18= $('.product18').offset().top;
        $("#trangchu").scroll(function(){
            $('.nav-link_tt').addClass('nav-select');
          });
        if (pos_body > 600) {
            $('.menu').addClass('co-dinh-menu');
           
        } else {
            $('.menu').removeClass('co-dinh-menu');
        }
        if (pos_body > 1200) {
            $('.back-to-top').addClass('hien-ra');
            
        } else {
            $('.back-to-top').removeClass('hien-ra');
            
        }
        if (pos_body > product1-600) {
            $('.header-content-item').addClass('animate__animated animate__fadeInLeftBig');
        }
        if (pos_body > product2 - 500) {
            $('.product2').addClass('animate__animated animate__fadeInUpBig');
        }
        if (pos_body > product3 - 400) {
            $('.product3').addClass('animate__animated animate__fadeInDownBig');
        }
        if (pos_body > product4 - 300) {
            $('.product4').addClass('animate__animated animate__fadeInUpBig');
        }
        if (pos_body > product5 - 500) {
            $('.product5').addClass('animate__animated animate__fadeInDownBig');
        }
        if (pos_body > product6 - 500) {
            $('.product6').addClass('animate__animated animate__fadeInUpBig');
        }
        if (pos_body > product7 - 500) {
            $('.product7').addClass('animate__animated animate__fadeInLeftBig');
        }
        if (pos_body > product8 - 500) {
            $('.product8').addClass('animate__animated animate__fadeInDownBig');
        }
        if (pos_body > product9 - 500) {
            $('.product9').addClass('animate__animated animate__fadeInRightBig');
        }
        if (pos_body > product10 - 500) {
            $('.product10').addClass('animate__animated animate__fadeInDownBig');
        }
        if (pos_body > product11 - 500) {
            $('.product11').addClass('animate__animated animate__fadeInUpBig');
        }
        if (pos_body > product12 - 500) {
            $('.product12').addClass('animate__animated animate__fadeInDownBig');
        }
        if (pos_body > product13 - 500) {
            $('.product13').addClass('animate__animated animate__fadeInUpBig');
        }
        if (pos_body > product14 - 500) {
            $('.product14').addClass('animate__animated animate__fadeInDownBig');
        }
        if (pos_body > product15 - 600) {
            $('.product15').addClass('animate__animated animate__fadeInUpBig');
        }
        if (pos_body > product16 - 600) {
            $('.product16').addClass('animate__animated animate__fadeInUpBig');
        }
        if (pos_body > product17 - 500) {
            $('.product17').addClass('animate__animated animate__fadeInLeftBig');
        }
        if (pos_body > product18 - 500) {
            $('.product18').addClass('animate__animated animate__fadeInRightBig');
        }
    });
    $('.back-to-top').click(function(e) {
        e.preventDefault();
        $('html,body').animate({
                scrollTop: 0
            },
            1000);
    });
});