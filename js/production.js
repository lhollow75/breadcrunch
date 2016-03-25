$(function(){
	$("[contenteditable]").blur(function(d){
		//console.log(d);

		if (d.target.nodeName == 'IMG'){
			insertion = d.target.currentSrc.split("/");
			insertion = insertion[(insertion.length)-1]
		} else {
			insertion = d.target.innerText;
		}

		$.ajax({ 
			url: 'functionBdd.php',
			method: 'POST',
			data: {
				fonction: 'localisationEnBase',
				data: d.target.id,
				donnees: insertion,
				action: 'modification'
			},
			success: function(m) { 
				//console.log(m);
				//$(".alert").fadeIn(100);
				//$(".successMsg").text(m);
			}
		});

	})


	$("input[type=checkbox]").click(function(d){
		//console.log($(this));
		nomBox = $(this).context.id;
		box = $(this).context.checked;
		valeur = nomBox.split('-')[1];

		//console.log(nomBox);
		//console.log(box);
		if (box==true){
			box = 1;
		} else {
			box = 0;
		}
		$.ajax({ 
			url: 'functionBdd.php',
			method: 'POST',
			data: {
				fonction: 'localisationEnBase',
				data: nomBox,
				donnees: box,
				action: 'modification'
			},
		});

		showHide(valeur, box);

		
	});

	$(".adresse").blur(function(d){
		adresse = $(this).context.innerHTML;
		adresse = adresse.replace(/ /g, '+');
		adresse = adresse.concat(',');
		adresse = adresse.concat($(".cp")[0].innerHTML);


		$("#map").attr('src',"https://maps.googleapis.com/maps/api/staticmap?size=1024x200&zoom=15&maptype=roadmap\
&markers=size:mid%7Ccolor:red%7C"+adresse+"&key=AIzaSyDEIF4I4xIgInAxD6qxo52UzbTvi6KlO1k");
	});

});

function showHide(valeur, box){
	switch(valeur){
			case 'boulangerie':
				if (box==false){
					$("#menu-boulangerie").hide();
				}else {
					$("#menu-boulangerie").show();
				}
				
				break;
			case 'patisserie':
				if (box==false){
					$("#menu-patisserie").hide();
				}else {
					$("#menu-patisserie").show();
				}
				
				break;
			case 'chocolaterie':
				if (box==false){
					$("#menu-chocolaterie").hide();
				}else {
					$("#menu-chocolaterie").show();
				}
				
				break;
			case 'sandwich':
				if (box==false){
					$("#menu-sandwich").hide();
				}else {
					$("#menu-sandwich").show();
				}
				
				break;
			case 'boisson':
				if (box==false){
					$("#menu-boisson").hide();
				}else {
					$("#menu-boisson").show();
				}
				break;
		}
}
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