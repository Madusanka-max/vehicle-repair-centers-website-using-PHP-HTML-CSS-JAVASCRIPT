<!DOCTYPE html>
<html>
    <!-- Head Start -->
    <head>    
        <?php include 'php/session.php' ?>
        <?php include 'php/head.php' ?>
    </head>
    <!-- Head End -->

    <body>
        <!-- Top Bar Start -->
        <?php include 'php/TopBar.php' ?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <?php include 'php/NavBar.php' ?>
        <!-- Nav Bar End -->

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about0.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>AutoCare Is The Best Place For Your Auto Care</h2>
                        </div>
                        <div class="about-content">
                            <p>
                                At AutoCare, we are passionate about keeping your vehicles running smoothly and ensuring your safety on the road. With a commitment to excellence and a team of dedicated professionals, we have established ourselves as a leading car service center in 128, Colombo 8, Sri Lanka.
                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Professional & Expert</li>
                                <li><i class="far fa-check-circle"></i>Quality Servicing Center</li>
                                <li><i class="far fa-check-circle"></i>Awards Winning Workers</li>
                                <li><i class="far fa-check-circle"></i>State-of-the-Art Facility</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-down">2</h3>
                                <p>Service Points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">30</h3>
                                <p>Engineers & Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">250</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">500</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        
        <!-- Footer Start -->
        <?php include 'php/Footer.php' ?>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

</body>
</html>