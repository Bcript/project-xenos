<?php

$username = "";
$email = "";
$password = "";
$passwordConf = ""; 
$usererr = "";
$emailerr = "";
$passerr = ""; 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
	if (empty($_POST["username"])) {
		$usererr = "error: username cannot be empty!";
	} else {
		$username = validate($_POST['username']);
	}
	if (empty($_POST["password"])) {
		$passerr = "error: password cannot be empty!";
	} else {
		$password = validate($_POST['password']);
	}
	if (empty($_POST["email"])) {
		$emailerr = "error: email cannot be empty!";
	} else { 
		$email = validate($_POST['email']);
	}
	if (empty($_POST["passwordConf"])) {
		$passerr = "error: password cannot be empty!";
	} else { 
		$passwordConf = validate($_POST['password']);
	}
}

function validate($body) {
	$body = trim($body);
	$body = stripslashes($body);
	$body = htmlspecialchars($data);
	return $data;
}
