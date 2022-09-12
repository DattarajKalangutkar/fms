<?php
    include "../../includes/config.php";
    if($con->connect_error)
    {
        die("connection failed: ".$con->connect_error);
    }
    $postdata = json_decode(file_get_contents("php://input"), true);
    if(isset($_GET['id']))
		$id = $_GET['id'];
    $id1 = $id;
    $cmnt = $postdata['cmnt'];

    $query = "UPDATE post SET vComments='$cmnt' WHERE 	iId='$id1' "; 

    $result = mysqli_query($con,$query);

    if($result == 1)
    {
        $response = array("status"=>"1","message"=>"Updated");
    }
    else
    {
        $response = array("status"=>"0","message"=>"Updation Failed");
    }

    print_r($response);
?>    

