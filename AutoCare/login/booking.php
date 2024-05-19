<!DOCTYPE html>
<html>
    <!-- Head Start -->
    <?php include 'php/session.php' ?>
    <?php include 'php/head.php' ?>
    <!-- Head End -->

    <body>
        <!-- Top Bar Start -->
        <?php include 'php/TopBar.php' ?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <?php include 'php/NavBar.php' ?>
        <!-- Nav Bar End -->

        <!-- Booking Start -->
        <div class="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-header text-left">
                            <p>Online Bookings</p>
                        </div>
                        <div class="col-md-7">
                            <div class="contact-form">
                                <form action="php/submitBooking.php" method="post">
                                    <div class="control-group">
                                        <label for="name">Name *</label><br>
                                        <label for="first">First</label><br>
                                        <input type="text" id="first" name="first"><br>
                                        <label for="last">Last</label><br>
                                        <input type="text" id="last" name="last"><br>
                                    </div>
                                    <div class="control-group">
                                    <label for="vehicle_type">Vehicle Type</label><br>
                                    <select id="vehicle_type" name="vehicle_type">
                                        <option value="car">Car</option>
                                        <option value="motorcycle">Motorcycle</option>
                                        <option value="truck">Truck</option>
                                        <option value="van">Van</option>
                                        <option value="suv">SUV</option>
                                        <option value="bus">Bus</option>
                                    </select><br>
                                    </div>
                                    <div class="control-group">
                                        <label for="services">Select services</label><br>
                                        <input type="checkbox" id="service1" name="services[]" value="Full Service">
                                        <label for="service1">Full Service</label><br>
                                        <input type="checkbox" id="service2" name="services[]" value="Exterior & Interior Washing">
                                        <label for="service2">Exterior & Interior Washing</label><br>
                                        <input type="checkbox" id="service3" name="services[]" value="Oil Changing">
                                        <label for="service3">Oil Changing</label><br>
                                        <input type="checkbox" id="service4" name="services[]" value="Brake Services">
                                        <label for="service4">Brake Services</label><br>
                                        <input type="checkbox" id="service5" name="services[]" value="Engine Diagnostics">
                                        <label for="service5">Engine Diagnostics</label><br>
                                        <input type="checkbox" id="service6" name="services[]" value="Electrical System Repairs">
                                        <label for="service6">Electrical System Repairs</label><br>
                                        <input type="checkbox" id="service7" name="services[]" value="Air Conditioning Service">
                                        <label for="service7">Air Conditioning Service</label><br>
                                    </div>
                                    <div class="control-group">
                                        <label for="branch">Branch</label><br>
                                        <select id="branch" name="branch">
                                            <option value="Colombo ">Colombo</option>
                                            <option value="Kandy">Kandy</option>
                                        </select>
                                    </div>
                                    <div class="control-group">
                                        <label for="date">Date</label><br>
                                        <input type="date" id="date" name="date" required><br>
                                    </div>
                                    <div class="control-group">
                                        <label for="time">Time</label><br>
                                        <select name="time">
                                            <?php
                                            $start_time = strtotime('8:00 AM');
                                            $end_time = strtotime('5:00 PM');
                                            while ($start_time <= $end_time) {
                                                $formatted_time = date('h:i A', $start_time);
                                                echo '<option value="' . $formatted_time . '">' . $formatted_time . '</option>';
                                                $start_time = strtotime('+30 minutes', $start_time);
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="control-group">
                                        <label for="phone">Phone</label><br>
                                        <input type="tel" id="phone" name="phone" value="071 234 5678"><br>
                                    </div>
                                    <div class="control-group">
                                        <label for="vehicle_number">Vehicle Number</label><br>
                                        <input type="text" id="vehicle_number" name="vehicle_number"><br>
                                    </div>
                                    <div class="control-group">
                                        <label for="other">Anything Else?</label><br>
                                        <textarea id="other" name="other"></textarea><br>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Book">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
        
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
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="../mail/jqBootstrapValidation.min.js"></script>
        <script src="../mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="../js/main.js"></script>

    </body>
</html>