<h2>Contact Details</h2>

<form action="<?php echo ROOT; ?>" method="post">
	<?php
	if ($_GET['a']) {
		$client = mysql_fetch_assoc(mysql_query("SELECT * FROM contacts WHERE id=" . $_GET['a']));
		echo '<input type="hidden" name="id" value="' . $_GET['a'] . '">';
	}
	?>
	<p>
		<label for="type">Type</label>
		<select name="type"><option value="technical">Technical</option><option value="financial">Financial</option></select>
	</p>
	<p>
		<label for="firstName">First Name</label>
		<input type="text" name="firstName" value="<?php echo $client['firstName'] ?>">
	</p>
	<p>
		<label for="lastName">Last Name</label>
		<input type="text" name="lastName" value="<?php echo $client['lastName'] ?>">
	</p>
	<p>
		<label for="department">Department</label>
		<input type="text" name="department" value="<?php echo $client['department'] ?>">
	</p>
	<p>
		<label for="phone">Phone</label>
		<input type="text" name="phone" value="<?php echo $client['phone'] ?>">
	</p>
	<p>
		<label for="email">Email</label>
		<input type="text" name="email" value="<?php echo $client['email'] ?>">
	</p>
	<input type="hidden" name="action" value="contact">
	<input type="submit">
</form>