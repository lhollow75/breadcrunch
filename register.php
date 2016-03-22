<?php
require ('php/config.php');

if(isset($_POST) && !empty($_POST['identifiant']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['telephone'])) {
	$login = htmlspecialchars($_POST['identifiant']);
	$pass1 = htmlspecialchars($_POST['password']);
	$email = htmlspecialchars($_POST['email']);
	$telephone = htmlspecialchars($_POST['telephone']);
	$pass = sha1($pass1);

	$req = $mysql->prepare("SELECT * FROM users WHERE login = :login OR email = :email");
	$req->execute(array(
		':login'=>$login,
		':email'=>$email
		));

	if($req->rowCount()>=1) {
		$reponse = $req->fetch();
		session_start();
		$_SESSION['login']=true;
		header('location:./index.php?page=logon&erreur=Votre adresse email ou votre login est déjà enregistré dans notre base');
		
	}
	else {
		$req = $mysql->prepare("INSERT INTO users (login, mdp, email, telephone, admin)
								VALUES (:login, :mdp, :email, :tel, :admin)");
		$req->execute(array(
		':login'=>$login,
		':mdp'=>$pass,
		':email'=>$email,
		':tel'=>$telephone,
		':admin'=>0
		));

		$_SESSION['login']=true;
		$_SESSION['admin']=false;
		header('location:./index.php');
	}
}
?>