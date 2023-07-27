<?php
require_once 'views/header.php';
require_once 'views/sidebar.php';
require_once 'views/navbar.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
</div>
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add Job Listing</h1>
                                 <span class="text-success">

                                <?php
                        if (isset($_SESSION['msg'])) {
                            echo ($_SESSION['msg']);
                            unset($_SESSION['msg']);
                        }
                        if (isset($_SESSION['errors'])) {
                            $errors = $_SESSION['errors'];
                            unset($_SESSION['errors']);
                        }
                        ?>
                                </span>
                            </div>
                            <form action="/process/process_add_job.php" class="user" method="post" >
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user"
                                        id="date" aria-describedby="date" name="date"
                                        placeholder="Enter Username...">
                                        <span class="text-danger">  
                                            <?php
                                                if (isset($errors['date'])) {
                                                    echo ($errors['date']);
                                                }
                                                ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        id="title" placeholder="Enter Name of the job" name="title"> 
                                        <span class="text-danger">  
                                            <?php
                                                if (isset($errors['title'])) {
                                                    echo ($errors['title']);
                                                }
                                                ?></span>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Add Job
                                </button>
                                <hr>
                               

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

     

                   
                </div>

            </div>


<?php

require_once 'views/footer.php';

?>