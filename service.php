<?php require_once 'views/header.php'; ?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Services</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Our Services</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Services</p>
            <h2>We Provide Services</h2>
        </div>
        <div class="row" id="servicesList">
            <!-- Services will be dynamically populated here -->
        </div>
    </div>
</div>

<!-- Footer Start -->
<?php require_once 'views/footer.php'; ?>

<!-- JavaScript to fetch services and populate the list -->
<script>
    fetch('http://builder-website.test/process/process_get_services.php')
        .then(response => response.json())
        .then(services => {
            const servicesList = document.getElementById('servicesList');

            services.forEach(service => {
                const listItem = document.createElement('div');
                listItem.classList.add('col-lg-4', 'col-md-6', 'wow', 'fadeInUp');
                listItem.setAttribute('data-wow-delay', '0.2s');

                const serviceItem = document.createElement('div');
                serviceItem.classList.add('service-item');

                const serviceText = document.createElement('div');
                serviceText.classList.add('service-text');

                const serviceName = document.createElement('h3');
                serviceName.textContent = service.service_name; // Assuming service_name is the field name

                serviceText.appendChild(serviceName);
                serviceItem.appendChild(serviceText);
                listItem.appendChild(serviceItem);
                servicesList.appendChild(listItem);
            });
        })
        .catch(error => {
            console.error('Error fetching services:', error);
        });
</script>