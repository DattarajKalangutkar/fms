<?php
    include "../config_transcation.php";
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);
	$modules = "transcation";
    if(isset($_GET['id']))
		$id = $_GET['id'];
	// print_r($postdata);
	// exit(0);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$sample_array = array();
		foreach($transcation_config as $key=>$val) //Validation each feilds which are mandatory
		{
			if(isset($val['phase3']) && $val['phase3'] && $val['validate']== '1')
			{
				if($val['type'] == 'string') //validate based on type
					validate_to_string($postdata[$val['clientname']],$val['clientname']);
				else
					validate_to_number($postdata[$val['clientname']],$val['clientname']);
			}
			if(isset($val['clientname']) && isset($val['phase3'])=='1' && $val['phase3'] =='1') //if everything is fine then proceed further
				$sample_array[$key] = (isset($postdata[$val['clientname']])) ? $postdata[$val['clientname']]:'';
		}


		$rescuer_id = GETXFROMYID($con,'transcation','iRescuerId',$id);

		updateDataForIncrement($con,'rescuer',array('iPoints'=>$postdata['transRate']),'iId',$rescuer_id);

		if(updateData($con,$modules,$sample_array,'iId',$id))
		{
			echo json_encode(array("message"=>$modules." Updated Successfully","flag"=>true));
			exit;
		}
	}
?>