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
	function validate_with_db($type,$phone,$pass,$con)
	{   
		$table = ($type == 'user') ? 'user':'rescuer';
	    $sql = "select vStatus from $table where vPhone='$phone' and vPassword='".md5($pass)."' and vStatus='1' order by iId";
		// echo $sql;
		// exit(1);
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

	function getuserdata($type,$phone,$pass,$con,$iden)
	{
		$table = ($type == 'user') ? 'user':'rescuer';
		$sql = "select $iden from $table where vPhone='$phone' and vPassword='".md5($pass)."' and vStatus='1' order by iId";
		$response_query = mysqli_query($con, $sql) or die('Error, 196');
		return mysqli_fetch_assoc($response_query)[$iden];
	}

	function creating_shopkeeper_msg($owner_name,$custphone,$order_id)
	{
		$str = "Hello $owner_name,$custphone has placed Order ID '$order_id' with you. Kindly contact him/her for discussing the delivery.Thanks";
		return $str;
	}

	function creating_Customer_msg($owner_name,$custphone,$status)
	{
		$str = "Hello $custphone,
				Your order is $status by $owner_name.
				Thanks";
		return $str;
	}

	function sendpushnotification($player_id,$msg)
	{
		$content = array("en" => $msg);
		$fields = array(
			'app_id' => "a73b3aaa-9570-4133-9f11-5c8fc4db0f32",
			'include_player_ids' => array($player_id),
			'data' => array("foo" => "bar"),
			'contents' => $content
		);
		
		$fields = json_encode($fields);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$response = curl_exec($ch);
		curl_close($ch);
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

	function getrescuerdata($type,$con,$iden)
	{
		$table = ($type == 'user') ? 'user':'rescuer';
		$sql = "select $iden from $table where vStatus='1' order by iId";
		$response_query = mysqli_query($con, $sql) or die('Error, 319');
		return mysqli_fetch_assoc($response_query)[$iden];
	}

	//Function to get ph no from database shripad,nikhil,deepesh
    function fetch_db_ph($type,$ph,$con)
    {
        $table = ($type == 'user') ? 'user':'rescuer';
        $sql =  "select vPhone from  $table where vPhone=$ph";
        $sql_result = mysqli_query($con,$sql);
        $end = mysqli_fetch_assoc($sql_result);
        return ($end > 0) ? true : false;
    }

	//function to get list of completed transaction 
	function getalltransaction($con,$table,$str)
	{
		$data = array();
		$sql = "select * from $table where vStatus='1' and  vTranStatus='3' $str order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:423');
		while($res = mysqli_fetch_assoc($response_query))
		{
			$data[] = $res;
		}
		return $data; 
	}
	function getupdationtransaction($con,$table,$client_str)
	{
		$data = array();
		$sql = "select * from $table where vStatus='1' $client_str order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:434');
		while($res = mysqli_fetch_assoc($response_query))
		{
			$data[] = $res;
		}
		return $data; 
	}

	function checkemailId($con,$email)
	{
		$sql = "select * from otp where vStatus='1' and email='$email' order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:434');
		$num_of_rows = mysqli_num_rows($response_query);
		return ($num_of_rows > 0) ? true : false;
	}

	function checkverifiedOTP($con,$email,$otp)
	{
		$sql = "select * from otp where vStatus='1' and email='$email' and otp='$otp' and verified='0' order by iId desc";
		$response_query = mysqli_query($con, $sql) or die('Error, No:434');
		$num_of_rows = mysqli_num_rows($response_query);
		return ($num_of_rows > 0) ? true : false;
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

	function distance($lat1, $lon1, $lat2, $lon2, $unit) {

		$theta = $lon1 - $lon2;
		$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
		$dist = acos($dist);
		$dist = rad2deg($dist);
		$miles = $dist * 60 * 1.1515;
		$unit = strtoupper($unit);
	  
		if ($unit == "K") {
			return ($miles * 1.609344);
		} else if ($unit == "N") {
			return ($miles * 0.8684);
		} else {
			return $miles;
		}
	}

	function getTopfiverescuer($con)
	{
		$data = array();
		$ori_data = array(
			"names"=>array(),
			"values"=>array()
		);
		$sql = "select vName,iPoints from rescuer where vStatus='1' and iPoints!=0 order by iPoints desc limit 5";
		$response_query = mysqli_query($con, $sql) or die('Error, No:434');
		while($res = mysqli_fetch_assoc($response_query))
		{
			$data[] = $res;
		}

		foreach($data as $key=>$val)
		{
			array_push($ori_data['names'],$val['vName']);
			array_push($ori_data['values'],$val['iPoints']);
		}
		return $ori_data; 
	}

	function getcompletedtrans($con)
	{
		$ori_data = array(
			"dates"=>array(),
			"values"=>array(),
			"names"=>array()
		);

		$date = date('Y-m-d');
		array_push($ori_data['dates'],date('Y-m-d', strtotime($date .' -5 day')));
		array_push($ori_data['dates'],date('Y-m-d', strtotime($date .' -4 day')));
		array_push($ori_data['dates'],date('Y-m-d', strtotime($date .' -3 day')));
		array_push($ori_data['dates'],date('Y-m-d', strtotime($date .' -2 day')));
		array_push($ori_data['dates'],date('Y-m-d', strtotime($date .' -1 day')));


		array_push($ori_data['names'],date('M d', strtotime($date .' -5 day')));
		array_push($ori_data['names'],date('M d', strtotime($date .' -4 day')));
		array_push($ori_data['names'],date('M d', strtotime($date .' -3 day')));
		array_push($ori_data['names'],date('M d', strtotime($date .' -2 day')));
		array_push($ori_data['names'],date('M d', strtotime($date .' -1 day')));
		foreach($ori_data['dates'] as $value)
		{
			$sql = "select COUNT(*) as score from transcation where vStatus = '1' and vTranStatus='3' and DATE(dCreatedDate) = '".$value."'";
			$response_query = mysqli_query($con, $sql) or die('Error, No:434');
			$res = mysqli_fetch_assoc($response_query)['score'];
			array_push($ori_data['values'],$res);
		}
		return $ori_data;
	}

	function gettodaystranscation($con)
	{
		$ori_data = array(
			"names"=>["Created","Updated","Completed"],
			"db_values"=>[1,2,3],
			"values"=>array()
		);

		$date = date('Y-m-d');
		foreach($ori_data['db_values'] as $value)
		{
			$sql = "select COUNT(*) as score from transcation where vStatus = '1' and vTranStatus='".$value."' and DATE(dCreatedDate) = '".$date."'";
			$response_query = mysqli_query($con, $sql) or die('Error, No:434');
			$res = mysqli_fetch_assoc($response_query)['score'];
			array_push($ori_data['values'],$res);
		}
		return $ori_data;
	}

	function getuniquedataset($dataset,$iden)
	{
		$name_count = array();
		$count_of_snake = array();
		foreach($dataset as $key=>$value)
		{
			if(in_array($value[$iden], $name_count))
			{
				$count_of_snake[$value[$iden]] += 1;
			}
			else
			{
				$count_of_snake[$value[$iden]] = 1;
				array_push($name_count,$value[$iden]);
			}
		}

		return $count_of_snake;
	}

	function total_dataset_entropy($total_count,$data)
	{
		$entropy = 0;
		foreach($data as $key=>$value)
		{
			$entropy += (log($value/$total_count, 2) * $value/$total_count);
		}

		$entropy = (-1)*$entropy;
		return $entropy;
	}

	function getcrossattribute($dataset,$primary,$secondary,$iden_1,$iden_2)
	{
		$getcross = array();
		foreach($primary as $pkey=>$pValue)
		{
			foreach($secondary as $skey=>$sValue)
			{
				$crossValue = getdata($dataset,$iden_1,$iden_2,$pkey,$skey);
				$getcross[$pkey][$skey] = $crossValue;
			}
		}
		return $getcross;
	}

	function getdata($dataset,$iden_1,$iden_2,$pkey,$skey)
	{
		$count = 0;
		foreach($dataset as $key=>$value)
		{
			if($value[$iden_1] == $pkey && $value[$iden_2] == $skey)
			{
				$count += 1;
			}
		}
		return $count;
	}

	function getgainentropy($dataset,$iden,$iden_array,$crossattribute,$total_count,$total_gain)
	{
		//DFA($iden_array);
		$gain_entroy = 0;
		$net_entryopy = array();
		$gain = 0;
		foreach($iden_array as $key=>$countkey)
		{
			$entropy = 0;
			foreach($crossattribute[$key] as $ckey=>$cValue)
			{
				if($cValue !=0)
					$entropy += (log($cValue/$countkey, 2) * $cValue/$countkey);
			}
			$entropy = (-1)*$entropy;
			$net_entryopy[$key] = $entropy;
		}

		$netEntropy = 0;
		foreach($iden_array as $key=>$countkey)
		{
			$netEntropy += ($countkey/$total_count)*$net_entryopy[$key];
		}

		$gain = $total_gain-$netEntropy;
		
		$splitinfo = 0;
		foreach($iden_array as $key=>$countkey)
		{
			$splitinfo += (log($countkey/$total_count, 2) * $countkey/$total_count);
		}
		$splitinfo = (-1)*$splitinfo;

		if($splitinfo != 0)
		{
			$gain_ratio = ($gain/$splitinfo);
			return $gain_ratio;
		}
		else
		{
			return 0;
		}
	}

	function getmaxvalue($data)
	{
		$max_index = '';
		$max_value = 0;

		foreach($data as $key=>$value)
		{
			if($value > $max_value)
			{
				$max_value = $value;
				$max_index = $key;
			}	
		}
		return $max_index;
	}

	function gettreeformat($iden_array,$full_dataset,$attr,$parent_slug,$parent_attr,$leveltostart)
	{
		$tree_format = array();
		foreach($iden_array as $key=>$value)
		{
			if($value <= 1)
			{
				foreach($full_dataset as $keys=>$data)
				{
					if($data[$attr] == $key)
					{
						$tree_format[$key] = array(
							"done"=>1,
							"child"=>array(),
							"parent"=>$attr,
							"level"=>$leveltostart,
							"name"=>$data[$attr],
							"parent_slug"=>$parent_slug,
							"parent_attr"=>$parent_attr,
							"snake_name"=>$data["name"]
						);
					}
				}
			}else{
				$tree_format[$key] = array(
					"done"=>0,
					"child"=>array(),
					"parent"=>$attr,
					"level"=>$leveltostart,
					"name"=>$key,
					"parent_slug"=>$parent_slug,
					"parent_attr"=>$parent_attr
				);
			}
		}

		return $tree_format;
	}

	function checkeverythingisdone($main_tree)
	{
		$counter=0;
		$identider_array = array();
		$trace = array();
		foreach($main_tree['child'] as $key=>$value)
		{
			if($value['done'] == 0)
			{
				$counter = 1;
				$identider_array = $value;
				break;
			}

			if(count($value['child']) > 0)
			{
				foreach($value['child'] as $keys=>$values)
				{
					if($values['done'] == 0)
					{
						$counter = 1;
						$identider_array = $values;
						break;
					}

					if(count($values['child']) > 0)
					{
						foreach($values['child'] as $keysss=>$valuesss)
						{
							if($valuesss['done'] == 0)
							{
								$counter = 1;
								$identider_array = $valuesss;
								break;
							}
							if(count($valuesss['child']) > 0)
							{
								foreach($valuesss['child'] as $keylevel_4=>$valuelevel_4)
								{
									if($valuelevel_4['done'] == 0)
									{
										$counter = 1;
										$identider_array = $valuelevel_4;
										break;
									}
									if(count($valuelevel_4['child']) > 0)
									{
										foreach($valuelevel_4['child'] as $keylevel_5=>$valuelevel_5)
										{
											if($valuelevel_5['done'] == 0)
											{
												$counter = 1;
												$identider_array = $valuelevel_5;
												break;
											}
										}
									}
								}
							}
						}
					}
				}
			}
		} 
		return $identider_array;
	}	

	function gettrace($array_tree,$name)
	{
		$counter=0;
		$trace = array();
		if(count($array_tree['child']) > 0)
		{
			foreach($array_tree['child'] as $key=>$value)
			{
				
			}
		}
		return $trace;
	}

	function getTotalcount($data)
	{
		return count($data);
	}

	function updateMainTree($main,$child_array,$attr,$ori_attr,$fulldata)
	{
		foreach($child_array as $key=>$value)
		{
			if($value > 1)
			{
				if(checkforsamerecord($fulldata,$attr,$key))
				{
					$sub_trace_array = $main[$attr]['trace'];
					array_push($sub_trace_array,$key);
					if(existkey($key,$main))
					{
						$main[$key."_1"] = array(
							"root"=>$key,
							"done"=>0,
							"trace"=>$sub_trace_array,
							"value"=>$value
						);
					}
					else
					{
						$main[$key] = array(
							"root"=>$key,
							"done"=>0,
							"trace"=>$sub_trace_array,
							"value"=>$value
						);
					}
					
				}
				else
				{
					$sub_trace_array = $main[$attr]['trace'];
					array_push($sub_trace_array,$key);
					if(existkey($key,$main))
					{
						$main[$key."_1"] = array(
							"root"=>$key,
							"done"=>1,
							"trace"=>$sub_trace_array,
							"value"=>$value,
							"snake_name"=>checkforsamerecordname($fulldata,$attr,$key,$value)
						);
					}	
					else{
						$main[$key] = array(
							"root"=>$key,
							"done"=>1,
							"trace"=>$sub_trace_array,
							"value"=>$value,
							"snake_name"=>checkforsamerecordname($fulldata,$attr,$key,$value)
						);
					}
					
				}
			}
			else
			{
				if(existkey($key,$main))
				{
					$sub_trace_array = $main[$attr."_1"]['trace'];
					array_push($sub_trace_array,$key);
					$main[$key."_1"] = array(
						"root"=>$key,
						"done"=>1,
						"trace"=>$sub_trace_array,
						"value"=>$value,
						"snake_name"=>checkforsamerecordname($fulldata,$attr,$key,$value)
					);
				}
				else
				{
					$sub_trace_array = $main[$attr]['trace'];
					array_push($sub_trace_array,$key);
					$main[$key] = array(
						"root"=>$key,
						"done"=>1,
						"trace"=>$sub_trace_array,
						"value"=>$value,
						"snake_name"=>checkforsamerecordname($fulldata,$attr,$key,$value)
					);
				}
			}
		}
		return $main;
	}

	function checkforsamerecord($data,$compareto,$compareValue)
	{
		$arraytotcheck = array();
		foreach($data as $key=>$value)
		{
			if($value[$compareto] == $compareValue)
			{
				array_push($arraytotcheck,$value['name']);
			}
		}

		if(count(array_unique($arraytotcheck)) > 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function checkforsamerecordname($data,$compareto,$compareValue,$count)
	{
		$arraytotcheck = array();
		foreach($data as $key=>$value)
		{
			if($value[$compareto] == $compareValue)
			{
				array_push($arraytotcheck,$value['name']);
			}
		}

		if(count(array_unique($arraytotcheck)) > 1)
		{
			return true;
		}
		else
		{
			return array_unique($arraytotcheck)[0];
		}
	}

	function alldoneturnone($main_data)
	{
		$counter = 0;
		foreach($main_data as $key=>$value)
		{
			if($value['done'] == 0)
			{
				$counter = 1;
			}
		}

		return ($counter == 1) ? true:false;
	}

	function getdataithzerostatus($main_data)
	{
		$data = array();
		foreach($main_data as $key=>$value)
		{
			if($value['done'] == 0)
			{
				$data = $main_data[$key];
				break;
			}
		}

		return $data;
	}

	function DFADATA($data)
	{
		echo "<pre>";
		print_r($data);
		echo "<br>";
	}

	function getfilterdata($data_set,$trace_array)
	{
		$new_data_set = array();
		$count = count($trace_array);
		foreach($data_set as $key=>$value)
		{
			if($count == 2)
			{
				if($value[$trace_array[0]] == $trace_array[1])
				{
					array_push($new_data_set,$value);
				}
			}

			if($count == 4)
			{
				if(($value[$trace_array[0]] == $trace_array[1]) && ($value[$trace_array[2]] == $trace_array[3]))
				{
					array_push($new_data_set,$value);
				}
			}

			if($count == 6)
			{
				if(($value[$trace_array[0]] == $trace_array[1]) && ($value[$trace_array[2]] == $trace_array[3]) && ($value[$trace_array[4]] == $trace_array[5]))
				{
					array_push($new_data_set,$value);
				}
			}
		}
		return $new_data_set;
	}

	function existkey($key,$main_tree)
	{
		if(key_exists($key,$main_tree))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>