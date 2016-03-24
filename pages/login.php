<!-- //============ 
   MAIN CONTENT
=============== -->

<div class="wrapper" id="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>CONNEXION</h1>
			</div>
			<form action="./formConnexion.php" method="post" id="connect-form" class="row">
				<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<input type="email" name="identifiant" value="" placeholder="Email.." required>
					<p><a href="index.php?page=logon">Pas encore inscrit ?</a></p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<input type="password" name="password" value="" placeholder="Mot de passe.." required>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<input class="btn" type="submit" name="sumbit" value="Se connecter">
					<?php 
					if(isset($_GET['erreur'])) {
						echo "<p>".htmlspecialchars($_GET['erreur'])."</p>";
					}
				 	?>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- //============ 
   /MAIN CONTENT
=============== -->