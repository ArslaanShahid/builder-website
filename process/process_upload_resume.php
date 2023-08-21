<?php
session_start();
require_once '../models/Job.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    // Create an instance of the Job model
    $job = new Job();

    // Set the necessary properties of the Job object

    $job->name = $name;
    $job->phone = $phone;
    $job->email = $email;
    $job->msg = $msg;


    try {
        $job->uploadResume(); // Call the uploadResume() function from the Job model
        $_SESSION['success'] = "Resume uploaded successfully."; // Set success message
    } catch (Exception $ex) {
        $_SESSION['error'] = "Error uploading resume: " . $ex->getMessage(); // Set error message
    }

    header('Location: ../careers.php');
    exit();
} else {
    header('Location: ../careers.php');
    exit();
}
