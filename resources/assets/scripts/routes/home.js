import $ from 'jquery';
import 'slick-slider/slick/slick';

export default {
  init() {
// slider 1
$('.slider-one').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  nextArrow: document.querySelector('.one-arrow-next'),
  prevArrow: document.querySelector('.one-arrow-prev'),
  responsive: [
    {
      breakpoint: 1230,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      },
    },
  ],
});


    function setProgressOne(index) {
      const calc = ((index + 1) / ($slider.slick('getSlick').slideCount)) * 100;
    
      $progressBar
        .css('background-size', `${calc}% 100%`)
        .attr('aria-valuenow', calc);
    
      $progressBarLabel.text(`${calc.toFixed(2)}% completed`);
    }
    
    const $slider = $('.slider-one');
    const $progressBar = $('.progress-one');
    const $progressBarLabel = $('.slider__label');
    const $onePrev = $('.one-prev');
    const $oneNext = $('.one-next');

    $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
      setProgressOne(nextSlide);
    });
    
    $slider.on('afterChange', function(event, slick, currentSlide) {   
      // $oneNext.text(slick.slideCount);
      if(slick.slideCount<10){
        $onePrev.text( '0' + (slick.currentSlide+1));
          if((currentSlide + 1) ==slick.slideCount){
              $oneNext.text('01');
            }else{
              $oneNext.text('0' + (slick.currentSlide+2));
            }
      }else{
        $onePrev.text( slick.currentSlide + 1);
          if((currentSlide + 1) ==(slick.slideCount)){
            $oneNext.text('1');
          }else{
            $oneNext.text(slick.currentSlide+2);
          }
        
      }
      
    }); 
    
    setProgressOne(0);

  function getDotsForSliderOne(){
    var dotsArr = $('.slick-slide:not(.slick-cloned)').find('.custom-slide').attr('data-category');
    console.log(dotsArr);

  }

  getDotsForSliderOne();
    
// slider 2
    $('.slider-twoo-image').slick({
      // vertical: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      speed: 1000,
      useTransform: true,
      asNavFor: '.slider-twoo-text',
    });
    $('.slider-twoo-text').slick({
      adaptiveHeight: true,
      vertical: true,
      verticalSwiping: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: false,
      speed: 1000,
      asNavFor: '.slider-twoo-image',
      nextArrow: document.querySelector('.twoo-arrow-next'),
      prevArrow: document.querySelector('.twoo-arrow-prev'),
    });

    function setProgressTwo(index) {
      const calc2 = ((index + 1) / ($slider2.slick('getSlick').slideCount)) * 100;
    
      $progressBar2
        .css('background-size', `${calc2}% 100%`)
        .attr('aria-valuenow', calc2);
    
      // $progressBarLabel2.text(`${calc2.toFixed(2)}% completed`);
    }
    
    const $slider2 = $('.slider-twoo-text');
    const $progressBar2 = $('.progress-twoo');
    // const $progressBarLabel2 = $('.slider__label');
    const $onePrev2 = $('.twoo-prev');
    const $oneNext2 = $('.twoo-next');

    $slider2.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
      setProgressTwo(nextSlide);
      $('.slider-twoo-image .slick-slide').addClass('animation-square');
      $('.slider-twoo-image .slick-slide').removeClass('animation-scale');
      $('.slider-twoo-image .slick-current').removeClass('animation-square');
      $('.slider-twoo-image .slick-current').addClass('animation-scale');

      $('.slider-twoo-text .slick-slide').removeClass('animation-opacity-incoming');
      $('.slider-twoo-text .slick-current').addClass('animation-opacity-incoming');
    });

    
    
    $slider2.on('afterChange', function(event, slick, currentSlide) {   
      // $oneNext.text(slick.slideCount);
      if(slick.slideCount<10){
        $onePrev2.text( '0' + (slick.currentSlide+1));
        //  $('.slick-slide').removeClass('animation-square');
        //  $('.slick-current').addClass('animation-square');
          if((currentSlide + 1) ==slick.slideCount){
              $oneNext2.text('01');
            }else{
              $oneNext2.text('0' + (slick.currentSlide+2));
            }
      }else{
        $onePrev2.text( slick.currentSlide + 1);
              // $('.slick-slide').removeClass('animation-square');
              // $('.slick-current').addClass('animation-square');
          if((currentSlide + 1) ==(slick.slideCount)){
            $oneNext2.text('1');
          }else{
            $oneNext2.text(slick.currentSlide+2);
          }
        
      }
      
    }); 
    
    setProgressTwo(0);

// slider 3
    $('.slider-three-image').slick({
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
      nextArrow: document.querySelector('.three-arrow-next'),
      prevArrow: document.querySelector('.three-arrow-prev'),
    });

    function setProgressThree(index) {
      const calc3 = ((index + 1) / ($slider3.slick('getSlick').slideCount)) * 100;
    
      $progressBar3
        .css('background-size', `${calc3}% 100%`)
        .attr('aria-valuenow', calc3);
    
    }
    
    const $slider3 = $('.slider-three-text');
    const $progressBar3 = $('.progress-three');
    const $onePrev3 = $('.three-prev');
    const $oneNext3 = $('.three-next');

    $slider3.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
      setProgressThree(nextSlide);
    });
    
    $slider3.on('afterChange', function(event, slick, currentSlide) {   
      if(slick.slideCount<10){
        $onePrev3.text( '0' + (slick.currentSlide+1));
          if((currentSlide + 1) ==slick.slideCount){
              $oneNext3.text('01');
            }else{
              $oneNext3.text('0' + (slick.currentSlide+2));
            }
      }else{
        $onePrev3.text( slick.currentSlide + 1);
          if((currentSlide + 1) ==(slick.slideCount)){
            $oneNext3.text('1');
          }else{
            $oneNext3.text(slick.currentSlide+2);
          }
        
      }
      
    }); 
    
    setProgressThree(0);

// slider 4
    $('.slider-four-image').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      fade: false,
      dots: false,
      adaptiveHeight: true,
      variableWidth: true,
      nextArrow: document.querySelector('.four-arrow-next'),
      prevArrow: document.querySelector('.four-arrow-prev'),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
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
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
      ],
    });

    function setProgressFour(index) {
      const calc4 = ((index + 1) / ($slider4.slick('getSlick').slideCount)) * 100;
    
      $progressBar4
        .css('background-size', `${calc4}% 100%`)
        .attr('aria-valuenow', calc4);
    
    }
    
    const $slider4 = $('.slider-four-image');
    const $progressBar4 = $('.progress-four');
    const $onePrev4 = $('.four-prev');
    const $oneNext4 = $('.four-next');

    $slider4.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
      setProgressFour(nextSlide);
    });
    
    $slider4.on('afterChange', function(event, slick, currentSlide) {   
      if(slick.slideCount<10){
        $onePrev4.text( '0' + (slick.currentSlide+1));
          if((currentSlide + 1) ==slick.slideCount){
              $oneNext4.text('01');
            }else{
              $oneNext4.text('0' + (slick.currentSlide+2));
            }
      }else{
        $onePrev4.text( slick.currentSlide + 1);
          if((currentSlide + 1) ==(slick.slideCount)){
            $oneNext4.text('1');
          }else{
            $oneNext4.text(slick.currentSlide+2);
          }
        
      }
      
    }); 
    
    setProgressFour(0);

// send mail
    $('#sendmail').on('click', () => {
      $('.mail-pop-up').css({'display' : 'flex'});
      $('.site-blur').css({'filter' : 'blur(10px)'});
    })

    $('#sendmail2').on('click', () => {
      $('.mail-pop-up').css({'display' : 'flex'});
      $('.site-blur').css({'filter' : 'blur(10px)'});
    })

    $('.mail-pop-up').on('click', (event) => {
      var $wpcf7 = $('.wpcf7');
      if($wpcf7.has(event.target).length == 0 && !$wpcf7.is(event.target)){
      $('.mail-pop-up').css({'display' : 'none'});
      $('.site-blur').css({'filter' : 'none'});
      }
    })

    window.onload = () => {
      $('.hero-image').animate({top:'0', left:'0'}, 1000);
      $('.orange-plate').animate({top:'0', left:'0'}, 1000);
    };

  //   window.onscroll = () => {
  //     if ( $(window).scrollTop() > $('.what-title').offset().top - 600) {
  //       console.log('!!!');
  //       $('.what-title').addClass('animation-opacity-incoming');
  //     }
  // };


  function onEntry(entry) {
    entry.forEach(change => {
      if (change.isIntersecting) {
        change.target.classList.add('element-show');
      }
    });
  }
  let options = { threshold: [0.5] };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.element-animation');
  for (let elm of elements) {
    observer.observe(elm);
  }
    
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
