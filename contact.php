<?php
session_start();
require_once 'views/header.php'
?>

<div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Get In Touch</p>
                        <h2>For Any Query</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="flaticon-address"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>123 Street, New York, USA</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-call"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+012 345 67890</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-send-mail"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>info@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div id="success" style="color:yellowgreen"></div>
                                <div id="messageContainer" style="color:red"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" name='name' placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" name='email' placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" name='subject' placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" name='message' placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                    <button class="btn" type="button" id="submitButton">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
            <script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('submitButton').addEventListener('click', function() {
        submitForm();
    });
});

</script>
<script>                
function submitForm() {
    // Get form data
    const formData = new FormData(document.getElementById('contactForm'));

    fetch('process/process_contact.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        const messageContainer = document.getElementById('messageContainer');

        if (data.success) {
            // Handle success: Show success message, reset form, etc.
            messageContainer.innerHTML = '<div class="success-message" , style="color:green">' + data.message + '</div>';
            console.log('Success:', data.message);
            console.log('Received Data:', data.data);
            // Reset the form if needed
            document.getElementById('contactForm').reset();
        } else {
            // Handle error: Show error message, highlight form fields, etc.
            messageContainer.innerHTML = '<div class="error-message", style="color:red" >' + data.message + '</div>';
            console.error('Error:', data.message);
            if (data.errors) {
                // Handle specific errors
                console.log('Validation Errors:', data.errors);
                // Display validation errors in the form or handle them accordingly
            }
        }
    })
    .catch(error => {
        console.error('Error submitting form:', error);
    });
}

</script>
            <?php
require_once 'views/footer.php'

?>