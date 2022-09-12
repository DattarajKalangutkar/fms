<?php
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);
    if($_SERVER['REQUEST_METHOD'] == "POST" && $_GET['identifier']=="sendOTP")
	{
		if(checkemailId($con,$postdata['email']))
		{
			echo json_encode(error_msg('Email Id Already Exist',false));
			exit;
		}
		else
		{
			$digits = 4;
			$otp = rand(pow(10, $digits-1), pow(10, $digits)-1);
			$data = array(
				"email"=>$postdata['email'],
				"otp"=>$otp,
				"verified"=>"0",
				"vStatus"=>"1"
			);
						
			if(singleInsert('otp',$data,$con))
			{
				echo json_encode(array("message"=>"OTP is send to Email id","flag"=>true,"otp"=>$otp));
				exit;
			}
		}
    }

	if($_SERVER['REQUEST_METHOD'] == "POST" && $_GET['identifier']=="verifyOTP")
	{
		if(checkverifiedOTP($con,$postdata['email'],$postdata['otp']))
		{
			updateDatail($con,'otp',array('verified'=>'1'),'email',$postdata['email']);
			echo json_encode(array("message"=>"OTP is Verified","flag"=>true));
			exit;
		}
		else
		{
			echo json_encode(array("message"=>"InValid OTP","flag"=>false));
			exit;
		}
    }
	
?>