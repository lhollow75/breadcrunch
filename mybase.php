<?php
session_start();
require 'php/config.php';

if (isset($_POST['data'])) {
	$data = json_encode($_POST['data']);
	$req = $mysql->prepare("UPDATE content SET content = :data WHERE page = '".$_SESSION['context']."' ");
	$req->bindParam(':data', $data, PDO::PARAM_STR);
	$update=$req->execute();
	if($update) {
		echo "update réussi";
	}
	else {
		echo "échec update";
	}
}
?>