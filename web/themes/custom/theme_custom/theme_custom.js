// themes/custom/theme_custom/theme_custom.js

(function ($, Drupal, once) {
  "use strict";

  Drupal.behaviors.themeCustomSlider = {
    attach: function (context, settings) {
      once("themeCustomSliderInit", ".your-slider-wrapper", context).forEach(
        function (element) {
          const sliderElement = $(element);

          // Add necessary Swiper classes
          sliderElement.addClass("swiper");
          sliderElement
            .children(".slide-item")
            .wrapAll('<div class="swiper-wrapper"></div>');
          sliderElement.find(".slide-item").addClass("swiper-slide");

          // Initialize Swiper
          const mySwiper = new Swiper(element, {
            direction: "horizontal",
            loop: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            scrollbar: {
              el: ".swiper-scrollbar",
            },
            autoplay: {
              delay: 5000,
              disableOnInteraction: false,
            },
            speed: 800,
            spaceBetween: 0,
          });

          // Initialize Swiper after DOM is fully updated
          setTimeout(function () {
            mySwiper.update();
          }, 100);
        }
      );
    },
  };
})(jQuery, Drupal, once);
