$(function(){

	ajax_test();

});

function ajax_test(){
	$.ajax({
	 	dataType: 'html',
	 	data: {method: 'ajaxtest'},
	}).done(function(doc) {
		$('body').append("AJAX方法调用：<br>"+doc);
	});
}