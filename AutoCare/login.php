<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'php/session.php' ?>
    <?php include 'php/head.php'; ?>
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
<body>
    <!-- Top Bar Start -->
    <?php include 'php/TopBar.php'; ?>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <?php include 'php/NavBar.php'; ?>
    <!-- Nav Bar End -->

    <!-- Login Start -->
    <div class="login">
        <div class="container">
            <div class="raw">
                <br>
                <div class="section-header text-center">
                    <p>Login</p>
                </div>
                <div class="LogReg-form">
                    <form class="login" method="post" action="php/login_process.php">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Login">
                        </div>
                        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->

    <!-- Footer Start -->
    <?php include 'php/Footer.php'; ?>
    <!-- Footer End -->
</body>
</html>