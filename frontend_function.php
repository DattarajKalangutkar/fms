<?php
	
	include 'jwt/BeforeValidException.php';
	include 'jwt/ExpiredException.php';
	include 'jwt/SignatureInvalidException.php';
	include 'jwt/JWT.php';
	include 'jwt/auth.php';
	use \Firebase\JWT\JWT;

	function decodejwt($jwt)
	{
		$decoded = JWT::decode($jwt,JWT_KEY, array('HS256'));
		return $decoded;
	}

	function DFA($data)
	{
		echo "<pre>";
		print_r($data);
		exit;
	}

	function datajson_to_array($url)
	{
		return json_decode(file_get_contents($url),true);
	}

	function stdobject_to_array($object)
	{
		return json_decode(json_encode($object),true);
	}

	function getUserPermission($data)
	{
		$permission_array = [];
		if(count($data) > 0)
		{
			foreach($data as $key=>$value)
			{
				if(count($value) > 0)
				{
					foreach($value as $modules=>$modules_array)
					{
						foreach($modules_array as $key_modules=>$values_modules)
						{
							$permission_array[] = $values_modules['permissionName'];
						}
					}
				}
			}
		}
		return $permission_array;
	}

	function checkuseraccess($permission_array,$modules,$operations)
	{
		if(in_array($modules."-".$operations,$permission_array))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>