//on cible tous les éléments required
$("#contact-form [required]").each(function(){
	$(this).val( $(this).attr("data-form") );
	$(this).focus(function(){
		if( $(this).val() == $(this).attr("data-form") ){
			$(this).val("");
		}
	});
	$(this).blur(function(){
		if( $(this).val() == "" )
		{
			$(this).val($(this).attr("data-form") );
			$(this).prev("p").fadeIn(100);
		}
		else
		{
			$(this).prev("p").fadeOut(100);
		}
	});
});


// envoi du form avec méthode ajax
$("#contact-form").submit(function(e){
	e.preventDefault();
	var valid = true;
	$("#contact-form [required]").each(function(){
		if($(this).val() == "" || $(this).val() == $(this).attr("data-form") )
		{
			$(this).prev("p").fadeIn(100);
			valid = false;
		}
	});
	if(valid==true) {
		$.ajax({
			url: "./envoi-form-contact.php",
			type: "POST",
			data: $(this).serialize(),
			/*Génère une représentation stockable d'une valeur. C'est une technique pratique pour stocker
			ou passer des valeurs PHP entre scripts, sans perdre leur structure ni leur type.*/
			success: function(retour) {
				if(retour=="ok") {
					$(location).attr("href", "message-envoyer.html");
				} else {
					$(".alert").fadeIn(100);
					$(".successMsg").text(retour);
				}
			}
		});
	}
});