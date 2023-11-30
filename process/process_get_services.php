<?php
require_once '../models/Services.php'; // Replace with the actual path to your model file

try {
    // Initialize the Services model
    $services = new Services();

    // Call the show_services() function from your model to fetch the data
    $data = $services->show_services();

    // Set the response header to JSON
    header('Content-Type: application/json');

    // Return the response as JSON
    echo json_encode($data);
} catch (Exception $e) {
    // Handle any exceptions that occur (e.g., database connection error)
    header('Content-Type: application/json', true, 500);
    echo json_encode(array('error' => 'An error occurred.'));
}
