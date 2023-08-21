<?php
require_once '../models/Setting.php'; // Replace with the actual path to your model file
$setting = new Setting();
// Call the getData() function from your model to fetch the data
$data = $setting->get_about_us();
// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($data);
