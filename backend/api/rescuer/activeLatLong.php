<?php
    include "../config_rescuer.php";
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);
    $modules = "rescuer";
	if(isset($_GET['id']))
		$id = $_GET['id'];
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
        //check the value from the postman
		$sample_array = array(
            'vLat'=>$postdata['lat'],
            'vLong'=>$postdata['long'],
		);

		if(updateData($con,$modules,$sample_array,'iId',$id))
		{
			echo json_encode(array("message"=>"Rescuer Location Updated Successfully","flag"=>true));
			exit;
		}
	}

?>