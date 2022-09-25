<?php
  	include "../../backend/api_function.php";
  	session_destroy();
  	header("location:index.php");
	exit;
?>