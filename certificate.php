
<?php
session_start();
require_once './models/Employee.php';
$code= $_GET['code'];
$result = Employee::GetEmployeeByCode($code);
// print_r($result);
// die;
?>

<link href="css/certificate.css" rel="stylesheet">
<center>
<div class="certificate-container">
    <div class="certificate">
        <div class="water-mark-overlay"></div>
        <div class="certificate-header">
            <img src="img/build-new-constuction.png" class="logo" alt="">
        </div>
        <div class="certificate-body">
           
            <p class="certificate-title"><strong>Build New Construction Company PVT.LTD </strong></p>
            <h1>Certificate of Completion</h1>
            <p class="student-name"><?php
            echo(ucfirst($result['employees']->name));
            ?></p>
            <div class="certificate-content">
                <div class="about-certificate">
                    <p>
                    For His outstanding completion of the compulsory
internship program at BuildNew Construction Company from
July to December 2022.
                </p>
                </div>
                <p class="topic-title">
                    <br>
                </p>
                <p class="topic-title">
                    <br>
                </p>
                <div class="text-center">
                    <p class="topic-description text-muted"></p>
                </div>
            </div>
            <div class="certificate-footer text-muted">
                <div class="row">
                    <div class="col-md-6">
                        <p>Joining Date: <?php
            echo($result['employees']->joiningDate);
            ?></p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    This is computer genertated error and ommision may be expected. 
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</center>