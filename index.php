<?php include('header.php'); ?>

<?php
if ($_GET['page'] == 'logout') unset($_SESSION['email']);

if ($_SESSION['email']) :

	if ($_POST['action']=='contact') {
		$handle = dbconnect();
		foreach($_POST as $key => $value) $$key = stripslashes($value);
		mysql_query("INSERT INTO contacts
			(type, firstName, lastName, department, phone, email)
			VALUES('$type', '$firstName', '$lastName', '$department', '$phone', '$email');");
	}
	
	if ($_POST['action']=='contract') {
		$handle = dbconnect();
		foreach($_POST as $key => $value) $$key = stripslashes($value);
		mysql_query("INSERT INTO clients
			(firstName, lastName, department, phone, email, account, sla)
			VALUES('$firstName', '$lastName', '$department', '$phone', '$email', '$account', '$sla');");
		$client = mysql_result(mysql_query("SELECT MAX(id) FROM clients"), 0);
		
		mysql_query("INSERT INTO contracts
			(client, expires, uco, technical, financial, notes)
			VALUES('$client', '$expires', '$uco', '$technical', '$financial', '$notes');");
		$contract = mysql_result(mysql_query("SELECT MAX(id) FROM contracts"), 0);
		$values = '';
		foreach($_POST as $key => $value) {
			if (strpos($key, 'service') !== false && strpos($key, 'qty') === false) {
				$service = mysql_fetch_assoc(mysql_query("SELECT category, service, price, recurrence FROM defaultServices WHERE id=" . substr($key, 7)));
				$values .= "('" . $contract . "', '" . $service['category'] . "', '" . $service['service'] . "', '" . $_POST['service' . substr($key, 7) . '-qty'] . "', '" . $service['price'] . "', '" . $service['recurrence'] . "'),";
				
			}
		}
		mysql_query("INSERT INTO services
			(contract, category, service, quantity, price, recurrence)
			VALUES " . substr($values, 0, -1));
	}

	if ($_GET['page']) include('pages/' . $_GET['page'] . '.php');
	else include('pages/overview.php');

elseif ($_POST['action']=='login') :
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
	
else : include('pages/login.php'); endif;

?>

<?php include('footer.php'); ?>