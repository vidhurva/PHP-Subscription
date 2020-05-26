<?php

require_once("mysql_password.inc.php");

define('MYSQL_USER', 'vvashisht');
define('MYSQL_DB', 'public_html');


$db = new mysqli("localhost", MYSQL_USER, MYSQL_PW, MYSQL_DB);

if ($db->connect_errno) {
	http_response_code(404); //something went wrong
	echo $db->connect_error;
	echo "<br>";
	echo "Unable to connect. You may have an incorrect localhost or poor internet connection:";
	exit;
}

// source: db_connect.inc.php file
?>
