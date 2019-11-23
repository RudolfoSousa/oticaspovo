$(document).ready(function(){
  var mySwiper = new Swiper ('.swiper-container.swiper-webdoor', {
    // Optional parameters
    //direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-webdoor .swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-webdoor .swiper-button-next',
      prevEl: '.swiper-webdoor .swiper-button-prev',
    },
  });

  var swiperBrands = new Swiper ('.swiper-container.swiper-brands', {
    loop: false,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-brands .swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-brands .swiper-button-next',
      prevEl: '.swiper-brands .swiper-button-prev',
    },
    slidesPerView: 5,
    centeredSlides: true,
    initialSlide: 1
  });

  var swiperDicas = new Swiper ('.swiper-container.swiper-dicas', {
    loop: true,
    spaceBetween: 60,
    slidesPerView: 5,
    pagination: {
      el: '.swiper-dicas .swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-dicas .swiper-button-next',
      prevEl: '.swiper-dicas .swiper-button-prev',
    },
  });

  var swiperDepoimentos = new Swiper('.depoimentos.swiper-container', {
    pagination: {
      el: '.depoimentos .swiper-pagination',
    },
  });

  var swiperSobre = new Swiper('.webdor-sobre.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.webdor-sobre.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.webdor-sobre.swiper-button-next',
      prevEl: '.webdor-sobre.swiper-button-prev',
    },
  });


  var numberOfSlides = $('.swiper-container.timeline-slider .swiper-slide').length;

  var swiperTimeline = new Swiper('.swiper-container.timeline-slider', {
  // speed: 1250,
  // autoplay: {
  //     delay: 3000,
  // },
  autoHeight: true,
  loop: true,
  slidesPerView: 3.3,
  centeredSlides: true,
  loopedSlides: numberOfSlides,
      pagination: {
        el: '.timeline-slider .swiper-pagination',
        clickable: true,
      },
    });

})