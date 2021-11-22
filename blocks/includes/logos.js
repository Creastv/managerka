var swiper = new Swiper(".logotypy-carousel", {
  slidesPerView: 2,
  autoplay: {
    delay: 5000
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  breakpoints: {
    640: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 4
    },
    1024: {
      slidesPerView: 6
    }
  }
});
