<?php
session_start();
require_once '../models/Job.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Create an instance of the Job model
    $job = new Job();
    
    // Set the necessary properties of the Job object
    $job->name = $name; // Replace with the actual property name
    $job->phone = $phone; // Replace with the actual property name

    try {
        $job->uploadResume(); // Call the uploadResume() function from the Job model
        $_SESSION['success'] = "Resume uploaded successfully."; // Set success message
    } catch (Exception $ex) {
        $_SESSION['error'] = "Error uploading resume: " . $ex->getMessage(); // Set error message
    }

    header('Location: ../careers.php');
    exit();
}

header('Location: ../careers.php');
exit();


?>