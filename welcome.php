<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
include 'header.inc';
?>
<h2>Welcome to Your Swinburne Account</h2>
<p>Hello, <?php echo htmlspecialchars($_SESSION['user']); ?>! You have successfully logged in.</p>

<?php include 'footer.inc'; ?>