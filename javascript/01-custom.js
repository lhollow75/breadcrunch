$(function(){

// Cache la div du lien du blog si la case d'activation dans les paramètres n'est pas cochée
if ($(location).attr('href')=='http://localhost/breadcrunch/index.php?page=config-site' && $("#box-blog")[0].checked == false){
	$("#bloc-blog").hide();
}


	$("[contenteditable]").blur(function(d){
		//console.log(d);

		insertion = d.target.innerText;
		

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


	$("input").click(function(d){
		//console.log($("#lien-blog")[0].value);
		nomBox = $(this).context.id;
		box = $(this).context.checked;
		valeur = nomBox.split('-')[1];

		//console.log(nomBox);
		//console.log(box);
		//console.log(valeur);
		
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

	/*$(".ajoutProduit").click(function(){
		//console.log($(this));
		console.log("la");
		$.ajax({ 
			url: 'functionBdd.php',
			method: 'POST',
			data: {
				fonction: 'productCreation',
			},
		});
		console.log("ici");
	});*/


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