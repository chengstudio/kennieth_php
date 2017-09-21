$(function(){

	ajax_test();

	$(".sh-menu").click(function() {
		if($(".affix-sidebar").is(":hidden")){
			$(".affix-sidebar").show("fast",function(){
				$(".affix-content").addClass('col-md-10');
				$(".affix-sidebar").addClass('col-md-2');
			});
		}else{
			$(".affix-sidebar").hide("fast",function(){
				$(".affix-content").removeClass('col-md-10');
				$(".affix-sidebar").removeClass('col-md-2');
			});
		}

	});
	

});

function ajax_test(){
	$.ajax({
	 	dataType: 'html',
	 	data: {method: 'ajaxtest'},
	}).done(function(doc) {
		//$('body').append("AJAX方法调用：<br>"+doc);
	});
}