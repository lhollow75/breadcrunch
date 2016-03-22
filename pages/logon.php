<!-- //============ 
   MAIN CONTENT
=============== -->

<div class="wrapper" id="main-content">
	<div class="container">
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