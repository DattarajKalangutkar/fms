<?php
  	include "../frontend_config.php";
  	$type = $_GET['page'];
    $_SESSION['userData'] = $_GET['token'];

    if($type == 'user')
		header("location:dashboard/notification.php");
	
	exit;
?>