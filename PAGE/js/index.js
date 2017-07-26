$(function(){

	ajax_test();

});

function ajax_test(){
	$.ajax({
	 	dataType: 'html',
	 	data: {method: 'ajaxtest2'},
	}).done(function(doc) {
		$('body').append("AJAX方法调用：<br>"+doc);
	});
}