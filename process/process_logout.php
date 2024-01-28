<?php
session_start();
// require_once './admin/init.php';
define('BASE_FOLDER','/admin/');
define('BASE_URL','http://'.$_SERVER['HTTP_HOST'].BASE_FOLDER);
require_once '../models/Admin.php';
$obj_admin = unserialize($_SESSION['obj_admin']);
if(!isset($_SESSION['obj_admin'])) {
    $_SESSION['msg'] = "You are Already Logout";
}

try{
    $obj_admin->logout();
    $_SESSION['msg'] = "Your Are Logout";
    header("Location:". BASE_URL."login.php");
} catch (Exception $ex) {
    $_SESSION['msg'] = $ex->getMessage();
    header("Location:". BASE_URL."index.php");
}
?>