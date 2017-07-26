$(function(){

	ajax_test();

	$.ajax({
	 	dataType: 'json',
	 	data: {method: 'ajaxtest2'},
	}).done(function(doc) {

	});
	  

	str = t.create(th_arr,tr_obj);

	$('body').append(str);
});

function ajax_test(){
	$.ajax({
		data: {method: 'ajaxtest'},
	})
	.done(function(doc) {
		ret = doc;
		$('body').append(doc);
	});
}