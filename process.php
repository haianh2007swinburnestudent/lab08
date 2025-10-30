<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$correctUser = 'HaiAnh';
$correctPass = '106209094';

if ($username === $correctUser && $password === $correctPass) {
    $_SESSION['user'] = $username;
    header("Location: welcome.php");
    exit();
} else {
    include 'header.inc';
    echo "<h2>Invalid login. Please try again.</h2>";
    echo "<p><a href='login.php'>Back to Login</a></p>";
    include 'footer.inc';
}
?>