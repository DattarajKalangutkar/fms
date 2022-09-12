<?php
    include "../config_rescuer.php";
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);
    $modules = "rescuer";
	if(isset($_GET['id']))
		$id = $_GET['id'];
    if($_SERVER['REQUEST_METHOD'] == "PUT")
	{
		if(empty($postdata['rescuerVerification']))
		{
			echo json_encode(validate_feilds($postdata['rescuerVerification'],'Rescuer Verification'));
        	exit;
		}

        //check the value from the postman
		$sample_array = array(
            'vVerificationstatus'=>$postdata['rescuerVerification'],
			'vAchievement'=>'0'
		);

		if($postdata['rescuerVerification'] == 1)
		{
			$msg = "approved";
		}
		else
		{
			$msg = "disapproved";
		}

		if(updateData($con,$modules,$sample_array,'iId',$id))
		{
			echo json_encode(array("message"=>"Rescuer $msg is Updated Successfully","flag"=>true));
			exit;
		}
	}

?>