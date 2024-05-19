<?php
session_start();
session_unset();
if(session_destroy()) 
{
    // Redirecting To login Page
    header("Location: ../../../login.php");
}

?>
