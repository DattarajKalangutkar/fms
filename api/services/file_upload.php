<?php
	include '../../api_function.php';
	include "../config_master.php";	
	

	if($_GET['iden'] == "freshupload")
	{
		$modules = (isset($_POST['modules'])) ? $_POST['modules'] : '';
		$filename = $modules.'Image'; 
		$target_dir = "../uploads/$modules/";
		$fileName = $modules."_".basename($_FILES[$filename]["name"]);
		$target_file = $target_dir.$fileName;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if(move_uploaded_file($_FILES[$filename]["tmp_name"], $target_file))
		{
			echo json_encode(array('status' => true, 'filepath'=>'uploads/'.$modules.'/'.$fileName));
			exit;
		}
	}

	if($_GET['iden'] == "deleteFile")
	{
		$postdata = json_decode(file_get_contents("php://input"), true);
		if(file_exists($file_check.$postdata['filepath']))
		{
			unlink($file_check.$postdata['filepath']);
			updateData($con,$postdata['modules'],array('vImage'=>''),'iId',$postdata['id']);
			echo json_encode(array('status' => true, 'message'=>'Image Delete Successfully'));
			exit;
		}
	}

	if($_GET['iden'] == "Updateupload")
	{
		if($_POST['forchanging'] != '')
		{
			if(file_exists($file_check.$_POST['forchanging']))
			{
				unlink($file_check.$_POST['forchanging']);
			}
		}
		$modules = (isset($_POST['modules'])) ? $_POST['modules'] : '';
		$filename = $modules.'Image'; 
		$target_dir = "../uploads/$modules/";
		$fileName = $modules."_".basename($_FILES[$filename]["name"]);
		$target_file = $target_dir.$fileName;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if(move_uploaded_file($_FILES[$filename]["tmp_name"], $target_file))
		{
			echo json_encode(array('status' => true, 'filepath'=>'uploads/'.$modules.'/'.$fileName));
			exit;
		}
	}

	if($_GET['iden'] == "mobileUpload")
	{
		$modules = (isset($_POST['modules'])) ? $_POST['modules'] : '';
		$filename = $modules.'Image'; 
		$target_dir = "../uploads/$modules/";
		$fileName = $modules."_".basename($_FILES[$filename]["name"]);
		$target_file = $target_dir.$fileName;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if(move_uploaded_file($_FILES[$filename]["tmp_name"], $target_file))
		{
			echo json_encode(array('status' => true, 'filepath'=>$api_url.'uploads/'.$modules.'/'.$fileName));
			exit;
		}
	}
?>