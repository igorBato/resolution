export default {
  init() {
    jQuery( function( $ ){ 
      $('input[type="radio"]').click(function(e){

        e.preventDefault();
				console.log( 'filter' );
				// var filter = $('.navigation-line');
        var filter = $('form');
        var tempserial = filter.serialize();
        var serial = tempserial.slice(6);


        let data_obj = {
          data : serial,
          action : 'filter',
        }

        $.get(afp_vars.afp_ajax_url, data_obj, function (response) {
          if (response) {
            $('.blog-articles').empty();
						$('.blog-articles').append(response);
            $('.blog-articles').offset().top;
            // console.log(response);
            console.log(serial);
          }
      });
				// return false;
			});
		});

		// document.addEventListener('click',()=>{alert('OK!')});


  },
};
