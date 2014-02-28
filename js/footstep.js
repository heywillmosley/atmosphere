var accum_width = 0;
$(".footstep").append("<a href='#' class='footstep-nav-previous'><i class='fa fa-chevron-left'></i></a><a href='#' class='footstep-nav-next'><i class='fa fa-chevron-right'></i></a>").select( function(){
	$(this).children(".footstep-content").find('>li').each(function(){
	accum_width += $(this).outerWidth() + 5;
});
	$(this).children(".footstep-content").width(accum_width);
});


$(document).ready(function() {
	$(".footstep-nav-next").click(function(event){
		$('.footstep-container').animate({scrollLeft: '+=200px'}, 300);
	});
});
$(document).ready(function() {
	$(".footstep-nav-previous").click(function(event){
		$('.footstep-container').animate({scrollLeft: '-=200px'}, 300);
	});
});


