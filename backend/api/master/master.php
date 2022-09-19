<?php
	include "../config_master.php";
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);
	if(isset($_GET['modules']))
		$modules = $_GET['modules'];
	if(isset($_GET['id']))
		$id = $_GET['id'];

	$temp_get_array = $_GET;
	unset($temp_get_array['modules']);
	// if(validate_with_db(decodejwt(getallheaders()['Authorization'])->data->phone,md5(decodejwt(getallheaders()['Authorization'])->data->password),$con))
	// {

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

			if(isset($val['other_validation']))
			{
				if(checkExist($con,$modules,$postdata[$val['clientname']],$val['other_validation']))
				{
					echo json_encode(error_msg('Value already Present in the Database',false));
					exit;
				}
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
				// if($key == 'vStatus')
				// {
				// 	$sample_array[$val['clientname']] = $data_from_db[$key];
				// }
				// else
				// 	$sample_array[$val['clientname']] = $data_from_db[$key];
				if($key == 'vImage')
				{
					$sample_array[$val['clientname']] = $api_url.$data_from_db[$key];
				}
				else{
					if(isset($val['data_fetch']))
					{
						$sample_array[$val['clientname']] = GETXDATAFROMYID($con,$val['data_fetch'],'vName',$data_from_db[$key]);
					}
					else{
						$sample_array[$val['clientname']] = $data_from_db[$key];
					}
				}
				// else
				// {
				// 	$sample_array[$val['clientname']] = $data_from_db[$key];
				// }
			}
			$count = 1;
		} 
		else
		{
			//search Functionality here
			$search_str = '';
			if(count($temp_get_array) > 0)
			{
				foreach ($master_config[$modules] as $key=>$val) 
				{
					if(array_key_exists($val['clientname'],$temp_get_array))
					{
						$search_str .= " and $key LIKE '".$temp_get_array[$val['clientname']]."'";
					}
				}
			}

			$data_from_db = getalldata($con,$modules,$search_str); //get all the data from the database
			foreach($data_from_db as $key=>$val)
			{
				$sample_array[$key]['id'] = $data_from_db[$key]['iId'];
				foreach($master_config[$modules] as $keys=>$val)
				{
					if($keys == 'vImage')
					{
						$sample_array[$key][$val['clientname']] = $api_url.$data_from_db[$key][$keys];
					}
					else{
						if(isset($val['data_fetch']))
						{
							$sample_array[$key][$val['clientname']] = GETXDATAFROMYID($con,$val['data_fetch'],'vName',$data_from_db[$key][$keys]);
						}
						else{
							$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
						}
					}
					// else
					// {
					// 	$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
					// }
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

			// if(isset($val['other_validation']))
			// {
			// 	if(checkExist($con,$modules,$postdata[$val['clientname']],$val['other_validation']))
			// 	{
			// 		echo json_encode(error_msg('Value already Present in the Database',false));
			// 		exit;
			// 	}
			// }

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
		if(array_key_exists("vImage",$master_config[$modules]))
		{
			$filename = GETXFROMYID($con,$modules,"vImage",$id);
			unlink($file_check.$filename);	
		}

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