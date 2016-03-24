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


	$("[contenteditable]").blur(function(d){
		console.log(d);

		if (d.target.nodeName == 'IMG'){
			insertion = d.target.currentSrc.split("/");
			insertion = insertion[(insertion.length)-1]
			//console.log(insertion);
		} else {
			insertion = d.target.innerHTML;
		}

		$.ajax({ 
			url: 'functionBdd.php',
			method: 'POST',
			data: {
				fonction: 'localisationEnBase',
				data: d.target.id,
				donnees: insertion
			},
			success: function(m) {
				//console.log(m);
				//$(".alert").fadeIn(100);
				//$(".successMsg").text(m);
			}
		});

	})
});

