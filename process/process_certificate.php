<?php
session_start();
require_once '../models/Employee.php';

$response = array(); // Initialize response array

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $code = $_GET['code'];

    // Check if code is numeric
    if (!is_numeric($code)) {
        $response['error'] = 'Employee code must be numeric';
    } elseif (strlen($code) < 5) {
        $response['error'] = 'Employee code must be at least 5 digits long';
    } else {
        // Check if employee exists
        $employee = Employee::GetEmployeeByCode($code);
        // print_r($employee);
        // die;
        if (!$employee) {
            $response['error'] = 'Employee not found';
        } else {
            $response['success'] = true;
            $response['code'] = $code;
        }
    }
}

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);
