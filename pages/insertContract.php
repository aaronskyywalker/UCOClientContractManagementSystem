<?php
	require("functions.php");
	$dbhandle = open_db();

	$dbInsert = "insert into dummy(id) values (1)";

	mysqli_query($dbhandle,$dbInsert);
	if(close_db($dbhandle)){
		header('Location: contract-details.php');
	}
	
?>

