<?php
require_once '../models/Contact.php';
require_once 'views/header.php';
require_once 'views/sidebar.php';
require_once 'views/navbar.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Queries Details</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    $contact = Contact::Show_Queries();

                    foreach ($contact as $contacts) {
                        echo("<tr>");
                        echo("<td>" . $i . "</td>");
                        echo("<td>" . $contacts->name . "</td>");
                        echo("<td>" . $contacts->email . "</td>");
                        echo("<td>" . $contacts->subject . "</td>");
                        echo("<td>" . $contacts->timestamp . "</td>");
                        echo("<td>
                                <button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#messageModal$i'>
                                    View Message
                                </button>
                                <!-- Message Modal -->
                                <div class='modal fade' id='messageModal$i' tabindex='-1' role='dialog' aria-labelledby='messageModalLabel$i' aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title' id='messageModalLabel$i'>Message</h5>
                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                    <span aria-hidden='true'>&times;</span>
                                                </button>
                                            </div>
                                            <div class='modal-body'>
                                                <p>" . $contacts->message . "</p>
                                            </div>
                                            <div class='modal-footer'>
                                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>");

                        echo("</tr>");
                        $i++;
                    }
                    ?>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'views/footer.php';
?>
