<?php
    include "../config_user.php";
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);
	$modules = "users";
    
	if(fetch_db_ph($modules,$postdata['userPhone'],$con))
	{
		echo "Entered Phone number is already in use";
	}
	else
	{
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$sample_array = array();
			foreach($user_config as $key=>$val) 
			{
				if($val['validate'] == '1')
				{
					if($val['type'] == 'string') 
						validate_to_string($postdata[$val['clientname']],$val['clientname']);
					else
						validate_to_number($postdata[$val['clientname']],$val['clientname']);
				}

				if($val['clientname'] != 'createdDate' && $val['clientname'] != 'userPassword') 
					$sample_array[$key] = (isset($postdata[$val['clientname']])) ? $postdata[$val['clientname']]:'';
				else if($val['clientname'] == 'userPassword')
					$sample_array[$key] = md5($postdata[$val['clientname']]);
				else
					$sample_array[$key] = NOW;
			}
		
			if(singleInsert($modules,$sample_array,$con))
			{
				echo json_encode(array("message"=>$modules." created Successfully","flag"=>true));
				exit;
			}
		}
	}
?>