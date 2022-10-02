<?php
    include "../config_transcation.php";
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);
	$modules = "service_registration_form";
	if(isset($_GET['id']))
		$id = $_GET['id'];
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$sample_array = array();
		foreach($transcation_config as $key=>$val) //Validation each feilds which are mandatory
		{
			if($val['validate'] == 1)
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

			if($val['clientname'] == 'createdDate')
				$sample_array[$key] = NOW;
			else
				$sample_array[$key] = (isset($postdata[$val['clientname']])) ? $postdata[$val['clientname']]:'';
        }	

		if(singleInsert($modules,$sample_array,$con))
		{
			echo json_encode(array("message"=>"Services Saved Successfully","flag"=>true));
			exit;
		}
	}

	if($_SERVER['REQUEST_METHOD'] == "PUT")
	{
		$sample_array = array();
		foreach($transcation_config as $key=>$val) //Validation each feilds which are mandatory
		{
			if($val['validate'] == 1)
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

			if($val['clientname'] == 'createdDate')
				$sample_array[$key] = NOW;
			else
				$sample_array[$key] = (isset($postdata[$val['clientname']])) ? $postdata[$val['clientname']]:'';
        }	

		if(updateData($con,$modules,$sample_array,'iId',$id))
		{
			echo json_encode(array("message"=>"Services Updated Successfully","flag"=>true));
			exit;
		}
	}
?>