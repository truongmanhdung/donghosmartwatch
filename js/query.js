function animateNumber(finalNumber, delay, startNumber = 0, callback) {
    let currentNumber = startNumber
    const interval = window.setInterval(updateNumber, delay)
    function updateNumber() {
      if (currentNumber >= finalNumber) {
        clearInterval(interval)
      } else {
        currentNumber++
        callback(currentNumber)
      }
    }
  }
  

$(document).ready(function () {
    var autoclick = setInterval(function () {
      $('.swiper-button-next').trigger('click');
    },4000);
    var autoclick2 = setInterval(function () {
      $('.carousel-control-next').trigger('click');
    },8000);

    // swiper js
    const swiper = new Swiper('.swiper-container', {
        // Optional parameters
            direction: 'horizontal',
            loop: true,
            allowSlidePrev: true,
            scrollbar: false,
        
     
      
        // Navigation arrows
        keyboard: {
            enabled: true,
            onlyInViewport: true,
          },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                slidesPerView: 2,
                spaceBetween: 20
                },
                // when window width is >= 480px
                480: {
                slidesPerView: 2,
                spaceBetween: 20
                },
                // when window width is >= 640px
                640: {
                slidesPerView: 3,
                spaceBetween: 20
                },
                1000:{
                    slidesPerView: 5,
                    spaceBetween: 20
                }
                
  }
  
        // And if we need scrollbar
          })
    

          $('.tat-thong-bao').slideUp();
          $('.tat-tb').click(function (e) { 
               e.preventDefault();
               $('.tat-tb').next().slideToggle();
          });
          $('.message2').slideUp();
          $('.message-icon').click(function (e) { 
               e.preventDefault();
               $('.message-icon').next().slideToggle();
          });
          $('.icon-phone').click(function (e) { 
               e.preventDefault();
               alert('bạn có muốn gọi số 0365727226 không?');
          });
    $('.product2_content').slideUp();
    $('.product2_item_list').click(function (e) { 
      e.preventDefault();
      $(this).next().slideToggle();
    });
    $('.product2_item_list1').click(function (e) { 
      e.preventDefault();
      $(this).addClass('bg_active');
      $('.product2_item_list2').removeClass('bg_active');
    });
    $('.product2_item_list2').click(function (e) { 
      e.preventDefault();
      $(this).addClass('bg_active');
      $('.product2_item_list1').removeClass('bg_active');
    });
    $('.input_1').focus(function (e) { 
      e.preventDefault();
      $('.form-group_test span').addClass('width');
    });
    $('.input_1').blur(function (e) { 
      e.preventDefault();
      $('.form-group_test span').removeClass('width');
    });
    var product_kt = document.querySelector('.product-kt');
    var product_hd = document.querySelector('.product-hd');
    var btn_kt = document.querySelector('.product6 .btn_kt');
    var btn_hd = document.querySelector('.product3 .btn_hd');
    var img_kt = document.querySelector('.img_kt img');
    var img_hd = document.querySelector('.img_hd img');
    var text_hd = document.querySelector('.product3 p');
    var text_kt = document.querySelector('.product6 p');
    btn_kt.onclick = function(){
      sessionStorage.setItem('kinhte',product_kt.innerHTML);
      sessionStorage.setItem('hoatdong','');
      sessionStorage.setItem('text_kt',text_kt.innerHTML);
      sessionStorage.setItem('img_kt',img_kt.src);
    };
    btn_hd.onclick = function(){
      sessionStorage.setItem('kinhte','');
      sessionStorage.setItem('hoatdong',product_hd.innerHTML);
      sessionStorage.setItem('text_hd',text_hd.innerHTML);
      sessionStorage.setItem('img_hd',img_hd.src);
    };
    document.documentElement.style.setProperty('--animate-duration', '2s');
    var submit_sp = document.querySelectorAll('.btn_sp');
    var sp_name = document.querySelectorAll('.slide_content_name h5');
    var price = document.querySelectorAll('.price_sp');
    var img = document.querySelectorAll('.swiper-slide img');
    for (let i = 0; i < submit_sp.length; i++) {
      submit_sp[i].onclick = function(){
        
      }
    }
});
    