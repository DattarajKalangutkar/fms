<?php
	include "../config_user.php";
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);

	if(isset($_GET['id']))
		$id = $_GET['id'];

	$temp_get_array = $_GET;
	unset($temp_get_array['modules']);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$sample_array = array();
		foreach($master_config[$modules] as $key=>$val) //Validation each feilds which are mandatory
		{
			if($val['validate'] == '1')
			{
				if($val['type'] == 'string') //validate based on type
					validate_to_string($postdata[$val['clientname']],$val['clientname']);
				else
					validate_to_number($postdata[$val['clientname']],$val['clientname']);
			}
			
			if($val['clientname'] != 'createdDate') //if everything is fine then proceed further
				$sample_array[$key] = (isset($postdata[$val['clientname']])) ? $postdata[$val['clientname']]:'';
			else
				$sample_array[$key] = NOW;
		}

		if(singleInsert($modules,$sample_array,$con))
		{
			echo json_encode(array("message"=>$modules." created Successfully","flag"=>true));
			exit;
		}
	}

	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$sample_array = array();
		$count = 0;
		if(isset($id))
		{
			$data_from_db = getspecificdata($con,$modules,'iId',$id);//get specific data from database
			$sample_array['id'] = $data_from_db['iId'];
			foreach($master_config[$modules] as $key=>$val)
			{
				if($key == 'vStatus')
				{
					$sample_array[$val['clientname']] = $data_from_db[$key];
				}
				else
					$sample_array[$val['clientname']] = $data_from_db[$key];
			}
			$count = 1;
		} 
		else
		{
			//search Functionality here
			$search_str = '';
			if(count($temp_get_array) > 0)
			{
				foreach ($user_config as $key=>$val) 
				{
					if(array_key_exists($val['clientname'],$temp_get_array))
					{
						$search_str .= " and $key LIKE '".$temp_get_array[$val['clientname']]."'";
					}
				}
			}

			$data_from_db = getalldata($con,'user',$search_str); //get all the data from the database
			foreach($data_from_db as $key=>$val)
			{
				$sample_array[$key]['id'] = $data_from_db[$key]['iId'];
				foreach($user_config as $keys=>$val)
				{
					if($keys == 'vStatus')
					{
						$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
					}
					else
						$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
				}
			}	
			$count = count($sample_array);
		}
		echo json_encode(array("count"=>$count,"rows"=>$sample_array));
		exit;
	}

	if($_SERVER['REQUEST_METHOD'] == "PUT")
	{
		$sample_array = array();
		foreach($master_config[$modules] as $key=>$val) //Validation each feilds which are mandatory
		{
			if($val['validate'] == '1')
			{
				if($val['type'] == 'string') //validate based on type
					validate_to_string($postdata[$val['clientname']],$val['clientname']);
				else
					validate_to_number($postdata[$val['clientname']],$val['clientname']);
			}
			if($val['clientname'] != 'Created_date') //if everything is fine then proceed further
				$sample_array[$key] = (isset($postdata[$val['clientname']])) ? $postdata[$val['clientname']]:'';
			else
				$sample_array[$key] = NOW;
		}

		if(updateData($con,$modules,$sample_array,'iId',$id))
		{
			echo json_encode(array("message"=>$modules." Updated Successfully","flag"=>true));
			exit;
		}
	}

	if($_SERVER['REQUEST_METHOD'] == 'DELETE')
	{
		if(specific_data_id($con,$modules,$id))
		{
			echo json_encode(array("message"=>$modules." delete Successfully"));
			exit;
		}
	}
	// }
	// else
	// {
	// 	echo json_encode(array("message"=>"Invalid Token","error"=>true));
	// 	exit;
	// }
?>