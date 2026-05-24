<?php
session_start();

// Check if the session variable exists
if (isset($_SESSION['user'])) {
    include 'header.inc';
    
    echo "<h2>Welcome, " . htmlspecialchars($_SESSION['user']) . "!</h2>";
    echo "<p>You have successfully logged in.</p>";
    
    include 'footer.inc';
} else {
    // Redirect back to login if they aren't authenticated
    header('Location: login.php');
    exit();
}
?>