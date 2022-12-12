<?php

require_once 'views/header.php';
require_once 'views/sidebar.php';
require_once 'views/navbar.php';
require_once '../models/Quote.php';

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Quote Details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>From</th>
                        <th>Where</th>
                        <th>Bed Rooms</th>
                        <th>Move date</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                $i = 1;
                $quotes = Quote::show_Quote();
                // echo("<pre>");
                // print_r($quotes);
                // echo ("</pre>");
                // die;
                foreach ($quotes as $quote){
                    echo("<tr>");
                    echo("<td>".$i ."</td>");
                    echo("<td>". $quote->name ."</td>");
                    echo("<td>". $quote->arrival_city ."</td>");
                    echo("<td>". $quote->departure_city ."</td>");
                    echo("<td>". $quote->bed_rooms ."</td>");
                    echo("<td>". $quote->move_date ."</td>");
                    echo("<td>". $quote->phone ."</td>");
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