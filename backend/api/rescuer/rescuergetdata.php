<?php
    include "../config_rescuer.php";
	include "../../api_function.php";
	if(isset($_GET['modules']))
		$modules = $_GET['modules'];
	if(isset($_GET['id']))
		$id = $_GET['id'];
    $postdata = json_decode(file_get_contents("php://input"), true);
    
    if($_SERVER['REQUEST_METHOD'] == "GET")
	{   
		$sample_array = array();
		$data_from_db=getspecificdata($con,'rescuer',$id,'iId');
		foreach($data_from_db as $key=>$val)
		{
			$sample_array['id'] = $data_from_db['iId'];
			foreach($rescuer_config as $key=>$val)
			{
				if($key == 'vStatus')
				{
					$sample_array[$val['clientname']] = $data_from_db[$key];
				}
				else
					$sample_array[$val['clientname']] = $data_from_db[$key];
			}
		}
		//display_specific_User_Details
		echo json_encode(array('rescuer'=>$sample_array));
		exit;
    }
?>