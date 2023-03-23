<?php
require_once'../models/Employee.php';
require_once 'views/header.php';
require_once 'views/sidebar.php';
require_once 'views/navbar.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Employee Details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Cnic</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Joining Date</th>
                        <th>Unique Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                $i = 1;
                $emps = Employee::GetEmployee();
                // echo("<pre>");
                // print_r($emps);
                // echo ("</pre>");
                // die;
                foreach ($emps as $emp){
                    echo("<tr>");
                    echo("<td>".$i++ ."</td>");
                    echo("<td>". $emp->name ."</td>");
                    echo("<td>". $emp->cnic ."</td>");
                    echo("<td>". $emp->gender ."</td>");
                    echo("<td>". $emp->email ."</td>");
                    echo("<td>". $emp->joiningDate ."</td>");
                    echo("<td>". $emp->employeeCode ."</td>");


                    // if($quote->status == 1){
                    //     echo("<td class='badge rounded-pill bg-success text-white offset-4'>Active</td>");
                    // }
                    // else
                    // echo("<td>Not Active</td>");

                    echo("<td><a href='process/process_delete_quote.php?id=".$emp->id."' class='text-danger offset-4 fa fa-trash'</td>");

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