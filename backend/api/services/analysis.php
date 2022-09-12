<?php
	include '../../api_function.php';
	$analysis_data = array();
	$analysis_data['total_user'] = count(getalldata($con,'user',''));
	$analysis_data['total_approve_rescuer'] = count(getresgisterrescuer($con,'rescuer','','1'));
	$analysis_data['total_disapprove_rescuer'] = count(getresgisterrescuer($con,'rescuer','','2'));
	$analysis_data['total_request'] = count(getresgisterrescuer($con,'rescuer','','0'));
	echo json_encode($analysis_data);
	exit;
?>