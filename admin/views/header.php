
<?php

session_start();
require_once '../models/Admin.php';

define('BASE_FOLDER','/admin/');
define('BASE_URL','http://'.$_SERVER['HTTP_HOST'].BASE_FOLDER);

if (isset($_SESSION['obj_admin'])) {
    $obj_admin = unserialize($_SESSION['obj_admin']);

} else {
    $obj_admin = new Admin();
}

$public_pages = [
    BASE_FOLDER."login.php",
];
$restricted_pages = [
    BASE_FOLDER."index.php",
    BASE_FOLDER."index.php",
];
$current = $_SERVER['PHP_SELF'];

if(in_array($current,$restricted_pages) && !$obj_admin->loggedin) {
    $_SESSION['error'] = "Please Login To View This Page";
    header("Location:".BASE_URL."login.php");
    die;
}
if(in_array($current,$public_pages) && $obj_admin->loggedin) {
    $_SESSION['error'] = "Please Logout to View This Page";
    header("Location:".BASE_URL."index.php");
    die;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Graduate Student</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/toastr.min.css" rel="stylesheet">


</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">