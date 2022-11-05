<?php

//require_once __DIR__ . '/vendor/autoload.php';


$ff ='http://localhost/scrrapy/vendor/autoload.php';
// var_dump($ff);
// exit;
//require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();