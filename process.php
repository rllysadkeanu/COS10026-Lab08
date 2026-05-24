<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "lyeweyming" && $password == "106421322") {
    $_SESSION['user'] = $username;
    // Redirect to the welcome page if successful
    header('Location: welcome.php');
    exit();
} else {
    // If login fails, show an error and link back to the updated login.php
    echo "Invalid login. <a href='login.php'>Try again</a>";
}
?>