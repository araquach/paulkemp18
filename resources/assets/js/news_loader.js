/**
 * Ajax to load news stories	
 */
 
var url = $(this).attr('href');

$('.news_panel').each(function() {
		load(url + ' .news_panel');
	});
	
	return false;	

}); //end
