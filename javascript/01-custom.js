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

