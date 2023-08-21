<?php
session_start();
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
            <p> Please Enter 5 Digit Code to Generate Certificate
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center">
                    <h1 class="h6 text-danger mb-4">

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

                    </h1>
                </div>
                <!-- ... (Your existing HTML code) ... -->

                <div class="newsletter">
                    <form action="process/process_certificate.php" method="GET" id="certificateForm">
                        <input class="form-control" name="code" id="code" type="number" placeholder="Enter 5 Digit Code">
                        <span class="text-danger col-md-4">
                            <?php
                            if (isset($errors['code'])) {
                                echo ($errors['code']);
                            }
                            ?>
                        </span>
                        <center>
                            <button type="submit" class="col-md-5 btn btn-danger mt-3">Verify</button>
                        </center>
                    </form>
                </div>

                <div id="result">
                    <img src="./img/loading.gif" alt="Loading..." id="loadingGif" style="display: none;">
                    <p class="text-danger" id="errorMessage"></p>
                </div>


            </div>
        </div>
    </div>
</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.querySelector("#certificateForm");
        const resultElement = document.querySelector("#result");
        const loadingGif = document.querySelector("#loadingGif");
        const errorMessage = document.querySelector("#errorMessage");

        form.addEventListener("submit", function(event) {
            event.preventDefault();

            const codeInput = document.querySelector("#code");
            const code = codeInput.value;

            loadingGif.style.display = "block"; // Show the loading GIF

            fetch("process/process_certificate.php?code=" + code)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        errorMessage.textContent = "Error: " + data.error;
                    } else if (data.success) {
                        window.location.href = "../certificate.php?code=" + data.code;
                    }
                })
                .catch(error => {
                    errorMessage.textContent = "An error occurred. Please try again.";
                    console.error("Error:", error);
                })
                .finally(() => {
                    // Hide the loading GIF after a 1-second delay
                    setTimeout(() => {
                        loadingGif.style.display = "none";
                    }, 1000); // 1000 milliseconds = 1 second
                });
        });
    });
</script>

<?php
require_once 'views/footer.php'
?>