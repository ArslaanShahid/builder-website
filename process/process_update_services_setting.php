<?php
session_start();
require_once '../models/Services.php';
$errors =[];
$services = new Services();

// // print_r($_FILES["servicesimage"]); 
// $fileName = $_FILES["servicesimage"]["name"];
// $temp = $_FILES["servicesimage"]["tmp_name"];
// $folder = "../img/".$fileName;
// move_uploaded_file($temp, $folder);
// // print_r();
// die("sss");


try{
    $services->title = $_POST['title'];
}
catch(Exception $ex){
    $errors['title']= $ex->getMessage();
}

try{
    $services->description=$_POST['description'];
}
catch(Exception $ex){
    $errors['description'] =$ex->getMessage();
}
try{
    $services->image=$_POST['image'];
}
catch(Exception $ex){
    $errors['serviceImage'] = $ex->getMessage(); 
}

if(count($errors)==0){
    try{
        $services->add_services();
        header("Location:../admin/services_setting.php");
    }
catch(Exception $ex){
    $msg = $ex->getMessage();
    $_SESSION['msg']= $msg;
    header("Location:../admin/services_setting.php");
}
}
else{
    $_SESSION ['error'] = 'Check Your Errors';
    $_SESSION ['errors'] = $errors;
    header("Location:../admin/services_setting.php");
}