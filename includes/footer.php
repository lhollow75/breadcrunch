	<footer>
	    <div class="wrapper" id="main-content">
    	    <div class="container">
        		<div class="row">

        			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	        				<div id="footer-presentation">
	        				<h3 id="titre-presentation-magasin" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'titre-presentation-magasin','', 'recuperation') ?>Qui sommes-nous ?</h3>
	        				<p id="texte-presentation-magasin" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'texte-presentation-magasin','', 'recuperation') ?>Fusce mauris magna, ornare aliquam velit ac, ullamcorper semper ligula. Nulla commodo sed nibh at hendrerit. Ut vel ornare metus, non imperdiet tortor.</p>
	        			</div>
					</div>

        			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	                	<div id="footer-social">
	                		<h3 id="reseaux-sociaux" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'reseaux-sociaux','', 'recuperation') ?>Suivez-nous !</h3>
					        <div id="social-icons">
					        	<ul>
					        		<li><a href="#"><span class="icon-facebook"></span></a></li>
					        		<li><a href="#"><span class="icon-twitter"></span></a></li>
					        		<li><a href="#"><span class="icon-instagram"></span></a></li>
					        		<li><a href="#"><span class="icon-pinterest"></span></a></li>
					        		<li><a href="#"><span class="icon-youtube"></span></a></li>
					        	</ul>
					        </div>
					    </div>
				    </div>

        			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				    	<div id="footer-location">
	                		<h3 id="presentation-adresse" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'presentation-adresse','', 'recuperation') ?>Où nous trouver ?</h3>
	                		<p class="location-street" id="adresse" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'adresse','', 'recuperation') ?>2, rue de la Monnaie</p>
							<p>
								<span class="location-cp" id="code_postal" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'code_postal','', 'recuperation') ?>10000</span>
								<span class="location-city" id="ville" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'ville','', 'recuperation') ?>Troyes</span>
							</p>
							<p class="location-phone-number" id="telephone" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'telephone','', 'recuperation') ?>+33 (0)3 25 80 38 38</p>
							<p class="location-mail" id="email" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'email','', 'recuperation') ?>infos@pascal-caffet.com</p>
					    </div>
				    </div>




    </footer>

    <!-- message erreur or success -->
	<div class="alert">
		<p class="successMsg"></p>
	</div>
    <!-- /message -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="./js/production.min.js"></script>
	<script src="http://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
	
</body>
        
</html>