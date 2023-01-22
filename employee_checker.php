<?php
require_once 'views/header.php'
?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Employee Verification System</h2>
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
            <p>                    Please Enter 5 Digit Code to Generate Certificate
</p>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="newsletter">
                <div class="form">
                    <input class="form-control" type="number" placeholder="Enter 5 Digit Code">
                    <center>
                        <button class="col-md-5 btn btn-danger mt-3">Verify</button>

                    </center>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


<?php
require_once 'views/footer.php'
?>