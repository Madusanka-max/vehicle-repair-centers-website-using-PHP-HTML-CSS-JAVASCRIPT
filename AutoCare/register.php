<!DOCTYPE html>
<html lang="en">
<!-- Head Start -->
<head>
    <?php include 'php/session.php' ?>
    <?php include 'php/head.php' ?>
    <style>
        .LogReg-form {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        form{
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 25px;
        }
    </style>
</head>
<!-- Head End -->
<body>
    <!-- Top Bar Start -->
    <?php include 'php/TopBar.php' ?>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <?php include 'php/NavBar.php' ?>
    <!-- Nav Bar End -->

    <!-- register Start -->
    <div class="register">
        <div class="container">
            <div class="raw">
                <?php
                    require('php/config.php');
                    // When form submitted, insert values into the database.
                    if (isset($_REQUEST['name'])) {
                        // removes backslashes
                        $name = stripslashes($_REQUEST['name']);
                        //escapes special characters in a string
                        $name = mysqli_real_escape_string($con, $name);
                        $email    = stripslashes($_REQUEST['email']);
                        $email    = mysqli_real_escape_string($con, $email);
                        $password = stripslashes($_REQUEST['password']);
                        $password = mysqli_real_escape_string($con, $password);
                        $create_datetime = date("Y-m-d H:i:s");
                        $query    = "INSERT into `users` (name, password, email, Account, create_datetime)
                                    VALUES ('$name', '" . md5($password) . "', '$email', 'user', '$create_datetime')";
                        $result   = mysqli_query($con, $query);
                        if ($result) {
                            echo "<div class='form'>
                                <h3>You are registered successfully.</h3><br/>
                                <p class='link'>Click here to <a href='login.php'>Login</a></p>
                                </div>";
                        } else {
                            echo "<div class='form'>
                                <h3>Required fields are missing.</h3><br/>
                                <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                                </div>";
                        }
                    }else {
                ?>
                <div class="section-header text-center">
                <br>
                    <p>Register</p>
                </div>
                <div class="LogReg-form">
                    <form class="register" method="post">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                            <div class="form-group">
                            <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                        </div>
                            <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Register">
                        </div>
                        <p>Already have an account? <a href="login.php">Login here</a> .</p>
                    </form>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- register End -->

    <!-- Footer Start -->
    <?php include 'php/Footer.php' ?>
    <!-- Footer End -->
</body>
</html>