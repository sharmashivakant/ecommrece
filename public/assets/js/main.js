(function($) { 
  "use strict";

    /*
    **** Mobile Menu JS ****
    */  
    $('.hamburger').on('click',function (event) {
      $(this).toggleClass('h-active');
      $('.main-nav').toggleClass('slidenav');
    });

    $('.header-home .main-nav ul li  a').on('click',function (event) {
      $('.hamburger').removeClass('h-active');
      $('.main-nav').removeClass('slidenav');
    });

    $(".main-nav .fl").on('click', function(event) {
      var $fl = $(this);
      $(this).parent().siblings().find('.sub-menu').slideUp();
      $(this).parent().siblings().find('.fl').addClass('flaticon-plus').text("+");       
      if($fl.hasClass('flaticon-plus')){
        $fl.removeClass('flaticon-plus').addClass('flaticon-minus').text("-");
      }else{
        $fl.removeClass('flaticon-minus').addClass('flaticon-plus').text("+");
      }
      $fl.next(".sub-menu").slideToggle();
    });

	
    /*
    **** Pricing Slider JS ****
    */ 
    $("#slider-range").slider({
      range: true,
      min: 130,
      max: 500,
      values: [130, 250],
      slide: function (event, ui) {
        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
      " - $" + $("#slider-range").slider("values", 1));


    /*
    **** Header Sticky JS ****
    */ 
    $(window).on('scroll',function () {
      var scroll = $(window).scrollTop();
      if (scroll >= 20) {
        $(".header-area").addClass("sticky");
      } else {
        $(".header-area").removeClass("sticky");
      }
    });


    /*
    **** Category Sidebar JS ****
    */ 
    document.querySelectorAll('.category-icon i').forEach((element)=>{
      element.addEventListener('click', ()=>{
        let cb = document.querySelectorAll('.category-sidebar-wrapper');
        cb.forEach((el)=>{
          if(el.classList.contains('category-active')){
            el.classList.remove('category-active')
          } else{
            el.classList.add('category-active')
          }
        })
      })
    })

    document.querySelectorAll('.category-close i').forEach((element) => {
      element.addEventListener('click', () => {
        document.querySelectorAll('.category-sidebar-wrapper').forEach((element) => element.classList.remove('category-active'))
      })
    })
  

    /*
    **** Cart Sidebar JS ****
    */ 
    document.querySelectorAll('.cart-icon i').forEach((element) => {
      element.addEventListener('click', () => {
        document.querySelectorAll('.cart-sidebar-wrappper').forEach((element) => element.classList.add('cart-active'))
      })
    })
    document.querySelectorAll('.cart-close-icon i').forEach((element) => {
      element.addEventListener('click', () => {
        document.querySelectorAll('.cart-sidebar-wrappper').forEach((element) => element.classList.remove('cart-active'))
      })
    })


    /*
    **** Search Bar JS ****
    */ 
    document.querySelectorAll('.search-icon i').forEach((element) => {
      element.addEventListener('click', () => {
        document.querySelectorAll('.main-searchbar').forEach((element) => element.classList.add('searchbar-active'))
      })
    })
    document.querySelectorAll('.search-close i').forEach((element) => {
      element.addEventListener('click', () => {
        document.querySelectorAll('.main-searchbar').forEach((element) => element.classList.remove('searchbar-active'))
      })
    })
  
    window.onclick = function (event) {
      document.querySelectorAll('.cart-sidebar-wrappper').forEach((el) => {
        if (event.target === el) {
          el.classList.remove('cart-active')
        }
      })
      document.querySelectorAll('.main-searchbar').forEach((el) => {
        if (event.target === el) {
          el.classList.remove('searchbar-active')
        }
      })
    }

  
    /*
    **** Custom Counter State JS ****
    */ 
    function timeConverter(UNIX_timestamp) {
      var a = new Date(UNIX_timestamp * 1000);
      var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
      var year = a.getFullYear();
      var month = months[a.getMonth()];
      var date = a.getDate();
      var hour = a.getHours();
      var min = a.getMinutes();
      var sec = a.getSeconds();
      var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec;
      // return time;
      console.log(date);

      $("#timer #days").html(date);
      $("#timer #hours").html(hour);
      $("#timer #minutes").html(min);
      $("#timer #seconds").html(sec);
    }

    function makeTimer() {
      var endTime = new Date("September 01, 2022 00:00:00");
      var endTime = (Date.parse(endTime)) / 1000; //replace these two lines with the unix timestamp from the server

      var now = new Date();
      var now = (Date.parse(now) / 1000);
      var timeLeft = endTime - now;
      var days = Math.floor(timeLeft / 86400);
      var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
      var Xmas95 = new Date('December 25, 1995 23:15:30');
      var hour = Xmas95.getHours();


      var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
      var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

      if (hours < "10") {
        hours = "0" + hours;
      }
      if (minutes < "10") {
        minutes = "0" + minutes;
      }
      if (seconds < "10") {
        seconds = "0" + seconds;
      }

      $("#timer #days").html(days);
      $("#timer #hours").html(hours);
      $("#timer #minutes").html(minutes);
      $("#timer #seconds").html(seconds);
    }

    setInterval(function () {
      makeTimer();
    }, 1000);


    /*
    **** Cart Quantity Increment  JS ****
    */ 
    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up"><i class="bi bi-plus"></i></div><div class="quantity-button quantity-down"><i class="bi bi-dash"></i></div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function () {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');
  
      btnUp.on('click',function () {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
  
      btnDown.on('click',function () {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
  
    });
  

    /*
    **** Hero Slider JS ****
    */ 
    var heroSlider = new Swiper('.hero-slider', {
      loop: true,
      effect: 'fade',
      spaceBetween: 24,
      speed: 1400,
      fadeEffect: {
        crossFade: true
      },
      autoplay: {
        delay: 5000
      },
      autoplay: {
        delay: 7000,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });


    /*
    **** Category Slider JS ****
    */ 
    var categorySlider = new Swiper('.category-slider', {
      loop: true,
      spaceBetween: 24,
      speed: 700,
      // mousewheel: true,
      slidesPerView: 4,
      autoplay: {
        delay: 5000
      },
      autoplay: {
        delay: 7000,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        480:{
          slidesPerView: 1
        },
        768:{
          slidesPerView: 2
        },
        992:{ 
          slidesPerView: 3
        },
        1200:{
          slidesPerView: 3
        },
        1400:{
          slidesPerView: 4
        }
      }
    });

    /*
    **** Testimonial Slider JS ****
    */ 
    var categorySlider = new Swiper('.testimonial-slider', {
      loop: true,
      spaceBetween: 0,
      speed: 700,
      slidesPerView: 1,
      autoplay: {
        delay: 5000
      },
      autoplay: {
        delay: 7000,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });


}(jQuery));