<?php
    include "../config_transcation.php";
	include "../../api_function.php";
	if(isset($_GET['modules']))
		$modules = $_GET['modules'];
	if(isset($_GET['id']))
		$id = $_GET['id'];
    $postdata = json_decode(file_get_contents("php://input"), true);
	
	$temp_get_array = $_GET;
	unset($temp_get_array['modules']);
    
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
				foreach ($transcation_config as $key=>$val) 
				{
					if(array_key_exists($val['clientname'],$temp_get_array))
					{
						$search_str .= " and $key LIKE '".$temp_get_array[$val['clientname']]."'";
					}
				}
			}

			$data_from_db = getalltransaction($con,'transaction',$search_str); //get all the data from the database
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
						$sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
				}
			}	
			$count = count($sample_array);
		}
		echo json_encode(array("count"=>$count,"rows"=>$sample_array));
		exit;
	}

    if($_SERVER['REQUEST_METHOD'] == 'DELETE')
	{
		if(specific_data_id($con,"user",$id))
		{
			echo json_encode(array("message"=>"user"." delete Successfully"));
			exit;
		}
	}
?>