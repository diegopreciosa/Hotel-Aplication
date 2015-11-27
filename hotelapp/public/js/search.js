var timer;



$.ajaxSetup({  
	headers: { 
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 } 
 });

function up() {

	timer = setTimeout(function() {

		var keywords = $('#search-input').val();
		
		var city = $("#city").val();
		console.log(city);
		
		if (keywords.length > 0) {
			
			$.post('search',{keywords: keywords , city: city}, function(markup) {
			  	$('#search-results').html(markup);
			});
		};

	}, 500);

}

function down() {

	clearTimeout(timer);

}