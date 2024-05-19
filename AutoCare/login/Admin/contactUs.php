<!DOCTYPE html>
<html>
    <head>
    <!-- Head Start -->
    <?php include 'php/session.php' ?>
    <?php include 'php/head.php' ?>
    <style>
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 30px;
            margin-bottom: 50px;
        }
        th td {
            padding: 12px;
            text-align: left;
        }
        tr:hover {
            background-color: #b0b1b5;
        }
    </style>
    <!-- Head End -->
    </head>
    <body>
        <!-- Top Bar Start -->
        <?php include 'php/TopBar.php' ?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <?php include 'php/NavBar.php' ?>
        <!-- Nav Bar End -->

        <!-- admin contactUs Start -->
        <div class="team">
            <div class="container">
            <div class="section-header text-center">
                    <p>Admin Panel</p>                
                </div>
                <div class="section-header text-left">
                    <p>Contact Us</p>                
                </div>
                <div class="contactUs">
                    <table class="contactUsTable">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                        <?php
                            require('php/config.php');

                            $sql = "SELECT * FROM contact";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                        <td>" . $row["name"] . "</td>
                                        <td>" . $row["email"] . "</td>
                                        <td>" . $row["subject"] . "</td>
                                        <td>" . $row["message"] . "</td>
                                    </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>No results found</td></tr>";
                            }
                            $con->close();
                        ?>

                    </table>
                </div>
            </div>
        </div>
        <!-- admin contactUs End -->

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
        <script src="../../lib/easing/easing.min.js"></script>
        <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../../lib/waypoints/waypoints.min.js"></script>
        <script src="../../lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="../../mail/jqBootstrapValidation.min.js"></script>
        <script src="../../mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="../../js/main.js"></script>

</body>
</html>