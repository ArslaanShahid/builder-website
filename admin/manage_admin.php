<?php
require_once'../models/Admin.php';
require_once 'views/header.php';
require_once 'views/sidebar.php';
require_once 'views/navbar.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Admin Details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                $i = 1;
                $quotes = Admin::show_Admin();
                // echo("<pre>");
                // print_r($quotes);
                // echo ("</pre>");
                // die;
                foreach ($quotes as $quote){
                    echo("<tr>");
                    echo("<td>".$i ."</td>");
                    echo("<td>". $quote->username ."</td>");
                    echo("<td>". $quote->email ."</td>");
                    if($quote->status == 1){
                        echo("<td class='badge rounded-pill bg-success text-white offset-4'>Active</td>");
                    }
                    else
                    echo("<td>Not Active</td>");

                    echo("<td><a href='process/process_delete_quote.php?id=".$quote->id."' class='text-danger offset-4 fa fa-trash'</td>");

                }
                ?>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

            </div>


















<?php

require_once 'views/footer.php';

?>