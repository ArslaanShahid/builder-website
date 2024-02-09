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
        <div class="row" id="servicesList">
            <!-- Placeholder text or loading indicator can be added here -->
            <!-- <p>Loading services...</p> -->
        </div>
    </div>
</div>

<!-- Footer Start -->
<?php require_once 'views/footer.php'; ?>

<!-- JavaScript to fetch services and populate the list -->
<script>
fetch('process/process_get_services.php')
    .then(response => response.json())
    .then(services => {
        const servicesList = document.getElementById('servicesList');

        services.forEach(service => {
            const listItem = document.createElement('div');
            listItem.classList.add('col-lg-4', 'col-md-6', 'wow', 'fadeInUp');
            listItem.setAttribute('data-wow-delay', '0.2s');

            const serviceItem = document.createElement('div');
            serviceItem.classList.add('service-item');

            const serviceBox = document.createElement('div');
            serviceBox.classList.add('service-box');

            // Create an h3 element for the heading
            const serviceName = document.createElement('h4');
            serviceName.style.fontSize = '15px';
            serviceName.style.color = '#fdbe33';
            serviceName.style.fontWeight = 'bold';
            serviceName.textContent = service.name; //SERVICE NAME FROM API RESPONSE
            serviceName.style.backgroundColor = '#030f27';
            serviceName.style.padding = '20px';

            // Create a p element for the description
            const serviceDescription = document.createElement('p');
            serviceDescription.style.fontSize = '14px'; // Adjust as needed
            
            serviceDescription.textContent = service.description; // Assuming description is the field name
            serviceDescription.style.color = 'black';

            // Append the heading to the serviceBox container
            serviceBox.appendChild(serviceName);

            // Append the description to the serviceBox container
            serviceBox.appendChild(serviceDescription);

            // Append the serviceBox container to the serviceItem container
            serviceItem.appendChild(serviceBox);

            // Append the serviceItem container to the listItem container
            listItem.appendChild(serviceItem);

            // Append the listItem container to the servicesList container
            servicesList.appendChild(listItem);
        });
    })
    .catch(error => {
        console.error('Error fetching services:', error);
    });
</script>