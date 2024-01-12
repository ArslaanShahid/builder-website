<?php
require_once './models/Setting.php';
$setting = Setting::show_footer_info();
// print_r($setting['footer']->phone);
// die;
?>
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5">
                <div class="footer-contact">
                    <h2>Office Contact</h2>
                    <p><i class="fa fa-map-marker-alt"></i>
                        <?php echo ($setting['footer']->location) ?>

                    </p>
                    <p><i class="fa fa-phone-alt"></i><?php echo ($setting['footer']->phone) ?></p>
                    <p><i class="fa fa-envelope"></i><?php echo ($setting['footer']->email) ?></p>
                    <div class="footer-social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="footer-link">
                    <h2>Services Areas</h2>
                    <a href="">Building Construction</a>
                    <a href="">House Renovation</a>
                    <a href="">Architecture Design</a>
                    <a href="">Interior Design</a>
                    <a href="">Painting</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="footer-link">
                    <h2>Useful Pages</h2>
                    <a href="">About Us</a>
                    <a href="">Contact Us</a>
                    <a href="">Our Team</a>
                    <a href="">Projects</a>
                    <a href="">Testimonial</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="#">New Builderz LTD</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Designed By <a href="www.techcodex.net">TechCodeX</a></p>
            </div>
        </div>
    </div>
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/slick/slick.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>


<!-- Template Javascript -->
<script src="../admin/js/toastr.min.js"></script>

<script>
    toastr.options.closeButton = true;
    toastr.options.preventDuplicate = true;
    toastr.options.progressBar = true;
    <?php
    if (isset($_SESSION['success'])) {
        echo ("toastr.success('" . $_SESSION['success'] . "')");
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
        echo ("toastr.error('" . $_SESSION['error'] . "')");
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['info'])) {
        echo ("toastr.info('" . $_SESSION['info'] . "')");
        unset($_SESSION['info']);
    }
    ?>
</script>