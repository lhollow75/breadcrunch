<!-- //============ 
   MAIN CONTENT
=============== -->

<div class="wrapper" id="main-content">
	<div class="container">
		<form action="./formConnexion.php" method="post" id="connect-form" class="row">
			<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
				<input type="text" name="identifiant" value="" placeholder="Votre identifiant" required>
				<input type="password" name="password" value="" placeholder="Votre mot de passe" required>
			</div>
			<div class="col-lg-12">
				<input class="btn" type="submit" name="sumbit" value="Se connecter">
				<?php 
				if(isset($_GET['erreur'])) {
					echo "<p>".htmlspecialchars($_GET['erreur'])."</p>";
				}
			 	?>
			 	<p><a href="index.php?page=logon">Pas encore inscrit ?</a></p>
			</div>
		</form>
	</div>
</div>


<!-- //============ 
   /MAIN CONTENT
=============== -->