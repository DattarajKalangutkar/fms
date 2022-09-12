<?php
    date_default_timezone_set('Asia/Kolkata');
    if(isset($_SERVER['HTTP_ORIGIN'])) 
    {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }
      
    // Access-Control headers are received during OPTIONS requests
    if($_SERVER['REQUEST_METHOD'] == 'OPTIONS') 
    {
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST,PUT, OPTIONS");         
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        exit(0);
    }

     
    if($_SERVER['SERVER_NAME'] == 'https://eorders.infi-pre.com/' || $_SERVER['SERVER_NAME'] == 'eorders.infi-pre.com')
    {
        $username = 'infipre_eorderst';
        $pass = '1N4W)zb=Y8Mm';
        $db_name = 'infipre_eorderstest';
        $site_url = '';
        $api_url = '';
    }
    else
    {
        $username = 'root';
        $pass = '';
        $db_name = 'snake';
        $site_url = 'http://localhost/snake/admin/';
        $api_url = 'http://localhost/snake/api/';
        $file_check = $_SERVER['DOCUMENT_ROOT']."/snake/api/";
    }   

    
    define('HOST','localhost');
    define('USERNAME',$username);
    define('PASSWORD',$pass);
    define('DATABSE',$db_name);
    $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABSE);
    define('JWT_KEY','SNAKE_PROJ');
    define('NOW',date('Y-m-d H:i:s a'));
    $status_array = array("1"=>"Active","2"=>"InActive");

    //email host config
    $Year = date("Y"); 
    //roles
    $validation_filter_array = array(
        'compare_with_password',
        'email_exist',
        'valid_phone_number',
        'Valid_full_name',
        'Space_between',
        'Exist_bad_word',
        'valid_email_address',
        'password_check'
    );
?>