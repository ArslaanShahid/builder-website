<?php
require_once 'views/header.php';
require_once './models/Services.php';
$services = Services::show_services();
?>

<!-- Top Bar End -->

<!-- Nav Bar Start -->

<!-- Nav Bar End -->


<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/carousel-1.jpg" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">We Are Professional</p>
                <h1 class="animated fadeInLeft">For Your Dream Project</h1>
                <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/carousel-2.jpg" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">Professional Builder</p>
                <h1 class="animated fadeInLeft">We Build Your Home</h1>
                <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/carousel-3.jpg" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">We Are Trusted</p>
                <h1 class="animated fadeInLeft">For Your Dream Home</h1>
                <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel End -->


<!-- Feature Start-->
<div class="feature wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-worker"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Expert Worker</h3>
                        <p>With a wealth of experience and specialized expertise, our team is committed to delivering nothing short of exceptional results. At the core of our work is a profound dedication, where skill meets passion, defining our approach to every task. We take pride in transforming visions into reality, ensuring each project reflects the pinnacle of craftsmanship.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-building"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Quality Work</h3>
                        <p>Our commitment to excellence ensures that every project is completed with the utmost precision and attention to detail, guaranteeing high-quality outcomes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="feature-text">
                        <h3>24/7 Support</h3>
                        <p>Our dedicated support team is available around the clock, 24/7, to assist you with any inquiries or issues. We prioritize providing timely and reliable support to ensure your peace of mind at all times.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->


<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>Welcome to Builderz</p>
                    <h2>25 Years Experience</h2>
                </div>
                <div class="about-text">
                <p>With a rich history spanning 25 years, Builderz is your seasoned partner in crafting exceptional spaces. Our expertise goes beyond construction; we are dedicated to turning your vision into reality. At Builderz, we understand that every project is unique, and we take pride in delivering tailored solutions that exceed expectations.</p>

                    <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                    </p> -->
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start -->
<div class="fact">
    <div class="container-fluid">
        <div class="row counters">
            <div class="col-md-6 fact-left wow slideInLeft">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-worker"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">109</h2>
                            <p>Expert Workers</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">485</h2>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 fact-right wow slideInRight">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-address"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">789</h2>
                            <p>Completed Projects</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-crane"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">890</h2>
                            <p>Running Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <p>Our Services</p>
                <h2>We Provide Services</h2>
            </div>
            <div class="row" id="servicesList">
                <!-- Services will be dynamically populated here -->
            </div>
        </div>
        <!-- Service End -->
    </div>
</div>
<!-- Service End -->


<!-- Video Start -->
<div class="video wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
            <span></span>
        </button>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video End -->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Team</p>
            <h2>Meet Our Engineer</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team/ceo.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Engineer Taimoor Shahzad</h2>
                        <p>CEO</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team/director.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Dylan Adams</h2>
                        <p>Director</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team/marketing-manager.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Jhon Doe</h2>
                        <p>Interior Designer</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team/construction-manager.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Josh Dunn</h2>
                        <p>Painter</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- FAQs Start -->
<div class="faqs">
    <div class="container">
        <div class="section-header text-center">
            <p>Frequently Asked Question</p>
            <h2>You May Ask</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion-1">
                    <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="accordion-2">
                    <div class="card wow fadeInRight" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.4s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.5s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->


<!-- Testimonial Start -->
<div class="testimonial wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider-nav">
                    <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                    <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                    <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                    <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                    <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                    <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                    <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                    <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    <div class="slider-item">
                        <h3>Customer Name</h3>
                        <h4>profession</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                    </div>
                    <div class="slider-item">
                        <h3>Customer Name</h3>
                        <h4>profession</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                    </div>
                    <div class="slider-item">
                        <h3>Customer Name</h3>
                        <h4>profession</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                    </div>
                    <div class="slider-item">
                        <h3>Customer Name</h3>
                        <h4>profession</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                    </div>
                    <div class="slider-item">
                        <h3>Customer Name</h3>
                        <h4>profession</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                    </div>
                    <div class="slider-item">
                        <h3>Customer Name</h3>
                        <h4>profession</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                    </div>
                    <div class="slider-item">
                        <h3>Customer Name</h3>
                        <h4>profession</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                    </div>
                    <div class="slider-item">
                        <h3>Customer Name</h3>
                        <h4>profession</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>


</div>
<?php
require_once 'views/footer.php'
?>
<script>
fetch('https:/process/process_get_services.php')
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