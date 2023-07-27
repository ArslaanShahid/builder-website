<?php
require_once 'views/header.php';
require_once './models/Services.php';
$services = Services::show_services();
// print_r($services);
// die;
?>
            
            
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
                    <div class="row">
                    <?php foreach ($services as $service): ?>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
        <div class="service-item">
            <div class="service-img">
                <img src="img/<?php echo $service->title; ?>.jpg" alt="<?php echo $service->title; ?>">
                <div class="service-overlay">
                    <p><?php echo $service->description; ?></p>
                </div>
            </div>
            <div class="service-text">
                <h3><?php echo $service->title; ?></h3>
                <a class="btn" href="img/<?php echo $service->title; ?>.jpg" data-lightbox="service">+</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

</div>
            <!-- Service End -->
                </div>
            </div>

            <!-- Footer Start -->
<?php
require_once 'views/footer.php';

?>