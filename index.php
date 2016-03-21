<?php
session_start();
require('includes/functions.php');
$page = showPage();
include('includes/header.php');
include ('pages/'.$page['content']);
include ('includes/footer.php');
?>





