<?php
	include "includes/config.php";
	include 'jwt/BeforeValidException.php';
	include 'jwt/ExpiredException.php';
	include 'jwt/SignatureInvalidException.php';
	include 'jwt/JWT.php';
	include 'jwt/auth.php';
	use \Firebase\JWT\JWT;

	function DFA($data)
	{
		echo "<pre>";
		print_r($data);
		exit;
	}

	function singleInsert($table, $data, $con)
	{
	    $colString = "";
	    $valString = "";
	    foreach ($data as $col => $val) 
	    {
	        $colString .= "$col,";
	        $valString .= "'".addslashes($val)."',";
	    }
	    $colString      = substr($colString, 0, -1);
	    $valString      = substr($valString, 0, -1);
	    $sql            = "insert into $table ($colString) values ($valString)"; 
		// echo $sql;
		// exit(1);
	    $response_query = mysqli_query($con, $sql) or die('Error, 22');
	    $id             = mysqli_insert_id($con);
	    return $id;
	}

	function updateData($con, $table, $data, $identifier, $id)
	{
	    $colString = "";
	    foreach ($data as $col => $val) {
	        $colString .= "$col='$val',";
	    }
	    $colString      = substr($colString, 0, -1);
		$sql            = "update $table set $colString where $identifier = $id and vStatus=1";
	    $response_query = mysqli_query($con, $sql) or die('Error, 35');
	    return true;
	}

	function updateDatail($con, $table, $data, $identifier, $id)
	{
	    $colString = "";
	    foreach ($data as $col => $val) {
	        $colString .= "$col='$val',";
	    }
	    $colString      = substr($colString, 0, -1);
		$sql            = "update $table set $colString where $identifier = '$id' and vStatus=1";
	    $response_query = mysqli_query($con, $sql) or die('Error, 35');
	    return true;
	}

	function updateDataForIncrement($con, $table, $data, $identifier, $id)
	{
	    $colString = "";
	    foreach ($data as $col => $val) {
	        $colString .= "$col=$col+$val,";
	    }
	    $colString      = substr($colString, 0, -1);
		$sql            = "update $table set $colString where $identifier = $id and vStatus=1";
	    $response_query = mysqli_query($con, $sql) or die('Error, 35');
	    return true;
	}

	function specific_data_id($con,$table,$id)
	{
		$sql            = "delete from $table where iId = $id and vStatus=1";
	    $response_query = mysqli_query($con, $sql) or die('Error, 42');
	    return true;
	}

	function encodejwt($email,$password)
	{
		$token = array(
		    "data" => array(
		       "email" => $email,
		       "Password" => md5($password),
		       "Time" => date('Y-m-d H:s:i')
		   	)
		);
		$jwt = JWT::encode($token,JWT_KEY);
		return $jwt;
	}


	function decodejwt($jwt)
	{
		$decoded = JWT::decode($jwt,JWT_KEY, array('HS256'));
		return $decoded;
	}

	function validate_feilds($data,$message)
	{
		$arrayName = array("message"=>$message." is Required","error"=>true);
		return $arrayName;
	}

	function success_msg($msg,$err)
	{
		$arrayName = array("message"=>$msg,"error"=>$err);
		return $arrayName;
	}

	function error_msg($msg,$err)
	{
		$arrayName = array("message"=>$msg,"error"=>$err);
		return $arrayName;
	}

	//validate credentials with database
	function validate_with_db($table,$phone,$pass,$con)
	{   
	    $sql = "select vStatus from $table where vPhone='$phone' and vPassword='".md5($pass)."' and vStatus='1' order by iId";
		$response_query = mysqli_query($con, $sql) or die('Error, insert query failed with query at 83');
		return (mysqli_num_rows($response_query) > 0 ? true:false);
	}

	function validate_with_db_data($type,$phone,$pass,$con)
	{   
		$table = ($type == 'user') ? 'user':'rescuer';
	   	$sql = "select * from $table where vPhone='$phone' and vPassword='".md5($pass)."' and vStatus='1' order by iId";
		$response_query = mysqli_query($con, $sql) or die('Error, insert query failed with query at 106');
		return mysqli_fetch_assoc($response_query);
	}

	//string validation function
	function validate_to_string($val,$mess)
	{
		$val = trim($val);
		if($val == '')
		{
			echo json_encode(validate_feilds($val,$mess));
			exit;
		}
	}

	//Number Validation function 
	function validate_to_number($val,$mess)
	{
		$val = trim($val);
		if(!is_numeric($val))
		{
			echo json_encode(validate_feilds($val,$mess));
			exit;
		}
	}

	function validate_to_array($arr,$msg)
	{
		$arr=explode(" ",$arr);
		if(count($arr) == 0)
		{
			echo json_encode(array("message"=>$msg." array is empty","error"=>true));
			exit;
		}
	}

	function validate_to_date($val,$msg)
	{
		if($val == "")
		{
			echo json_encode(array("message"=>$msg." is empty","error"=>true));
			exit;
		}
	}

	function validate_other_function($identifer,$data,$feilds,$bad_word=array(),$getemail,$getoldpassword)
	{
	//   print_r(md5($data[$feilds]) == $getoldpassword['vPassword']);
	//   exit;
		switch ($identifer) 
		{
			case 'password_check':
				if(md5($data[$feilds]) == $getoldpassword['vPassword'])
				{
					echo json_encode(array("message"=>"Password same as old password!!","error"=>true));
					exit;
				}
			break;

			case 'compare_with_password':
				if($data[$feilds] != $data['ConfirmPassword'])
				{
					echo json_encode(array("message"=>"Password is not matched","error"=>true));
					exit;
				}
			break;
			
			case 'Valid_full_name':
				if (!preg_match('/^[a-zA-Z .,\-]+$/i',$data[$feilds]))  
		        {
		            echo json_encode(array("message"=>"Please give valid name","error"=>true));
					exit;
		        }
			break;

			case 'Space_between':
				if (!strrpos($data[$feilds]," "))
		        {
		            echo json_encode(array("message"=>"Name field should contain Space between First name and Last name","error"=>true));
					exit;  
		        }
			break;

			case 'valid_phone_number':
				if((strlen($data[$feilds])>11) || strlen($data[$feilds])<=10)
		        {
		            echo json_encode(array("message"=>"Contact No should be 10 digits","error"=>true));
					exit;
		        }
				if(!(preg_match("/(?!0+$)[0-9]/",$data[$feilds])))
				{
					echo json_encode(array("message"=>"Invalid phone number","error"=>true));
					exit;
				}
			break;

			case 'valid_email_address':
				if(!filter_var($data[$feilds], FILTER_VALIDATE_EMAIL))
				{
					echo json_encode(array("message"=>"Invalid email address","error"=>true));
					exit;
				}
			break;
			case 'email_exist':
				if($data[$feilds]!='')
				{
					if($data[$feilds]==$getemail['vEmail'])
					{
						echo json_encode(array("message"=>"Email already exist","error"=>true));
						exit;
					}	
				}
			
			break;

			default:
				# code...
			break;
		}
	}

	//get specific data from Database 
	function getspecificdata($con,$table,$identifier,$id)
	{
	    $sql = "select * from $table where $identifier=$id";
		$response_query = mysqli_query($con, $sql) or die('Error, No:106');
		return mysqli_fetch_assoc($response_query);
	}

	function getspecificdata_orders($con,$table,$id)
	{
		$data = array();
		$sql = "select * from $table where iOrder_id=$id and vStatus='1' order by iId";
		$response_query = mysqli_query($con, $sql) or die('Error, No:114');
		while($res = mysqli_fetch_assoc($response_query))
    	{
    		$data[] = $res;
    	}
    	return $data;
	}

	//get all data from the Database

	function getalldata($con,$table,$str)
	{
		$data = array();
		$sql = "select * from $table where vStatus='1' $str order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:240');
		while($res = mysqli_fetch_assoc($response_query))
		{
			$data[] = $res;
		}
		return $data; 
	}

	function getresgisterrescuer($con,$table,$str,$status)
	{
		$data = array();
		$sql = "select * from $table where vStatus='1' and vVerificationstatus='$status' $str order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:240');
		while($res = mysqli_fetch_assoc($response_query))
		{
			$data[] = $res;
		}
		return $data; 
	}

	function delete_data_id($con,$table,$identifier,$id)
	{
		$sql = "update $table set vStatus='1' where $identifier=$id";
		$response_query = mysqli_query($con, $sql) or die('Error, No:138');
		return true;
	}

	function ConvertDMYtoYMD($date,$format)
	{
		$temp_date = explode('-',$date);
		return $temp_date[2]."-".$temp_date[1]."-".$temp_date[0]; 
	}

	function ConvertYMDtoDMY($date,$format)
	{
		$temp_date = explode('-',$date);
		return $temp_date[2]."-".$temp_date[1]."-".$temp_date[0];
	}

	function GETXFROMYID($con,$table,$feild,$id)
	{
		$sql = "select $feild from $table where vStatus='1' and iId=$id order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:157');
		return mysqli_fetch_assoc($response_query)[$feild];
	}

	function GETXDATAFROMYID($con,$table,$feild,$id)
	{
		$sql = "select * from $table where vStatus='1' and iId=$id order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:157');
		return mysqli_fetch_assoc($response_query);
	}

	
	function GenerateID($con,$table,$code,$ordid)
	{
		$sql = "select * from $table where vStatus='1' and iOrganisation_id=$ordid order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:164');
		$num_of_rows = mysqli_num_rows($response_query);
		if($num_of_rows > 0)
		{
			return $code."_".str_pad($num_of_rows+1,4,'0',STR_PAD_LEFT);
		}
		else
		{
			return $code."_".str_pad($num_of_rows+1,4,'0',STR_PAD_LEFT);
		}
	}

	function delete_full_table($con,$table,$iden,$orderid)
	{
		$sql = "delete from $table where $iden=$orderid";
		$response_query = mysqli_query($con, $sql) or die('Error, No:189');
		return;
	}

	function getuserdata($table,$phone,$pass,$con,$iden)
	{
		$sql = "select * from $table where vPhone='$phone' and vPassword='".md5($pass)."' and vStatus='1' order by iId";
		$response_query = mysqli_query($con, $sql) or die('Error, 196');
		return mysqli_fetch_assoc($response_query);
	}

	function getHodTeam($con,$deptid,$table)
	{
		$sql = "select * from $table where iDepartmentId='$deptid' and iHod='1' and vStatus='1' order by iId";
		$response_query = mysqli_query($con, $sql) or die('Error, 196');
		return mysqli_fetch_assoc($response_query);
	}

	//get rows plus data.
	function getrowsplusdata($con,$table,$select,$iden,$val,$type)
	{
		$data=array();
		$sql = "select $select from $table where $iden=$val and vStatus=0 order by iId";
		$response_query = mysqli_query($con, $sql) or die('Error, 252');
		if($type == 'count')
		{
			$num_of_rows = mysqli_num_rows($response_query);
			return $num_of_rows;
		}
		else
		{
			while ($res_data = mysqli_fetch_assoc($response_query)) 
			{
				$data[] = $res_data['iId'];
			}
			return $data;
		}
	}

	function checkExist($con,$table,$value,$iden)
	{
		$sql = "select $iden from $table where $iden like '$value' and vStatus=1 order by iId";
		$response_query = mysqli_query($con, $sql) or die('Error, 404');
		$num_of_rows = mysqli_num_rows($response_query);
		return ($num_of_rows > 0) ? true : false;
	}	


	function getservicelist($con,$table,$status)
	{
		$data = array();
		$sql = "select * from $table where vStatus='1' and iApprovalStatus='$status' order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:157');
		while($res = mysqli_fetch_assoc($response_query))
		{
			$data[] = $res;
		}
		return $data; 
	}

	function getspecificServicelistbasedonId($con,$table,$identifier,$id)
	{
		$sql = "select * from $table where vStatus='1' and $identifier=$id order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:157');
		return mysqli_fetch_assoc($response_query); 
	}

	function getspecificServicelistbasedonuser($con,$table,$identifier,$userid)
	{
		$data = array();
		$sql = "select * from $table where vStatus='1' and $identifier=$userid order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:157');
		while($res = mysqli_fetch_assoc($response_query))
		{
			$data[] = $res;
		}
		return $data; 
	}

	function  getHodlistservices($con,$table,$identifier,$userid)
	{
		$data = array();
		$sql = "select * from $table where vStatus='1' and $identifier=$userid and iApprovalStatus='1' order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:157');
		while($res = mysqli_fetch_assoc($response_query))
		{
			$data[] = $res;
		}
		return $data; 
	}

	function  getAdminlistservices($con,$table,$identifier,$userid)
	{
		$data = array();
		$sql = "select * from $table where vStatus='1' and $identifier=$userid and iApprovalStatus='7' order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:157');
		while($res = mysqli_fetch_assoc($response_query))
		{
			$data[] = $res;
		}
		return $data; 
	}

	//Function to get ph no from database shripad,nikhil,deepesh
    function fetch_db_ph($table,$ph,$con)
    {
        $sql =  "select vPhone from  $table where vPhone='$ph'";
        $sql_result = mysqli_query($con,$sql);
        $end = mysqli_num_rows($sql_result);
        return ($end > 0) ? true : false;
    }

    function getDepartmentbased($data,$id)
    {

    	$data_dept = array();
    	foreach($data['rows'] as $key=>$value)
    	{
    		if($value['serviceTypeDepartment']['iId'] == $id)
    			$data_dept[] = $value;
    	}

    	if($id == 0)
    		return $data;
    	else
    		return $data_dept;
    }

    function getSessionData()
    {
    	return json_decode($_SESSION['userData'],true);
    }
?>