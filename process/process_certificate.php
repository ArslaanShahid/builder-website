<?php
session_start();
require_once '../models/Employee.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $code = $_GET['code'];

    // Check if code is numeric
    if (!is_numeric($code)) {
        $_SESSION['error'] = 'Employee code must be numeric';
        header('Location: ../employee_checker.php');
        exit();
    }

    // Check if code is valid
    if (strlen($code) < 5) {
        $_SESSION['error'] = 'Employee code must be at least 5 digits long';
        header('Location: ../employee_checker.php');
        exit();
    }

    // Check if employee exists
    $employee = Employee::GetEmployeeByCode($code);

    if (!$employee) {
        $_SESSION['error'] = 'Employee not found';
        header('Location: ../employee_checker.php');
        exit();
    }

    // Redirect to certificate page
    header("Location: ../certificate.php?code=$code");
    exit();
}
?>
