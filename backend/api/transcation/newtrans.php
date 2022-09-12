<?php
    include "../config_transcation.php";
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);
	$modules = "transcation";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$sample_array = array();
		foreach($transcation_config as $key=>$val) //Validation each feilds which are mandatory
		{
			if(isset($val['phase1']) && $val['phase1'] == '1' && $val['validate']== '1')
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

			if(isset($val['phase1']) && $val['phase1'] == '1')
				$sample_array[$key] = (isset($postdata[$val['clientname']])) ? $postdata[$val['clientname']]:'';

			if($val['clientname'] == 'createdDate')
				$sample_array[$key] = NOW;
        }	
		if(singleInsert($modules,$sample_array,$con))
		{
			echo json_encode(array("message"=>$modules." created Successfully","flag"=>true));
			exit;
		}
	}
?>