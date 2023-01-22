<?php
session_start();
require_once '../models/Employee.php';
$emp = new Employee();
$errors = [];
// print_r($_POST);
// die;
try{
    $emp->name = $_POST['name'];
}
catch(Exception $ex){
    $errors['name'] = $ex->getMessage();    
}
try{
    $emp->email = $_POST['email'];
}
catch(Exception $ex){
    $errors['email'] = $ex->getMessage();    
}
try{
    $emp->cnic = $_POST['cnic'];
}
catch(Exception $ex){
    $errors['cnic'] = $ex->getMessage();    
}
try{
    $emp->gender = $_POST['gender'];
}
catch(Exception $ex){
    $errors['gender'] = $ex->getMessage();    
}

if(count($errors) ==0){
    try{
        $emp->Add_Employee();
        header("Location:../admin/add_Employee.php");
        $msg = "Employee Added";
        $_SESSION['success']=$msg;
    }
catch(Exception $ex){
    $msg = $ex->getMessage();
    $_SESSION['msg']=$msg;
    header("Location:../admin/add_Employee.php");
}

}
else{
    $_SESSION ['error'] = 'Check Your Errors';
    $_SESSION ['errors'] = $errors;
    header("Location:../admin/add_Employee.php");

}



?>