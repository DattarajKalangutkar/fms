<?php
	$permission_array = getUserPermission(stdobject_to_array(decodejwt($_SESSION['userData']))['data']['user_data']['permissions']); 
	//DFA($permission_array);
	$orgnaisation_sideMenu_name = stdobject_to_array(decodejwt($_SESSION['userData']))['data']['user_data']['organisationName'];
?>