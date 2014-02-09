
$(function(){
	var pices = document.location.pathname.split('/'),
	pageName = pices[pices.length-1],
	page = pageName.substr(0, pageName.indexOf('.'));
	
	$('#'+page).addClass('active');
	
	$('.clickable').click(function(){
		document.location = $(this).data('target');
	});
	
	$('.btnNewPost').click(function(){
		$('#inputTopicid').val($(this).data('topicid'));
		$('#myModal').modal();
	});
});