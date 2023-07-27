<?php
session_start();
require_once '../models/Job.php';
$job = new Job();
$errors = [];
// print_r($_POST);
// die;

try{
    $job->date = $_POST['date'];
}
catch(Exception $ex){
    $errors['date'] = $ex->getMessage();    
}
try{
    $job->title = $_POST['title'];
}
catch(Exception $ex){
    $errors['title'] = $ex->getMessage();    
}


// print_r($errors);
// die;
if(count($errors) ==0){
    try{
        $job->add_job();
        header("Location:../admin/add_job.php");
        $msg = "Job Listing Added";
        $_SESSION['success']=$msg;
    }
catch(Exception $ex){
    $msg = $ex->getMessage();
    $_SESSION['msg']=$msg;
    header("Location:../admin/add_job.php");
}

}
else{
    $_SESSION ['error'] = 'Check Your Errors';
    $_SESSION ['errors'] = $errors;
    header("Location:../admin/add_job.php");

}



?>