		jQuery(function($){
			$('#true_loadmore').click(function(){
				console.log('load more');
				$(this).text('Loading...');
				var data = {
					'action': 'loadmore',
					'query': true_posts,
					'page' : current_page,
				};
				$.ajax({
					url:afp_vars.afp_ajax_url, 
					data:data, 
					type:'POST', 
					success:function(data){
						if( data ) { 
							$('.small-prewiev-icons').append(data);
						// 	$('#true_loadmore').text('Load more...').before(data); 
						// 	current_page++; // увеличиваем номер страницы на единицу
						// 	if (current_page == max_pages) { $("#true_loadmore").remove(); }
						// } else {
							$('#true_loadmore').remove(); 
						}
					}
				});
			});
		});
		