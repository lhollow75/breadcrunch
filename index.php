<?php
session_start();
if (isset($_SESSION['admin']) && $_SESSION['admin']==true){
	$activeContent = "true";
} else {
	$activeContent = "false";
}
require('includes/functions.php');
$page = showPage();
include('includes/header.php');
include ('pages/'.$page['content']);
include ('includes/footer.php');

?>
<script src="javascript/script.js"></script>
<?php
//print_r($_SESSION);

error_reporting(E_ALL);
ini_set("display_errors",1);
?>

