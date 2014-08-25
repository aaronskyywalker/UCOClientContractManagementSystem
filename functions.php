<?php
session_start();

define('ROOT',     '//devdesigned.com/uco/');
define('HOSTNAME', 'ucodb.db.11921351.hostedresource.com');
define('USERNAME', 'ucodb');
define('PASSWORD', 'uC082514!');
define('DATABASE', 'ucodb');

$handle = dbconnect();

function dbconnect() {
	$handle = mysql_connect(HOSTNAME, USERNAME, PASSWORD) or exit('Could not connect to server.');
	mysql_select_db(DATABASE, $handle);
	return $handle;
}

?>