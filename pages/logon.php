<!-- //============ 
   MAIN CONTENT
=============== -->

<div class="wrapper" id="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>CONTACT</h1>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<form action="./register.php" method="post" id="register-form" class="row">
					<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
						<input type="text" name="nom" value="" placeholder="Votre nom.." required>
						<input type="text" name="nom" value="" placeholder="Votre prénom.." required>
						<input type="email" name="email" value="" placeholder="Votre Email.." required>
						<input type="email" name="email" value="" placeholder="Confirmez Votre Email.." required>
						<input type="password" name="password" value="" placeholder="Votre mot de passe" required>
						<input type="password" name="password" value="" placeholder="Confimrez Votre mot de passe" required>
						<input type="tel" name="tel" value="" placeholder="Votre téléphone.." required>
						<input type="date" max="1905-01-01" min="2016-12-31" name="the_date">
						<input type="checkbox">Je m’inscris à la Newsletter pour recevoir toutes les offres spéciales proposée de la
boulangerie NOM_BOULANGERIE</div>
						<input type="checkbox">J’accepte les Conditions Générales d’Utilisation</div>
					</div>
					<div class="col-lg-12">
						<textarea rows="8" name="message" id="message" placeholder="Message.."></textarea>
						<input class="btn" type="submit" name="sumbit" value="Je m'inscris">
					</div>
				</form>
			</div>
		<form action="./register.php" method="post" id="register-form" class="col-lg-6 col-lg-offset-3 col-xs-12 col-xs-offset-0">
			<input type="text" name="identifiant" value="" placeholder="Votre identifiant" required>
			<input type="password" name="password" value="" placeholder="Votre mot de passe" required>
			<input type="tel" name="telephone" value="" placeholder="Votre numéro de téléphone" required>
			<input type="email" name="email" value="" placeholder="Votre adresse email" required>
			<input type="submit" name="sumbit" value="S'enregistrer">
			<?php 
				if(isset($_GET['erreur'])) {
					echo "<p>".htmlspecialchars($_GET['erreur'])."</p>";
				}
			 ?>
		</form>
	</div>
</div>


<!-- //============ 
   /MAIN CONTENT
=============== -->