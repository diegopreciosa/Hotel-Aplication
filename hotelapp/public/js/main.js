jQuery(document).ready(function($) {

	$.ajaxSetup({
		headers : {
			'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('#insert_form').on('submit', function(e) {
		e.preventDefault();
		var name = $('#name').val();
		var addressline1 = $('#address_line1').val();
		var addressline2 = $('#address_line2').val();
		var city = $('#city').val();

		$.ajax({
			type : "POST",
			url : '/insert',
			data : {
				name : name,
				address_line1 : addressline1,
				address_line2 : addressline2,
				city : city
			},
			success : function(msg) {
				alert(msg);
				$('#name').val('');
				$('#address_line1').val('');
				$('#address_line2').val('');

			}
		});

	});

});

