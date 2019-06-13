<?php

if (isset($_COOKIE['PrivatePageCode'])) {
		include 'functions.php';
	//$conn=connect();

	$sql = "SELECT hospitalC FROM patient WHERE id ='".$_COOKIE['id']."'";
	$usr=retriveData($sql);
	$usrrow = mysqli_fetch_array($usr);
	if($usrrow['hospitalC']== $_COOKIE['PrivatePageCode']){

	/////do what ever you want
	?>
