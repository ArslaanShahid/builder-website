<?php
require_once '../models/Projects.php'; // Replace with the actual path to your model file

try {
    // Initialize the projects model
    $projects = new projects();

    // Call the show_projects() function from your model to fetch the data
    $data = $projects->show_projects();

    // Set the response header to JSON
    header('Content-Type: application/json');

    // Return the response as JSON
    echo json_encode($data);
} catch (Exception $e) {
    // Handle any exceptions that occur (e.g., database connection error)
    header('Content-Type: application/json', true, 500);
    echo json_encode(array('error' => 'An error occurred.'));
}
