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
    $like = $postdata['likes'];

    $sql = "SELECT SUM(iLikes) FROM post WHERE iId='$id1' ";
    $sql_result = mysqli_query($con,$sql);
    $total_likes = mysqli_fetch_assoc($sql_result);
    
   foreach($total_likes as $i)
    {
        $temp= $i;
    } 
    $like = $like + $temp;

    $query = "UPDATE post SET iLikes='$like' WHERE iId='$id1' "; 

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

