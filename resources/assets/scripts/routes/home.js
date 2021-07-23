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
      dots: true,
    });
    
    // $('#true_loadmore').click(function(){
    //   console.log('load more');
    //   $(this).text('Loading...');
    //   var data = {
    //     'action': 'loadmore',
    //     'query': true_posts,
    //     'page' : current_page,
    //   };
    //   $.ajax({
    //     url:ajaxurl, 
    //     data:data, 
    //     type:'POST', 
    //     success:function(data){
    //       if( data ) { 
    //         $('.small-prewiev-icons').append(data);
    //       // 	$('#true_loadmore').text('Load more...').before(data); 
    //       // 	current_page++; // увеличиваем номер страницы на единицу
    //       // 	if (current_page == max_pages) { $("#true_loadmore").remove(); }
    //       // } else {
    //         $('#true_loadmore').remove(); 
    //       }
    //     },
    //   });
    // });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
