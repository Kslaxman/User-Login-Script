<?php
require_once 'Includes/header.php';
?>

<div>
	<h1>Log In</h1>
	<p>No account? <a href="register.php">Register Here</a></p>

	<form action="Includes/login-inc.php" method="POST">
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Password">
		<button type="submit" name="submit">Login</button>
	</form>
</div>

<?php
require_once 'Includes/footer.php';
?>