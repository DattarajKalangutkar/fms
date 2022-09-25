<?php
    include "../config_user.php";
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);
    // print_r($postdata);
	// exit;

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//validation
		$error = false;
		if(empty($postdata['userPhone']))
		{
			echo json_encode(validate_feilds($postdata['userPhone'],'User Phone'));
            exit;
		}
		if(empty($postdata['userPassword']))
		{
			echo json_encode(validate_feilds($postdata['userPassword'],'User Password'));
        	exit;
		}

		//if everythings is FINE then Do validate with Database
		if(validate_with_db('users',$postdata['userPhone'],$postdata['userPassword'],$con))
		{
			$data = getuserdata('users',$postdata['userPhone'],$postdata['userPassword'],$con,'iId');
			//DFA($data);
			$isMI = ($data['iLevel'] == "3") ? true:false;
			$isHod = ($data['iLevel'] == "2") ? true:false;
			
			if($isMI)
			{
				$Hod = "";
			}
			else
			{
				if(!$isHod)
				{
					$Hod = getHodTeam($con,$data['iDepartmentId'],'users');
				}
				else
				{
					$Hod = $data['iId'];
				}
			}

			echo json_encode(array("token"=>encodejwt($postdata['userPhone'],$postdata['userPassword']),"flag"=>true,"message"=>'','userid'=>$data['iId'],"level"=>$data['iLevel'],"isMI"=>$isMI,"isHod"=>$isHod,'Hod'=>$Hod,"userData"=>$data));
			exit;
		}
		else
		{
			echo json_encode(array("token"=>'',"flag"=>false,"message"=>'InValid Credentials'));
			exit;
		}
	}
	//decodejwt(encodejwt(),$con);
?>