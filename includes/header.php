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
    //print_r($accueil);
    $categorie = recupTable($mysql,'categorie');
    $taille_categorie = sizeof($categorie);
    $module_promotion = $accueil["module_promotion"];
    $module_blog = $accueil["blog"];
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
    <header class="wrapper" id="main-header">
                        <nav id="user-bar">
                            <ul>
                            <?php
                                if(isset($_SESSION['login'])) {
                                    if($_SESSION['admin']==true) {
                                ?>
                                <li><a class="btn_admin" href="index.php?page=config-site">Administration</a></li>
                                <li><a class="btn_cart" href="index.php?page=liste-commande">Liste des commandes</a></li>
                                <?php
                                }
                                ?>
                                <li><a class="btn_logout" href="index.php?page=logout">Deconnexion</a></li>
                                <?php
                            } else {
                                ?>
                                <li><a class="btn_inscription" href="index.php?page=logon">S'inscrire</a></li>
                                <li><a class="btn_login" href="index.php?page=login">Se connecter</a><li>
                                <?php
                            }
                            if(isset($_SESSION['login']) && $_SESSION['admin']!=true) {
                                ?>
                                <li><a class="btn_cart" href="index.php?page=panier"><span>Mon panier</span><span class="icon-shopping-cart"></span></a></li>      
                            <?php
                            }
                            ?>   
                            </ul>
                        </nav>

        <div class="wrapper contact" id="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="logo_magasin">
                            <a href="index.php"><img src="images/logo_boulanger.png" alt="Logo" id="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <span id="titre_magasin" contenteditable="<?php echo $activeContent; ?>" class="title"><?php echo utf8_encode($accueil['nom_boulangerie']) ?></span>
                    </div>
                </div>
            </div>
        <nav id="first-menu">
            <span class="icon-menu" style="color:black;cursor:pointer"></span><!-- Menu burger -->
            <ul class="menu-burger">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?page=categorie">Produits</a></li>
                <li id="menu-promotions" ><a href="index.php?page=promotions">Promotions</a></li>
                <li id="menu-blog"><a href="#">Blog</a></li>
                <li><a id="menu-histoire" href="index.php?page=a-propos"><?php localisationEnBase($mysql, 'histoire_titre','', 'recuperation') ?></a></li>
                <li><a id="menu-contact" href="index.php?page=contact"><?php localisationEnBase($mysql, 'contact_titre','', 'recuperation') ?></a></li>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script type="text/javascript">

            module_promotions = '<?php echo $module_promotion ?>';
            module_blog = '<?php echo $module_blog ?>';
            //console.log("la :"+module_promotions);
            //console.log(module_blog);

            if (module_blog != "" || module_blog != " "){
                $("#menu-blog").hide();
            } else {
                $("#menu-blog").show();
            }

            if (module_promotions==1){
                $("#menu-promotions").show();
            } else {
                $("#menu-promotions").hide();
            }


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
            
            $(window).resize(function() {
                if($(window).width() <= 641){
                    $('.menu-burger').css("display","none");
                    $('.icon-menu').css("z-index","50");
                } else {
                    $('.menu-burger').css("display","block");
                    $('.icon-menu').css("z-index","0");
                }
            });
            
            if($(window).width() <= 641){
                $('.menu-burger').css("display","none");
                $('.icon-menu').css("z-index","50");
            } else {
                $('.menu-burger').css("display","block");
                $('.icon-menu').css("z-index","0");
            }
            
            $('.icon-menu').click(function(){
                $('.menu-burger').toggle();
            });    
        </script>
    </header>