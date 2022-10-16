<?php
	include "../config_transcation.php";
	include "../../api_function.php";
	if(isset($_GET['modules']))
		$modules = $_GET['modules'];
	if(isset($_GET['id']))
		$id = $_GET['id'];
	if(isset($_GET['status']))
		$status = $_GET['status'];
	if(isset($_GET['user']))
		$user = $_GET['user'];
	if(isset($_GET['hod']))
		$hod_list = $_GET['hod'];
	if(isset($_GET['admin']))
		$admin_list = $_GET['admin'];
    $postdata = json_decode(file_get_contents("php://input"), true);
	
	$temp_get_array = $_GET;
	unset($temp_get_array['modules']);

	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$sample_array = array();
		$count = 0;
		if(isset($id))
		{
			$data_from_db = getspecificServicelistbasedonId($con,'service_registration_form','iId',$id);//get specific data from database
			//DFA($data_from_db);
			$sample_array['id'] = $data_from_db['iId'];
			foreach($transcation_config as $key=>$val)
			{
				if($key == 'vStatus')
				{
					$sample_array[$val['clientname']] = $data_from_db[$key];
				}
				else{
					if(isset($val['data_fetch']))
					{
						$sample_array[$val['clientname']] = GETXDATAFROMYID($con,$val['data_fetch'],'vName',$data_from_db[$key]);
					}
					else{
						$sample_array[$val['clientname']] = $data_from_db[$key];
					}
					//$sample_array[$val['clientname']] = $data_from_db[$key];
				}
			}
			$count = 1;
		} 
		else if(isset($user))
		{
			$data_from_db = getspecificServicelistbasedonuser($con,'service_registration_form','iCreatedBy',$user);
			if(count($data_from_db) > 0)
			{
				foreach($data_from_db as $key=>$val)
				{
					$sample_array[$key]['id'] = $data_from_db[$key]['iId'];
					foreach($transcation_config as $keys=>$val)
					{
						if($keys == 'vStatus')
						{
							$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
						}
						else
						{
							if(isset($val['data_fetch']))
							{
								$sample_array[$key][$val['clientname']] = GETXDATAFROMYID($con,$val['data_fetch'],'vName',$data_from_db[$key][$keys]);
							}
							else{
								$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
							}
							//$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
						}
					}
				}	
			}
			$count = count($sample_array);
		}
		else if(isset($hod_list))
		{
			$data_from_db = getHodlistservices($con,'service_registration_form','iApprovedUserId',$hod_list);
			if(count($data_from_db) > 0)
			{
				foreach($data_from_db as $key=>$val)
				{
					$sample_array[$key]['id'] = $data_from_db[$key]['iId'];
					foreach($transcation_config as $keys=>$val)
					{
						if($keys == 'vStatus')
						{
							$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
						}
						else
						{
							if(isset($val['data_fetch']))
							{
								$sample_array[$key][$val['clientname']] = GETXDATAFROMYID($con,$val['data_fetch'],'vName',$data_from_db[$key][$keys]);
							}
							else{
								$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
							}
							//$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
						}
					}
				}	
			}
			$count = count($sample_array);
		}
		else if(isset($admin_list))
		{
			$data_from_db = getAdminlistservices($con,'service_registration_form','iApprovedUserId',$admin_list);
			if(count($data_from_db) > 0)
			{
				foreach($data_from_db as $key=>$val)
				{
					$sample_array[$key]['id'] = $data_from_db[$key]['iId'];
					foreach($transcation_config as $keys=>$val)
					{
						if($keys == 'vStatus')
						{
							$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
						}
						else
						{
							if(isset($val['data_fetch']))
							{
								$sample_array[$key][$val['clientname']] = GETXDATAFROMYID($con,$val['data_fetch'],'vName',$data_from_db[$key][$keys]);
							}
							else{
								$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
							}
							//$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
						}
					}
				}	
			}
			$count = count($sample_array);
		}
		else
		{
			//search Functionality here
			$search_str = '';
			if(count($temp_get_array) > 0)
			{
				foreach ($transcation_config as $key=>$val) 
				{
					if(array_key_exists($val['clientname'],$temp_get_array))
					{
						$search_str .= " and $key LIKE '".$temp_get_array[$val['clientname']]."'";
					}
				}
			}

			$data_from_db = getservicelist($con,'service_registration_form',$status); //get all the data from the database
			if(count($data_from_db) > 0)
			{
				foreach($data_from_db as $key=>$val)
				{
					$sample_array[$key]['id'] = $data_from_db[$key]['iId'];
					foreach($transcation_config as $keys=>$val)
					{
						if($keys == 'vStatus')
						{
							$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
						}
						else
						{
							if(isset($val['data_fetch']))
							{
								$sample_array[$key][$val['clientname']] = GETXDATAFROMYID($con,$val['data_fetch'],'vName',$data_from_db[$key][$keys]);
							}
							else{
								$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
							}
							//$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
						}
					}
				}	
			}
			$count = count($sample_array);
		}
		echo json_encode(array("count"=>$count,"rows"=>$sample_array));
		exit;
	}

?>