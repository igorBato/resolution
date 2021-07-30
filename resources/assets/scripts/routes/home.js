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
    $('.slider-three-image').slick({
      // vertical: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      rtl: true,
      asNavFor: '.slider-three-text',
    });
    $('.slider-three-text').slick({
      adaptiveHeight: true,
      vertical: true,
      verticalSwiping: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slider-three-image',
      // dots: true,
    });
    $('.slider-four-image').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      fade: false,
      dots: true,
      adaptiveHeight: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });

    $('#sendmail').on('click', () => {
      $('.mail-pop-up').css({'display' : 'flex'});
      $('.site-blur').css({'filter' : 'blur(10px)'});
      console.log('click display flex');
    })

    $('.mail-pop-up').on('click', (event) => {

      var $wpcf7 = $('.wpcf7');
      console.log('click site blur');
      
      if($wpcf7.has(event.target).length == 0 && !$wpcf7.is(event.target)){

        console.log('event.target: ' + event.target);
      $('.mail-pop-up').css({'display' : 'none'});
      $('.site-blur').css({'filter' : 'none'});
      }
    })


    
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
