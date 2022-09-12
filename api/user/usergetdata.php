<?php
    include "../config_user.php";
	include "../../api_function.php";
	if(isset($_GET['modules']))
		$modules = $_GET['modules'];
	if(isset($_GET['id']))
		$id = $_GET['id'];
    $postdata = json_decode(file_get_contents("php://input"), true);
    
    if($_SERVER['REQUEST_METHOD'] == "GET")
	{   
		$sample_array = array();
		$data_from_db=getspecificdata($con,'user',$id,'iId');
		// print_r($data_from_db);
		// exit;
		foreach($data_from_db as $key=>$val)
		{
			$sample_array['id'] = $data_from_db['iId'];
			foreach($user_config as $key=>$val)
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
		echo json_encode(array('user'=>$sample_array));
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