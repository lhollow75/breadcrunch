$(".admin .icon-cog").click(function() {
	if( $(".admin").hasClass("deplie") ) {
		$(".admin").animate({"left":"-20%"});
		$(".admin").removeClass("deplie");
	}
	else {
		$(".admin").animate({"left":"0"});
		$(".admin").addClass("deplie");
	}
});