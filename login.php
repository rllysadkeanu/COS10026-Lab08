<?php include 'header.inc'; ?>

<h2>Login Form</h2>
<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br><br>

    <input type="hidden" name="token" value="L106421322">
    
    <input type="submit" value="Login">
</form>

<?php include 'footer.inc'; ?>