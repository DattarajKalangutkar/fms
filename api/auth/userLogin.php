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
		if(validate_with_db('user',$postdata['userPhone'],$postdata['userPassword'],$con))
		{
			echo json_encode(array("token"=>encodejwt($postdata['userPhone'],$postdata['userPassword']),"flag"=>true,"message"=>'','userid'=>getuserdata('user',$postdata['userPhone'],$postdata['userPassword'],$con,'iId')));
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