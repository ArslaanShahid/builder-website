<?php

require_once 'views/header.php';
require_once 'views/sidebar.php';
require_once 'views/navbar.php';

?>



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
                                    <h1 class="h4 text-gray-900 mb-4">Services Setting</h1>
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
                                </div>
                                <form action="../process/process_update_services_setting.php" class="user" method="post" autocomplete="off">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="title" name="title" placeholder="Enter Title">
                                        <span class="text-danger">  
                                            <?php
                                                if (isset($errors['title'])) {
                                                    echo ($errors['title']);
                                                }
                                                ?></span>
                                </div>
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="description" name="description" placeholder="Enter Services description">
                                        <span class="text-danger">  
                                            <?php
                                                if (isset($errors['description'])) {
                                                    echo ($errors['description']);
                                                }
                                                ?></span>
                                </div>
                                <div class="form-group">
                                        <input type="file" class="form-control-user" id="image" name="image">
                                        <span class="text-danger">  
                                            <?php
                                                if (isset($errors['image'])) {
                                                    echo ($errors['image']);
                                                }
                                                ?></span>
                                </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Update Setting
                                    </button>
                                    <hr>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


<br>
<br>
<br>
<br>
<?php

require_once 'views/footer.php';

?>