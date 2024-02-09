<?php
require_once 'views/header.php';
require_once 'views/sidebar.php';
require_once 'views/navbar.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>
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
                                        <h1 class="h4 text-gray-900 mb-4">Add Project</h1>
                                        <span class="text-success">
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
                                        </span>
                                    </div>
                                    <form action='#' class="user" id='projectForm' method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Project Name...">
                                            <span class="text-danger">
                                                <?php
                                                if (isset($errors['name'])) {
                                                    echo ($errors['name']);
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="client_name" placeholder="Enter Client Name" name="client_name">
                                            <span class="text-danger">
                                                <?php
                                                if (isset($errors['client_name'])) {
                                                    echo ($errors['client_name']);
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="project_type" placeholder="Enter Project Type" name="project_type">
                                            <span class="text-danger">
                                                <?php
                                                if (isset($errors['project_type'])) {
                                                    echo ($errors['project_type']);
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="location" placeholder="Enter Project Location" name="location">
                                            <span class="text-danger">
                                                <?php
                                                if (isset($errors['location'])) {
                                                    echo ($errors['location']);
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="date_of_start">Start Date:</label>
                                            <input type="date" class="form-control" id="date_of_start" name="date_of_start">
                                            <span class="text-danger">
                                                <?php
                                                if (isset($errors['date_of_start'])) {
                                                    echo ($errors['date_of_start']);
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="date_of_end">End Date:</label>
                                            <input type="date" class="form-control" id="date_of_end" name="date_of_end">
                                            <span class="text-danger">
                                                <?php
                                                if (isset($errors['date_of_end'])) {
                                                    echo ($errors['date_of_end']);
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="status" name="status">
                                                <option selected>Please Select Status</option>
                                                <option value="InProgress">In Progress</option>
                                                <option value="Completed">Completed</option>
                                                <option value="OnHold">On Hold</option>
                                            </select>
                                            <span class="text-danger">
                                                <?php
                                                if (isset($errors['status'])) {
                                                    echo ($errors['status']);
                                                }
                                                ?>
                                            </span>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Add Project
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




</div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('projectForm');

        form.addEventListener('submit', async function(event) {
            event.preventDefault();

            // Validate form inputs
            const nameInput = document.getElementById('name');
            const clientNameInput = document.getElementById('client_name');
            const projectTypeInput = document.getElementById('project_type');
            const locationInput = document.getElementById('location');
            const dateOfStartInput = document.getElementById('date_of_start');
            const dateOfEndInput = document.getElementById('date_of_end');
            const statusInput = document.getElementById('status');

            const formData = {
                name: nameInput.value,
                client_name: clientNameInput.value,
                project_type: projectTypeInput.value,
                location: locationInput.value,
                date_of_start: dateOfStartInput.value,
                date_of_end: dateOfEndInput.value,
                status: statusInput.value,
            };

            if (!validateFormData(formData)) {
                // If validation fails, display an error message and return
                toastr.error('Please fill in all required fields.');
                return;
            }

            try {
                // If validation passes, make the API request
                const url = '/process/process_add_project.php';
                const response = await fetch(url, {
                    method: 'POST',
                    body: JSON.stringify({
                        data: [formData]
                    }),
                });

                if (response.status === 400) {
                    toastr.error('Some Error Occurred');
                } else if (response.status === 200) {
                    toastr.success('Project Added');
                    form.reset();

                }
            } catch (error) {
                console.error(error);
                toastr.error('An unexpected error occurred.');
            }
        });

        function validateFormData(formData) {
            // Perform your validation logic here
            // Example: Check if required fields are not empty
            return (
                formData.name.trim() !== '' &&
                formData.client_name.trim() !== '' &&
                formData.project_type.trim() !== '' &&
                formData.location.trim() !== '' &&
                formData.date_of_start.trim() !== '' &&
                formData.date_of_end.trim() !== '' &&
                formData.status.trim() !== ''
            );
        }
    });
</script>
<?php

require_once 'views/footer.php';

?>