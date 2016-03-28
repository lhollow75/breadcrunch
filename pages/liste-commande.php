<?php
$cmdIduser = recupCommander($mysql); 
?>


<h1 class="page_titre">Liste des commandes</h1>
<hr>
<div class="wrapper" id="main-content">
	<div class="container">

		<ul class="filter-list">
		    <li>
		        <h2>Filtres : </h2>
		    </li>   
		    <li>
		        <a href="#">
		        	<p class="filter-btn-untreated">Non traités</p>
		        </a>
		    </li>
		    <li>
		        <a href="#">
		        	<p class="filter-btn-accepted">Acceptées</p>
		        </a>
		    </li>
		    <li>
		        <a href="#">
		        	<p class="filter-btn-waiting">En attente</p>
		        </a>
		    </li>
		    <li>
		        <a href="#">
		        	<p class="filter-btn-canceled">Annulées</p>
		        </a>
		    </li>
		</ul>

<?php 
//Begining of order
foreach ($cmdIduser as $key => $value) {
	$cmd = recupCommande($mysql, $cmdIduser[$key]);
	echo
		'<div class="commande row">
		<div class="data-product">
			<div class="icon-squared-cross close-btn"></div>
		    <ul>
		        <li>
			    <p class="info-commande">N° Commande : </p>
			    </li>
			    <li>
			    <p id="numero-commande" class="filter-btn-untreated">
			    '.$cmd[0][0].'
			    </p>
			    </li>
			</ul>
		</div>
		<div class="rowdataproduct row">
		    <ul class="dataproduct-list">
		        <li>
			    	<p class="info-commande">Nom : </p>
			    </li>
			    <li>
			    	<p id="nom-client">'.$cmd[0][1].'</p>
			    </li>
			    <li>
			    	<p class="info-commande">Date : </p>
			    </li>
			    <li>
			    	<p id="date-commande">'.$cmd[0][2].'</p>
			    </li>
			    <li>
			    	<p class="info-commande">Heure : </p>
			    </li>
			    <li>
			    	<p id="heure-commande">'.$cmd[0][3].'</p>
			    </li>
			</ul>
		</div>'; 
		//Begining of ordered product
		for ($i = 0; $i < sizeof($cmd); $i++) {
			echo '
	    		<div class="product-contents">
					<div class="product col-sm-offset-0 col-xs-offset-0 col-lg-5 col-md-5 col-sm-10 col-xs-10">
			    		<div class="product-space">
							<img src="images/'.$cmd[$i][4].'" alt="">
							<p id="name-product">'.$cmd[$i][5].'</p>
							<p class="info">Pour offrir : <span ';
							if ($cmd[$i][6] == 1){ 
								echo 'class="icon-checkbox-checked"'; 
							}else{ 
								echo 'class="icon-squared-cross"';
							} 
							echo '></span></p>
							<p class="info">Message : <span id="message">'.$cmd[$i][7].'</span></p>
							<p id="price">'.$cmd[$i][8].'€</p>
		        		</div>
					</div>';
		} 
		//End of ordered product
		//rest of information on global order
		echo '  
		    <div class="row productend col-sm-10 col-xs-10">
		        <div class="col-lg-8">
		            <p></br>Commentaire (demande particulière,...) :</p>
			        <p>'.$cmd[0][9].'</p>
		        </div>
			    <div class="col-lg-4">
			    	<ul>
			        	<li>
	        				<p>Total : </p>
            			</li>
			            <li>
			                <a id="total-price">'.$cmd[0][10].'€</a>
			            </li>
            		</ul>
            	</div>
	    	</div>
    	</div>
    	<div class="col-lg-12 buttons">
		    <button class="col-lg-4 col-sm-12 btn-accept">Accepter la commande</button>
		    <button class="col-lg-4 col-sm-12 btn-wait">Mettre en attente</button>
		    <button class="col-lg-4 col-sm-12 btn-cancel">Annuler la commande</button>
   		</div>
	</div>
</div>
</div>' 

    ;} 
    ?>