<?php
  	include "../../backend/api_function.php";
	$postdata = $_POST;

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
			$isMI = ($data['iLevel'] == "3") ? true:false;
			$isHod = ($data['iLevel'] == "2") ? true:false;	
			if($isMI)
			{
				$Hod = false;
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
			
			$_SESSION['userData'] = json_encode(array("token"=>encodejwt($postdata['userPhone'],$postdata['userPassword']),"flag"=>true,'userid'=>$data['iId'],"level"=>$data['iLevel'],"isMI"=>$isMI,"isHod"=>$isHod,'Hod'=>$Hod,"userData"=>$data));

			header("location:dashboard.php");
			exit;
		}
		else
		{
			header("location:index.php");
			exit;
		}
	}
?>