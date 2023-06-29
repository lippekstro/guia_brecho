<<<<<<< HEAD
var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });
=======
popup = {
    init: function(){
      $('figure').click(function(){
        popup.open($(this));
      });
      
      $(document).on('click', '.popup img', function(){
        return false;
      }).on('click', '.popup', function(){
        popup.close();
      })
    },
    open: function($figure) {
      $('.container').addClass('pop');
      $popup = $('<div class="popup" />').appendTo($('body'));
      $fig = $figure.clone().appendTo($('.popup'));
      $bg = $('<div class="bg" />').appendTo($('.popup'));
      $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
      $shadow = $('<div class="shadow" />').appendTo($fig);
      src = $('img', $fig).attr('src');
      $shadow.css({backgroundImage: 'url(' + src + ')'});
      $bg.css({backgroundImage: 'url(' + src + ')'});
      setTimeout(function(){
        $('.popup').addClass('pop');
      }, 10);
    },
    close: function(){
      $('.container, .popup').removeClass('pop');
      setTimeout(function(){
        $('.popup').remove()
      }, 100);
    }
  }
  
  popup.init()
>>>>>>> 95ff33f (update da pagina com cards e modal novos)
