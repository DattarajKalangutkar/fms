<?php
  	include "../../frontend_config.php";
  	session_destroy();
  	header("location:index.php");
	exit;
?>