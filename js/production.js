/* Test fenetre alert avec message "Hello World"
$(function(){
   alert('Hello world !'); 
});
*/

$(function(){
	//action burger navigation
	$("nav span").click(function(){
		$("nav ul").slideToggle(300);
	})

	//pour enregistrer les contenteditables avec ajax
	$("#admin-publish").click(function(){
		var data = [];
		$("[contenteditable]").each(function(){
			data.push($(this).html());
		});
		$.ajax({ 
			url: 'mybase.php',
			method: 'POST',
			data: {
				data: data
			},
			success: function(msg) {
				$(".alert").fadeIn(100);
				$(".successMsg").text(msg);
			}
		});
	});


	$("[contenteditable]").focusout(function(d){
		console.log(d);

		$.ajax({ 
			url: 'functionBdd.php',
			method: 'POST',
			data: {
				fonction: 'localisationEnBase',
				data: d.target.id,
				donnees: d.target.innerText
			},
			success: function(m) {
				//console.log(m);
				//$(".alert").fadeIn(100);
				//$(".successMsg").text(m);
			}
		});

	})
});


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
/*
$('.slider').click(function(){
    //Rien
});
*/
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


function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("dragged", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("dragged");
    ev.target.appendChild(document.getElementById(data));
}