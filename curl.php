<?php

// $ch = curl_init('https://simplenote.com/');
// $result = curl_exec($ch);
// $error = curl_error($ch);

// if($error){
//     echo $error;
// }

$width=$_POST['width'];

$ch = curl_init("https://images.unsplash.com/photo-1715148470008-329758d3ace7?w={$width}&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMnx8fGVufDB8fHx8fA%3D%3D");
$filename=fopen('image.jpg', 'w');
curl_setopt($ch,CURLOPT_FILE,$filename);
curl_exec($ch);
$error = curl_error($ch);

if($error){
    echo $error;
}


