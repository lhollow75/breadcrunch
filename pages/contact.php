<!-- //============ 
   MAIN CONTENT
=============== -->

<div class="wrapper contact" id="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 id="contact_titre" class="page_titre" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'contact_titre','', 'recuperation') ?></h1>
				<hr>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<form action="" method="post" id="contact-form" class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<input type="text" name="nom" value="" placeholder="Nom..." required>
						<input type="email" name="email" value="" placeholder="Email..." required>
						<input type="tel" name="tel" value="" placeholder="Sujet..." required>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<textarea rows="8" name="message" id="message" placeholder="Message..."></textarea>
						<input class="btn" type="submit" name="sumbit" value="Envoyer">
					</div>
				</form>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="contact-details">
					<p class="col-lg-12" id="text-contact" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'text-contact','', 'recuperation') ?></p>
					<p class="col-lg-5 ">
						<span class="details">Adresse</span>
						<span class="details">Téléphone</span>
						<span class="details">Email</span>
					</p>
					<p class="col-lg-7">

						<span contenteditable="<?php echo $activeContent; ?>" id="contact-magasin"><?php echo utf8_encode($accueil['nom_boulangerie']) ?></span>
						 <span class="adresse" id="contact-adresse" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'adresse','', 'recuperation') ?></span>
						 <span class="cp" id="contact-cp" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'code_postal','', 'recuperation') ?></span> 
						 <span id="contact-ville" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'ville','', 'recuperation') ?></span>
						<span class="dtl" contenteditable="<?php echo $activeContent; ?>" id="contact-telephone"><?php localisationEnBase($mysql, 'telephone','', 'recuperation') ?></span>
						<span class="dtl" contenteditable="<?php echo $activeContent; ?>" id="contact-email"><?php localisationEnBase($mysql, 'email','', 'recuperation') ?></span>

					</p>
				</div>
				<div class="social-network">
					<ul>
						<li><span class="icon-facebook"></span></li>
						<li><span class="icon-twitter"></span></li>
						<li><span class="icon-instagram"></span></li>
						<li><span class="icon-pinterest"></span></li>
						<li><span class="icon-youtube"></span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
	<div style='overflow:hidden;height:400px;width:100%;'>
	<div id='gmap_canvas' style='height:400px;width:100%;'></div>
		<div>
			<small>
				<a href="http://embedgooglemaps.com">google maps carte</a>
			</small>
		</div>
		<div>
			<small>
				<a href="http://youtubeembedcode.com">embed youtube code</a>
			</small>
		</div>
		<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
	</div> -->
	<img id="map" src="https://maps.googleapis.com/maps/api/staticmap?size=1024x200&zoom=15&maptype=roadmap\
&markers=size:mid%7Ccolor:red%7C<?php localisationEnBase($mysql, 'map','', 'recuperation') ?>&key=AIzaSyDEIF4I4xIgInAxD6qxo52UzbTvi6KlO1k">
	<!-- <script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(48.86031277478549,2.3650750455994007),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(48.86031277478549,2.3650750455994007)});infowindow = new google.maps.InfoWindow({content:'<strong>Boulangerie </strong><br>Paris, France<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script> -->
		
</div>


<!-- //============ 
   /MAIN CONTENT
=============== -->

