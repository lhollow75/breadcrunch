<!-- //============ 
   MAIN CONTENT
=============== -->

<div class="wrapper" id="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>INSCRIPTION</h1>
			</div>
			<form action="./register.php" method="post" id="register-form" class="row">
				<div class="column col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<input type="text" name="nom" value="" placeholder="Votre nom.." required><span class="">*</span>
					<input type="email" name="email" value="" placeholder="Votre email.." required><span class="">*</span>
					<input type="password" name="password" value="" placeholder="Votre mot de passe" required><span class="">*</span>
					<input type="tel" name="tel" value="" placeholder="Votre téléphone.." required><span class="">*</span>
				</div>
				<div class="column column2 col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<input type="text" name="nom" value="" placeholder="Votre prénom.." required><span class="">*</span>
					<input type="email" name="email" value="" placeholder="Confirmez votre email.." required><span class="">*</span>
					<input type="password" name="password" value="" placeholder="Confirmez votre mot de passe" required><span class="">*</span>
					<input type="date" max="1905-01-01" min="2016-12-31" name="the_date"><span class="">*</span>
				<?php 
					if(isset($_GET['erreur'])) {
						echo "<p>".htmlspecialchars($_GET['erreur'])."</p>";
					}
				?>
				</div>
				<div class="col-lg-12">
					<input class="required" type="checkbox">
						<p class="req">Je m’inscris à la Newsletter pour recevoir toutes les promotions proposées par la
						boulangerie NOM_BOULANGERIE<span class="">*</span></p>
						<br><br>
					<input class="required" type="checkbox">
						<p class="req">J’accepte les Conditions Générales d’Utilisation<span class="">*</span></p>
					<input class="btn" type="submit" name="sumbit" value="Je m'inscris">
				</div>
			</form>
		</div>
	</div>
</div>


<!-- //============ 
   /MAIN CONTENT
=============== -->