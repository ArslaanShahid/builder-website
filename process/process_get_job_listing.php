<?php
require_once '../models/Job.php'; // Replace with the actual path to your model file
$job = new Job();
// Call the getData() function from your model to fetch the data
$data = $job->job_listing();
// print_r($data);
// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
