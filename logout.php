<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php"); // Go to the new login page name
exit();
?>