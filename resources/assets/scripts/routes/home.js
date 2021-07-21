export default {
  init() {
    $('.slider-one').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
