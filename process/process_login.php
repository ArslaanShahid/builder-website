<?php
session_start();
require_once '../models/Admin.php';
$errors =[];

$admin = new Admin();
// die($_POST['username']);
try{
 $admin->username = $_POST['username'];
}
catch (Exception $ex){
$errors['username']= $ex->getMessage();
}
try{
    $admin->password = $_POST['password'];
   }
   catch (Exception $ex){
   $errors['password']= $ex->getMessage();
   }
if (count($errors)==0){
    try{
        $admin->login();
        header("Location:../admin/index.php");
    }
catch(Exception $ex){
        $msg= $ex->getMessage();
        $_SESSION['msg']=$msg;
        header("Location:../admin/login.php");
}
}
else {
    $_SESSION ['errors'] = 'Check Your Errors';
    $_SESSION ['errors'] = $errors;
    header("Location:../admin/login.php");

}

?>