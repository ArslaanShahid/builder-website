<?php
session_start();
require_once '../models/Services.php';
$errors =[];
$services = new Services();

$target_dir = "../img/";

try{
    $services->title=$_POST['title'];
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
    $services->serviceImage=$_FILES['serviceImage'];
}
catch(Exception $ex){
    $errors['serviceImage'] = $ex->getMessage(); 
}

if (count($errors)==0){
    try{
        $services->add_services();
        header("Location:../admin/add_Services.php");
        $msg = "Services Added";
        $_SESSION['success']=$msg;
    }
    catch(Exception $ex){
        $msg = $ex->getMessage();
        $_SESSION['msg']= $msg;
        header("Location:../admin/add_Services.php");
        
    }
}
else{
    $_SESSION ['error'] = 'Check Your Errors';
    $_SESSION ['errors'] = $errors;
    header("Location:../admin/add_Services.php");
}
?>