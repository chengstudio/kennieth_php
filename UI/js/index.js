$(function(){


	$.ajax({
		data: {act: 'ajaxtest'},
	})
	.done(function(doc) {
		$('body').append(doc);
	});
	
});