

<!-- //============ 
   MAIN CONTENT
=============== -->


<div class="wrapper contact" id="main-content">
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
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
</div>
<script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(48.86031277478549,2.3650750455994007),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(48.86031277478549,2.3650750455994007)});infowindow = new google.maps.InfoWindow({content:'<strong>Boulangerie </strong><br>Paris, France<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>CONTACT</h1>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<form action="" method="post" id="contact-form" class="row">
					<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
						<input type="password" name="nom" value="" placeholder="Nom.." required>
						<input type="email" name="email" value="" placeholder="Email.." required>
						<input type="tel" name="tel" value="" placeholder="Sujet.." required>
					</div>
					<div class="col-lg-12">
						<textarea rows="8" name="message" id="message" placeholder="Message.."></textarea>
						<input class="btn" type="submit" name="sumbit" value="Envoyer">
					</div>
				</form>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="contact-details">
					<p class="col-lg-12">Le Lorem Ipsum est simplement du faux texte employé dans la compo- sition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de </p>
					<p class="col-lg-5 ">
						<span class="details">Adresse</span>
						<span class="details">Téléphone</span>
						<span class="details">Email</span>
					</p>
					<p class="col-lg-7">
						<span class="dtl">Siège Social<br>2, rue de la Monnaie<br>10000 Troyes</span>
						<span class="dtl">+33 (0)3 25 80 38 38</span>
						<span class="dtl">infos@pascal-caffet.com</span>
					</p>
				</div>
				<div class="social-network">
					<img src="./img/facebook.png">
					<img src="./img/twitter.png">
					<img src="./img/insta.png">
					<img src="./img/pinterest.png">
					<img src="./img/youtube.png">
				</div>
			</div>
		</div>
	</div>
</div>


<!-- //============ 
   /MAIN CONTENT
=============== -->

