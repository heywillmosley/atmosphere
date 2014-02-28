$(".dropdown-full").css('left', function(){ 
		var offset = $(this).offset(); 
		console.log( offset ); 
		return -offset.left;
	}).width($(window).width());
$(window).resize(function(){
    $(".dropdown-full").css('left', function(){ 
		var offset = $(this).offset(); 
		console.log( offset ); 
		return -offset.left;
	}).width($(window).width());
});

enquire.register("screen and (max-width: 767px)", {
	match : function() {
        $(".has-dropdown").click( function(){
			$(".has-dropdown.active").not(this).removeClass("active");
			
			if( !$(this).hasClass("active")){
				$(this).addClass("active");
			}
			else{
				$(this).removeClass("active");
			}
		});
    },  
    unmatch : function() {
       	$(".has-dropdown").click( function(){
			$(".has-dropdown.active").removeClass("active");
			$(this).removeClass("active");
		});
    }
});