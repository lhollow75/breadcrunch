<?php
require ('php/config.php');

if(isset($_POST) && !empty($_POST['identifiant']) && !empty($_POST['password']) ) {
	$login = htmlspecialchars($_POST['identifiant']);
	$pass1 = htmlspecialchars($_POST['password']);
	$pass = sha1($pass1);

	$req = $mysql->prepare("SELECT * FROM users WHERE login = :login AND mdp = :pass");
	$req->execute(array(
		':login'=>$login,
		':pass'=>$pass
		));

	if($req->rowCount()==1) {
		$reponse = $req->fetch();
		session_start();
		$_SESSION['login']=true;
		if ($reponse["admin"]==1){
			$_SESSION['admin']=true;
		} else {
			$_SESSION['admin']=false;
		}
		header('location:./index.php');
		
	}
	else {
		print_r($req->fetch());
		print_r("login: ".$login);
		print_r("pass: ".$pass1);
		//header('location:./index.php?page=login&erreur=Login ou mot de pass incorrect');
		exit();
	}
}
?>