<?php
require('config.php');

if (isset($_POST['email'])) {
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM `users` WHERE email='$email' AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($result);
    $userData = mysqli_fetch_assoc($result);

    if ($rows == 1) 
    {
        $_SESSION['email'] = $email;
        $_SESSION['Account'] = $userData['Account']; // assuming Account field exists in the users table

        // Redirect to user login/index page
        if ($_SESSION['Account'] == 'admin') 
        {
            header("location: ../login/Admin/index.php");
        } else {
            header("location: ../login/index.php");
        }
    } else {
        echo "<div class='form'>
              <h3>Incorrect Username/password.</h3><br/>
              <p class='link'>Click here to <a href='../login.php'>Login</a> again.</p>
              </div>";
    }
}
?>