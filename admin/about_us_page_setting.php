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
                                    <h1 class="h4 text-gray-900 mb-4">About Us info Setting</h1>

                                    </div>
                                    <form class="user" action="../process/process_update_about_us.php"  method="POST">
                                        <div class="form-group" >
                                            <textarea placeholder="Enter About Us Info"  class="form-control form-control-user" id="about_us" name="about_us"></textarea>
                                        </div>
                                       
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Update About Us Info
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