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
                                <h1 class="h4 text-gray-900 mb-4">Add Services</h1>
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
                            <form action="/process/process_add_services.php" class="user" method="post" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <input type="text" class="form-select form-control"
                                        id="title" aria-describedby="username" name="title"
                                        placeholder="Enter Name of the Service">
                                        <span class="text-danger">  
                                            <?php
                                                if (isset($errors['title'])) {
                                                    echo ($errors['title']);
                                                }
                                                ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-select form-control"
                                        id="description" placeholder="Enter Description of the Service" name="description"> 
                                        <span class="text-danger">  
                                            <?php
                                                if (isset($errors['description'])) {
                                                    echo ($errors['description']);
                                                }
                                                ?></span>
                                </div>                                
                                
                                <div class="form-group">
                                    <input type="file" class="form-select form-control"
                                        id="serviceImage" name="serviceImage" > 
                                        <span class="text-danger">  
                                            <?php
                                                if (isset($errors['serviceImage'])) {
                                                    echo ($errors['serviceImage']);
                                                }
                                                ?>
                                        </span>
                                </div>  
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Add Service
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