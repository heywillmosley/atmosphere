

// Customize Footstep
function hideNav(){
	
	var accum_width = 0;
	$(".footstep").append("<a href='#' class='footstep-nav-previous'><i class='fa fa-chevron-left'></i></a><a href='#' class='footstep-nav-next'><i class='fa fa-chevron-right'></i></a>").select( function(){
		$(this).children(".footstep-content").find('>li >a').each(function(){
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

console.log(accum_width);
    if ($(window).width() < accum_width) {
		$(".main-nav .footstep-nav-previous").hide();
		$(".main-nav .footstep-nav-next").hide();
		$(".main-nav .footstep").css("cssText", "padding:0 !important");

    }else{
		$(".main-nav .footstep-nav-previous").show();
		$(".main-nav .footstep-nav-next").show();
		$(".main-nav .footstep").css("cssText", "padding:0 16px 0 18px !important");

    }

}

//run on document load and on window resize
$(document).ready(function () {
    //on load
    hideNav();

    //on resize
    $(window).resize(function(){
        hideNav();
		$("footstep-container").width();
    });
});