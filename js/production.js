$(function(){

// Cache la div du lien du blog si la case d'activation dans les paramètres n'est pas cochée
//if ($(location).attr('href')=='http://localhost/breadcrunch/index.php?page=config-site' && $("#box-blog")[0].checked == false){
	$("#bloc-blog").hide();
//}


	$("[contenteditable]").blur(function(d){
		produit = d.target;
		console.log("idProduit: "+d.target.id.split("-")[3]);
		console.log("colonne: "+d.target.id.split("-")[2]);
		console.log("text: "+d.target.innerText);


		//console.log(d.target.id.split("-",2));
		decoupageId = d.target.id.split("-")[0];
		insertion = d.target.innerText;

		if (decoupageId == "product"){
			console.log("je suis la");

			idProduit = d.target.id.split("-")[2];
			colonne = d.target.id.split("-")[1];

			$.ajax({ 
				url: 'functionBdd.php',
				method: 'POST',
				data: {
					fonction: 'modifEnBase',
					idproduit: idProduit,
					donnees: insertion,
					colonne: colonne 
				},
				success: function(m) { 
					//console.log(m);
					//$(".alert").fadeIn(100);
					//$(".successMsg").text(m);
				}
			});
		} else {

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
		}

		

	})

	$('input[type=text]').blur(function(d){
		console.log(d);
		nomChamps = $(this).context.id;
		valeur = d.target.value;
		idProduit = nomChamps.split("-")[2];
		colonne = nomChamps.split("-")[1];

		$.ajax({ 
			url: 'functionBdd.php',
			method: 'POST',
			data: {
				fonction: 'modifEnBase',
				idproduit: idProduit,
				donnees: valeur,
				colonne: colonne 
			},
		});
	});

	$('.select').change(function(d){
		console.log($(this).context.value);
		nomChamps = $(this).context.id;
		valeur = $(this).context.value;
		idProduit = nomChamps.split("-")[2];
		colonne = nomChamps.split("-")[1];

		$.ajax({ 
			url: 'functionBdd.php',
			method: 'POST',
			data: {
				fonction: 'modifEnBase',
				idproduit: idProduit,
				donnees: valeur,
				colonne: colonne 
			},
		});
	});

	$('input:not([type=image],[type=button],[type=submit],[type=text])').click(function(d){
		console.log(d);
		nomBox = $(this).context.id;
		box = $(this).context.checked;
		valeur = nomBox.split('-')[1];

		console.log("nomBox: "+nomBox);
		
		console.log("valeur: "+valeur);
		
	

		switch (nomBox){
			case 'box-blog':
				if (box == true){
					$("#bloc-blog").show();
					$("#lien-blog").val("URL de votre blog");
					box = "URL de votre blog"
				} else {
					$("#bloc-blog").hide();
					box = "";
				}
				break;
			case 'write-min-timing':
				box = $("#write-min-timing")[0].value;
				break;
			case 'lien-blog':
				box = $("#lien-blog")[0].value;
				break;
			case 'commande-desactive':
				if (box == true){
					box = 0;
				} else {
					box = 1;
				}
				nomBox = "commande";
				break;
			case 'commande-active':
				if (box == true){
					box = 1;
				} else {
					box = 0;
				}
				nomBox = "commande";
				break;
			case 'paiement-desactive':
				if (box == true){
					box = 0;
				} else {
					box = 1;
				}
				nomBox = "paiement";
				break;
			case 'paiement-active':
				if (box == true){
					box = 1;
				} else {
					box = 0;
				}
				nomBox = "paiement";
				break;
			case 'recapitulatif-desactive':
				if (box == true){
					box = 0;
				} else {
					box = 1;
				}
				nomBox = "recapitulatif";
				break;
			case 'recapitulatif-active':
				if (box == true){
					box = 1;
				} else {
					box = 0;
				}
				nomBox = "recapitulatif";
				break;
			default :
				if (box == true){
					box = 1;
				} else {
					box = 0;
				}
				break;
		}
		console.log("box: "+box);

		//console.log("envoie nomBox "+nomBox);
		//console.log("envoi box: "+box);
		
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

	$(".choix-produit").click(function(){
		//console.log($(this).context.id);
		id = $(this).context.id;
		id = id.split("-")[1];
		console.log(id);
		window.location.replace("./index.php?page=fiche-produit&id="+id);
	});


	$(".page_titre").keyup(function(d){
		console.log(d);
		console.log(d.target.innerHTML);
		switch(d.target.id){
			case 'histoire_titre' :
				$("#menu-histoire").html(d.target.innerHTML);
				break;
			case 'contact_titre' :
				$("#menu-contact").html(d.target.innerHTML);
				break;
		}

	});

	$(".adresse").blur(function(d){
		adresse = $(this).context.innerHTML;
		adresse = adresse.replace(/ /g, '+');
		adresse = adresse.concat(',');
		adresse = adresse.concat($(".cp")[0].innerHTML);


		$("#map").attr('src',"https://maps.googleapis.com/maps/api/staticmap?size=1024x200&zoom=15&maptype=roadmap\
		&markers=size:mid%7Ccolor:red%7C"+adresse+"&key=AIzaSyDEIF4I4xIgInAxD6qxo52UzbTvi6KlO1k");

		$.ajax({ 
			url: 'functionBdd.php',
			method: 'POST',
			data: {
				fonction: 'localisationEnBase',
				data: 'map',
				donnees: adresse,
				action: 'modification'
			},
		});
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
			case 'promotions':
				if (box==false){
					$("#menu-promotions").hide();
				}else {
					$("#menu-promotions").show();
				}
				break;
			case 'blog':
				if (box==false){
					$("#menu-blog").hide();
				}else {
					$("#menu-blog").show();
				}
				break;
		}
}

		//Menu-burger
        // targeting navigation
        var n = document.getElementById('user-bar');
        var v = document.getElementById('first-menu');
        var i = document.getElementById('second-menu');
        // nav initially closed is JS enabled

    
        function navi() {
            // when small screen, create a switch button, and toggle navigation class
            if (window.matchMedia("(max-width: 640px)").matches && document.getElementById("toggle-nav")==undefined) {          
                n.insertAdjacentHTML('afterBegin','<span id="toggle-nav" class="icon-menu"></span>');
                t = document.getElementById('toggle-nav');  
                n.classList.add('is-closed');
                v.classList.add('is-closed');
                i.classList.add('is-closed');
                t.onclick=function(){
                    n.classList.toggle('is-closed');
                    v.classList.toggle('is-closed');
                    i.classList.toggle('is-closed');
                }
            }
            // when big screen, delete switch button, and toggle navigation class
            if (window.matchMedia("(min-width: 641px)").matches && document.getElementById("toggle-nav")) {
                document.getElementById("toggle-nav").outerHTML="";
                n.classList.toggle('is-closed');
                v.classList.toggle('is-closed');
                i.classList.toggle('is-closed');
            }
        }
        navi();
        // when resize or orientation change, reload function
        window.addEventListener('resize', navi);


        


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