<?php
// Start a session ONLY if one is not already active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the 'admin_logged_in' variable was set during the login process
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    
    // ...they are not logged in. Redirect them to the login page.
    // We assume login.php is in the same folder as this auth_check.php file
    header("Location: login.php");
    
    // Stop the script immediately
    exit;
}
?>