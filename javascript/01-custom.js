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

	$(".produit").click(function(){

		console.log("la");

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
		}
}