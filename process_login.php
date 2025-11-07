<?php
session_start(); // Start the session
// The include path was correct.
include 'includes/db_connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        // IMPORTANT: In a real app, use password_verify()
        if ($password == $row['password']) { 
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;
            $_SESSION['admin_role'] = $row['role'];
            
            // --- CORRECTION ---
            // Redirect to the admin dashboard INSIDE the /admin/ folder
            header("Location: dashboard/index.php"); 
            exit();
        }
    }
    
    // This part was correct
    header("Location: login.php?error=1");
    exit();
}
?>