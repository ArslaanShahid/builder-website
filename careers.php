<?php
session_start();
require_once 'views/header.php'
?>
<style>
  dl,
  ol,
  ul {
    margin-top: -300px;
    margin-bottom: 1rem;
    margin-left: 800px;
  }
</style>
<!-- Page Header Start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Careers</h2>
      </div>
      <div class="col-12">
        <a href="">Home</a>
        <a href="">Emp</a>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<div class="team">
  <div class="container">
    <div class="section-header text-center">
      <p style="color:black"> Please Upload your resume we will get back to you shortly.
      </p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="text-center">
          <h1 class="h6 text-danger mb-4">
          </h1>
        </div>
        <div class="newsletter">
          <p>Please Fill the following details:</p>
          <form method="POST" action="/process/process_upload_resume.php" enctype="multipart/form-data">
            <div class="form-group">
              <input class="form-control" type='text' name="name" id="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
              <input class="form-control" type='number' name="phone" id="phone" placeholder="Enter Your Phone #">
            </div>
            <div class="form-group">
              <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="form-group">
              <input class="col-md-5 btn btn-danger mt-3" type="submit" value="Upload File" name="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-6"> -->
      <p>Currently We have a job opening here for the following position, please upload your Resume. Our HR team will contact you soon!</p>
    </div>
    <div class="col-md-5w mt-1 float-right">
      <ol id='job-listing'>
        <h3>Job Position</h6>
      </ol>

    </div>
  </div>
</div>

</div>
</div>
</div>


<?php
require_once 'views/footer.php'
?>
<script>
  $(document).ready(function() {
    var jobListing = $('#job-listing');

    function fetchJobData() {
      $.ajax({
        url: '/process/process_get_job_listing.php', // Replace with the actual server endpoint to fetch job data
        method: 'GET',
        dataType: 'json',
        success: function(response) {
          // Iterate over the job data and append list items to the ul element
          response.forEach(function(job) {

            var listItem = $('<li>').text(job.title);
            jobListing.append(listItem);
          });
        },
        error: function(xhr, status, error) {
          console.log(error); // Handle any error that occurs
        }
      });
    }

    // Call the function to fetch job data when needed
    fetchJobData();
  });
</script>