<?php
    session_start();

    if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']==true)
    {
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();

        header("Location: http://localhost/Ray/Class 15/index.php");
    }
    else
    {
        header("Location: http://localhost/Ray/Class 15/index.php");
    }
?>