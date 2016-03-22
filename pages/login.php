<!-- //============ 
   MAIN CONTENT
=============== -->

<div class="wrapper" id="main-content">
	<div class="container">
		<form action="./formConnexion.php" method="post" id="connect-form" class="col-lg-6 col-lg-offset-3 col-xs-12 col-xs-offset-0">
			<input type="text" name="identifiant" value="" placeholder="Votre identifiant" required>
			<input type="password" name="password" value="" placeholder="Votre mot de passe" required>
			<input type="submit" name="sumbit" value="Se connecter">
			<?php 
				if(isset($_GET['erreur'])) {
					echo "<p>".htmlspecialchars($_GET['erreur'])."</p>";
				}
			 ?>
			
			 <p class="col-lg-6 col-xs-12"><a href="index.php?page=logon">Pas encore inscrit ?</a></p>
		</form>
	</div>
</div>


<!-- //============ 
   /MAIN CONTENT
=============== -->