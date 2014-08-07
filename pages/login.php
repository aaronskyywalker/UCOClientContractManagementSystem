<h1>Client Contract Management System</h1>
<form action="./" method="post">
	<?php if ($error) echo "<p class='error small'>$error</p>"; ?>
	<p>
		<label for="email">Email:</label><input type="text" name="email" value="ucosupr@sdsu.edu"><br>
		<label for="password">Password:</label><input type="password" name="password" value="contrasena"><br>
		<input type="hidden" name="action" value="login">
		<input type="submit" value="Login"> Password is <i>contrasena</i>.
	</p>
</form>