<?php
session_start();
require_once '../models/Setting.php';
$errors =[];

$setting = new Setting();
try{
 $setting->email = $_POST['email'];
}
catch (Exception $ex){
$errors['email']= $ex->getMessage();
}
try{
    $setting->phone = $_POST['phone'];
   }
   catch (Exception $ex){
   $errors['phone']= $ex->getMessage();
   }
try{
$setting->opening_hours = $_POST['opening_hours'];
}
catch (Exception $ex){
$errors['opening_hours']= $ex->getMessage();
}
if (count($errors)==0){
    try{
        $setting->update_header_info();
        $msg = "Header Settings, Updated";
        $_SESSION['success'] = $msg;
        header("Location:../admin/header_setting.php");
    }
catch(Exception $ex){
        $msg= $ex->getMessage();
        $_SESSION['msg']=$msg;
        header("Location:../admin/header_setting.php");
}
}
else {
    $_SESSION ['error'] = 'Check Your Errors';
    $_SESSION ['errors'] = $errors;
    header("Location:../admin/header_setting.php");

}

?>