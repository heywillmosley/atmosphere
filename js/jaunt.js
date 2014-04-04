// jaunt
$(".jaunt-trigger").click( function(){
	if($(this).hasClass('active')){
			$(this).removeClass('active');
	}
	else{
		$(this).addClass('active');
	}
	if($(".jaunt-links").hasClass('active')){
			$(".jaunt-links").removeClass('active');
	}
	else{
		$(".jaunt-links").addClass('active');
	}
});





