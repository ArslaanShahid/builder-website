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
                            <div class="col-lg-9">
                                <div class="p-5">
                                    <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Footer Setting</h1>

                                    </div>
                                    <form action="../process/process_update_footer.php" method="POST" class="user" >
                                        <div class="form-group">
                                            <textarea placeholder="Enter Footer Description" name="footer_description" rows="5" class="form-control form-control-user" id="footer_description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="phone" class="form-control form-control-user"
                                                name="copy_right" placeholder="Copyright Text">
                                        </div>
                                        
                                        <center>
                                        <button type="submit" class="btn btn-primary btn-user">
                                            Update Setting
                                        </button>
                                        </center>
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