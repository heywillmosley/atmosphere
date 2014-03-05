/*var position;

function resize_dropdown(){
	$(document).ready(function() { 
		$(".dropdown-full").css('left', function(){ 
		return -$(this).offset().left - $(window).scrollLeft();
			}).width($(window).width());
		
	});
}

resize_dropdown();
$(window).resize(function(){
	resize_dropdown();
});*/



$(".dropdown").hide();
enquire.register("screen and (max-width: 767px)", {
	match : function() {
        $(".dropdown").hide();
$(".has-dropdown > a").click(function(e){
			e.preventDefault();
			
			var currentHref = $(this).attr('href');
			$(".has-dropdown a.active").not(this).removeClass("active");
					
			if( $(this).hasClass("active")){
				$(this).removeClass("active");
				$(currentHref).hide();
			}
			else{
				$(this).addClass("active");
				$(".dropdown").hide();
				$(currentHref).show();
				$(this).children('>span').show();
			}
		});
    },  
});


enquire.register("screen and (min-width: 768px)", { 
    match : function() {
       $(".dropdown").hide();
		$(".has-dropdown > a").click(false).hover(function(){
			
			var currentHref = $(this).attr('href');
			$(".has-dropdown a.active").not(this).removeClass("active");
					
			if( $(this).hasClass("active")){
				$(this).removeClass("active");
				$(currentHref).hide();
			}
			else{
				$(this).addClass("active");
				$(".dropdown").hide();
				$(currentHref).show().css("display", "block");
				$(this).children('>span').show();
			}
			//$(this).removeClass("active");
			
		});
    }
});


