<?php

session_start();

// Source: index.php file 
if ($_POST) {
	require_once("connect_database.inc.php");

	$email = $db->real_escape_string($_POST['email']);
	$username = $db->real_escape_string($_POST['username']);
	$password = $db->real_escape_string($_POST['password']);

	$insert = "INSERT INTO subscriptions (email, username, password) ".
		"VALUES ('$email', '$username', '$password')";

	$result = $db->query($insert);

	if ($result) {
		header("Location: subscription.php");

		echo "<p>New user added.  Redirecting...</p>";
	} else {
		http_response_code(404);

		printf("Error message: %s\n", $db->error);
	}

	$db->close();
	exit;
}

?>
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style_sub.css">
		<title>Email Subscribtion</title>
	</head>
	<body>
		<h1>Subscribe to our email list:</h1>
		<p>We are excited to have you join us in raising environmental awareness!</p>
		<form method="POST">
			<div class="box">
				<div><label>Email:</label><input type="text" name="email" /></div>
				<div><label>Username:</label><input type="text" name="username" /></div>
				<div><label>Password:</label><input type="text" name="password" /></div>
			</div>
		<div class="submit"><input type="submit" value="Subscribe" /></div>
		</form>
	</body>
</html>
