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
            <!-- Placeholder text or loading indicator can be added here -->
            <p>Loading services...</p>
        </div>
    </div>
</div>

<!-- Footer Start -->
<?php require_once 'views/footer.php'; ?>

<!-- Link your CSS file -->
<link rel="stylesheet" href="path/to/your/styles.css">

<!-- JavaScript to fetch services and populate the list -->
<script>
    fetch('http://builder-website.test/process/process_get_services.php')
        .then(response => response.json())
        .then(services => {
            const servicesList = document.getElementById('servicesList');
            servicesList.innerHTML = ''; // Clear the placeholder text or loading indicator

            services.forEach(service => {
                const listItem = document.createElement('div');
                listItem.classList.add('col-lg-4', 'col-md-6', 'wow', 'fadeInUp');
                listItem.setAttribute('data-wow-delay', '0.1s');

                const serviceItem = document.createElement('div');
                serviceItem.classList.add('service-item');

                const serviceImg = document.createElement('div');
                serviceImg.classList.add('service-img');

                const img = document.createElement('img');
                img.src = service.image; // Assuming 'image' is the field name for the image source
                img.alt = 'Service Image';

                const serviceOverlay = document.createElement('div');
                serviceOverlay.classList.add('service-overlay');

                const description = document.createElement('p');
                description.textContent = service.description;

                serviceOverlay.appendChild(description);
                serviceImg.appendChild(img);
                serviceImg.appendChild(serviceOverlay);

                const serviceText = document.createElement('div');
                serviceText.classList.add('service-text');

                const serviceName = document.createElement('h3');
                serviceName.textContent = service.name;

                const lightboxLink = document.createElement('a');
                lightboxLink.classList.add('btn');
                lightboxLink.href = service.image; // Assuming 'image' is the field name for the image source
                lightboxLink.setAttribute('data-lightbox', 'service');
                lightboxLink.textContent = '+';

                serviceText.appendChild(serviceName);
                serviceText.appendChild(lightboxLink);

                serviceItem.appendChild(serviceText);

                listItem.appendChild(serviceItem);
                servicesList.appendChild(listItem);
            });
        })
        .catch(error => {
            console.error('Error fetching services:', error);
        });
</script>

<!-- Link your JavaScript file if needed -->
<script src="path/to/your/scripts.js"></script>
