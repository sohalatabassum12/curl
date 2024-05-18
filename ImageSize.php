<?php
session_start();

$width=$_POST['width'];

$imagename = 'image' . '_' . time() . '_' . rand(10000,100000000) . '.jpg';
$ch = curl_init("https://images.unsplash.com/photo-1715148470008-329758d3ace7?w={$width}&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMnx8fGVufDB8fHx8fA%3D%3D");
$filename=fopen($imagename, 'w');
curl_setopt($ch,CURLOPT_FILE,$filename);
curl_exec($ch);
$error = curl_error($ch);

if($error){
    echo $error;
}else{
    $_SESSION['image']=$imagename;
    header('Location: curlfrom.php');
}

?>

