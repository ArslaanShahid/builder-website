<?php
require_once 'views/header.php'
?>
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Our Projects</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Our Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Our Projects</p>
                        <h2>Visit Our Projects</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".first">Complete</li>
                                <li data-filter=".second">Running</li>
                                <li data-filter=".third">Upcoming</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <!-- <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="img/portfolio-1.jpg" alt="Image">
                                    <div class="portfolio-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>Project Name</h3>
                                    <a class="btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">+</a>
                                </div>
                            </div>
                        </div> -->
                    
                    </div>
                    <div class="row">
                        <div class="col-12 load-more">
                            <!-- <a class="btn" href="#">Load More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio End -->

            <!-- Footer Start -->
            <script>
document.addEventListener('DOMContentLoaded', function () {
    const portfolioContainer = document.querySelector('.portfolio-container');

    // Fetch project details using AJAX
    fetch('/process/process_get_project.php')
        .then(response => response.json())
        .then(data => {
            // Assuming data.projects is an array of projects
            data.projects.forEach(project => {
                // Create project item (similar to the previous code)
                const projectItem = document.createElement('div');
                projectItem.classList.add('col-lg-4', 'col-md-6', 'col-sm-12', 'portfolio-item', 'first', 'wow', 'fadeInUp');
                projectItem.setAttribute('data-wow-delay', '0.1s');

                const projectWarp = document.createElement('div');
                projectWarp.classList.add('portfolio-warp');

                const projectImg = document.createElement('div');
                projectImg.classList.add('portfolio-img');

                const img = document.createElement('img');
                img.setAttribute('src', project.link); // Use project.link as the image source

                const projectOverlay = document.createElement('div');
                projectOverlay.classList.add('portfolio-overlay');

                const overlayText = document.createElement('p');
                overlayText.textContent = project.description;

                const projectText = document.createElement('div');
                projectText.classList.add('portfolio-text');

                const projectName = document.createElement('h3');
                projectName.textContent = project.name;

                const linkBtn = document.createElement('a');
                linkBtn.classList.add('btn');
                linkBtn.setAttribute('href', project.link);
                linkBtn.setAttribute('data-lightbox', 'portfolio');
                linkBtn.textContent = '+';

                // Append elements
                projectOverlay.appendChild(overlayText);
                projectImg.appendChild(img);
                projectImg.appendChild(projectOverlay);
                projectWarp.appendChild(projectImg);
                projectText.appendChild(projectName);
                projectText.appendChild(linkBtn);
                projectWarp.appendChild(projectText);
                projectItem.appendChild(projectWarp);

                // Append the project item to the portfolio container
                portfolioContainer.appendChild(projectItem);
            });
        })
        .catch(error => console.error('Error fetching projects:', error));
});
</script>

<?php
require_once 'views/footer.php'
?>

