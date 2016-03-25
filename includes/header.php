<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page['title']; ?></title>
    <meta name="description" content="<?php echo $page['desc']; ?>">
    <link rel="stylesheet" href="css/global.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta name="format-detection" content="telephone=no">
    <link rel="cannonical" href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
    <?php 
    require_once ('php/config.php');
    include('./functionBdd.php');
    $accueil = recupAccueil($mysql);
    $categorie = recupTable($mysql,'categorie');
    $taille_categorie = sizeof($categorie);
    for($i=0; $i<$taille_categorie; $i++){
        $affiche_categorie[] = $categorie[$i]["actif"];
    }
    if(isset($_SESSION['login']) && $_SESSION['admin']==true) {
    ?>
        <link rel="stylesheet" href="css-admin/admin.css">
    <?php
    }
    ?>
</head>

<body>
    <header>
                <nav id="user-bar">
                    <ul>
                    <?php
                        if(isset($_SESSION['login'])) {
                            if($_SESSION['admin']==true) {
                                ?>
                                <li><a class="btn_admin" href="index.php?page=config-site">Administration</a></li>
                                <?php
                                }
                                ?>
                                <li><a class="btn_logout" href="index.php?page=logout">Deconnexion</a></li>
                                <?php
                            } else {
                                ?>
                                <li><a class="btn_inscription" href="index.php?page=logon">S'inscrire</a></li>
                                <li><a class="btn_login" href="index.php?page=login">Se connecter</a></li>
                                <?php
                            }
                         ?>
                        <li><a class="btn_cart" href="index.php?page=panier"><span>Mon panier</span><span class="icon-shopping-cart"></span></a></li>
                    </ul>
                </nav>


<div class="wrapper contact" id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div id="logo_magasin">
                <a href="index.php"><img src="images/logo_boulanger.png" alt="Logo" id="logo"></a>
            </div>
       
            <div class="col-lg-12">
                <span id="titre_magasin" contenteditable="<?php echo $activeContent; ?>" class="title"><?php echo utf8_encode($accueil['nom_boulangerie']) ?></span>
            </div>
        </div>
    </div>
</div>
        <nav id="first-menu">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?page=categorie">Produits</a></li>
                <li><a href="index.php?page=promotions">Promotions</a></li>
                <!--<li><a href="index.php"><img src="images/breadcrunch_logo.png" alt="Logo" id="logo"></a></li>-->
                <?php
                if ($accueil['blog']!=""){
                ?>
                    <li><a href="#">Blog</a></li>
                <?php
                }
                ?>
                <li><a href="index.php?page=a-propos">A Propos</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
        <nav id="second-menu">
            <ul>
                <li><a id="menu-boulangerie" href="#">Boulangerie</a></li>
                <li><a id="menu-patisserie" href="#">Pâtisserie</a></li>
                <li><a id="menu-sandwich" href="#">Sandwich / Salade</a></li>
                <li><a id="menu-chocolaterie" href="#">Chocolaterie</a></li>
                <li><a id="menu-boisson" href="#">Boisson</a></li>
            </ul>
        </nav>
        <script type="text/javascript">
            produit = ['<?php echo $affiche_categorie[0] ?>', '<?php echo $affiche_categorie[1] ?>', '<?php echo $affiche_categorie[2] ?>', '<?php echo $affiche_categorie[3] ?>', '<?php echo $affiche_categorie[4] ?>'];

            for(i=0; i<produit.length; i++){
                switch(i){
                    case 0:
                        if (produit[i]==0){
                            document.getElementById('menu-boulangerie').style.display = "none";
                        }else {
                            document.getElementById('menu-boulangerie').style.display = "block";
                        }
                        break;
                    case 1:
                       if (produit[i]==0){
                            document.getElementById('menu-patisserie').style.display = "none";
                        }else {
                            document.getElementById('menu-patisserie').style.display = "block";
                        }
                        break;
                    case 2:
                        if (produit[i]==0){
                            document.getElementById('menu-sandwich').style.display = "none";
                        }else {
                            document.getElementById('menu-sandwich').style.display = "block";
                        }
                        break;
                    case 3:
                        if (produit[i]==0){
                            document.getElementById('menu-chocolaterie').style.display = "none";
                        }else {
                            document.getElementById('menu-chocolaterie').style.display = "block";
                        }
                        break;
                    case 4:
                        if (produit[i]==0){
                            document.getElementById('menu-boisson').style.display = "none";
                        }else {
                            document.getElementById('menu-boisson').style.display = "block";
                        }
                        break;
                }
            }
        </script>
    </header>