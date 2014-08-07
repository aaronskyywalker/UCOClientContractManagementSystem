<?php include('header.php'); ?>

<?php
if ($_GET['page'] == 'logout') unset($_SESSION['email']);

if ($_SESSION['email']) {

	if ($_POST['action']=='contact') {
		$handle = dbconnect();
		
		$type = $_POST['type'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$department = $_POST['department'];
		$extension = $_POST['extension'];
		$email = $_POST['email'];
		
		mysql_query("INSERT INTO contacts
			(type, firstName, lastName, department, extension, email)
			VALUES('$type', '$firstName', '$lastName', '$department', '$extension', '$email');");
	}

	else if ($_GET['page']) include('pages/' . $_GET['page'] . '.php');
	else include('pages/overview.php');

}
else if ($_POST['action']=='login') {
	$handle = dbconnect();
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	// Add email and password security
	
	$result = mysql_query("SELECT * FROM users WHERE email='$email' and password='$password'");
	
	if (mysql_num_rows($result) == 1) {
		$_SESSION['email'] = $email;
		include('pages/overview.php');
	}
	else {
		// Add email autocompletion
		$error = 'Invalid login.';
		include('pages/login.php');
	}
}
else include('pages/login.php');

?>

<?php include('footer.php'); ?>