<?php include 'header.inc'; ?>

<h2>Login to Your Swinburne Account</h2>

<form action="process.php" method="post" novalidate="novalidate">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required><br><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required><br><br>

  <input type="hidden" name="token" value="h106209094">

  <input type="submit" value="Login">
</form>

<?php include 'footer.inc'; ?>