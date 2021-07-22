import $ from 'jquery';
import 'slick-slider/slick/slick';

export default {
  init() {
    $('.slider-one').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      fade: false,
      dots: true,
      responsive: [
        {
          breakpoint: 1230,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
          },
        },
      ],
    });

    $('.slider-twoo-image').slick({
      // vertical: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      asNavFor: '.slider-twoo-text',
    });
    $('.slider-twoo-text').slick({
      adaptiveHeight: true,
      vertical: true,
      verticalSwiping: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slider-twoo-image',
      dots: true,
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
