<?php
    include "../config_transcation.php";
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);
	$modules = "transcation";
	// print_r($postdata);
	// exit(0);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$sample_array = array();
		foreach($transcation_config as $key=>$val) //Validation each feilds which are mandatory
		{
			if($val['validate'] == '1')
			{
				if($val['type'] == 'string') //validate based on type
					validate_to_string($postdata[$val['clientname']],$val['clientname']);
				else
					validate_to_number($postdata[$val['clientname']],$val['clientname']);
			}
			
			if(isset($val['other_validation']))
			{
				if(checkExist($con,$modules,$postdata[$val['clientname']],$val['other_validation']))
				{
					echo json_encode(error_msg('Value already Present in the Database',false));
					exit;
				}
			}
			if($val['clientname'] != 'createdDate' && $val['clientname'] != 'rescuerPassword') //if everything is fine then proceed further
				$sample_array[$key] = (isset($postdata[$val['clientname']])) ? $postdata[$val['clientname']]:'';
			else if($val['clientname'] == 'rescuerPassword')
				$sample_array[$key] = md5($postdata[$val['clientname']]);
			else
				$sample_array[$key] = NOW;
        }	
		// print_r($sample_array);
		// exit(0);
		
		if(singleInsert($modules,$sample_array,$con))
		{
			echo json_encode(array("message"=>$modules." created Successfully","flag"=>true));
			exit;
		}
	}
?>