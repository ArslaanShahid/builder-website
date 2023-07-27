<?php
require_once '../models/Job.php';
require_once 'views/header.php';
require_once 'views/sidebar.php';
require_once 'views/navbar.php';
$job = new Job();

$resumeDirectory = '../uploads/';
$resumes = $job->getAllUserResumes($resumeDirectory);

// Process the retrieved resumes
// print_r($resumes);
// die;
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Resume Details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Resume </th>

                        
                    </tr>
                </thead>
                <?php
                foreach ($resumes as $resume) {
                    
                    // Wrap the name in an anchor tag and output the clickable name within a table row
                    echo "<tr>";
                    echo "<td>".$resume['name']. "</td>";
                    echo "<td>".$resume['phone']. "</td>";
                    echo "<td><a href='/uploads/" . $resume['resume_name'] . "' download>" . $resume['resume_name'] . "</a></td>";
                    echo "</tr>";
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

<!-- Error handling in case the file path is incorrect or the file does not exist  -->

<script>
    const downloadLinks = document.querySelectorAll('a[download]');
    downloadLinks.forEach(link => {
        link.onerror = () => {
            link.innerHTML = 'Download failed';
            link.removeAttribute('download');
            link.style.color = 'red';
        };
    });
</script>";
<!-- This JavaScript code snippet adds an onerror event handler to the download links. If there is an error with the download, the link text will be changed to "Download failed" and the download attribute will be removed to prevent further download attempts.

Remember to adjust the code based on your specific file paths and configurations. If the issue persists, consider checking the server and PHP error logs for any relevant error messages. -->
























<?php

require_once 'views/footer.php';

?>