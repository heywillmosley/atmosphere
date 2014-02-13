// Journey
$(".journey-left-trigger-close").hide();

if( !$(".journey-left-trigger-open i").hasClass('fa')){
	$(".journey-left-trigger-open").append("<i class='fa fa-bars fa-2x'></i>");
}

if( !$(".journey-left-trigger-close i").hasClass('fa')){
	$(".journey-left-trigger-close").append("<i class='fa fa-times fa-2x'></i>");
}

$(".journey-left-trigger-open").click( function(){
	var $link = $(this);
	$(".journey-expand-left").show("fast").before("<a href='#' class='journey-expand-lighten'></a>");
	$link.hide();
	$(".journey-left-trigger-close").show();
	
	// Light background
	$(".journey-expand-lighten").click( function(){
		var $link = $(this);
		$(".journey-expand-left").hide("fast");	
		$link.hide();
		$(".journey-left-trigger-open").show();
		$(".journey-left-trigger-close").hide();
		return false;
		
	});
	
	// Close Trigger
	$(".journey-left-trigger-close").click( function(){
		var $link = $(this);
		$(".journey-expand-left").hide("fast");	
		$link.hide();
		$(".journey-left-trigger-open").show();
		$(".journey-expand-lighten").hide();
		return false;
	});
	
	if ($(window).width() < 768){
		$(".journey-expand-left a").click( function(){
			$(".journey-expand-left").hide();	
			$(".journey-left-trigger-open").show();
			$(".journey-left-trigger-close").hide();
			$(".journey-expand-lighten").hide();
		});
	}
	
	
	return false;
});






