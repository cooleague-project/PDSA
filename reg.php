<?php
include 'functions.php';

$conn=connect();


if(isset($_POST['submit'])){
	
	
	if($_POST['name']&&$_POST['email']&&$_POST['username']&&$_POST['password']&&$_POST['age']&&$_POST['birthdate']){
			$Dcode=random_code($_POST['username'],"D");
			$Lcode=random_code($_POST['username'],"L");
			$DHcode=random_code($_POST['username'],"DH");
			$sql=	"INSERT INTO patient (username, password, name,email,doctorC,labC,hospitalC,age,birthdate) VALUES ('".$_POST['username']."','".password_hash($_POST['password'], PASSWORD_DEFAULT)."','".$_POST['name']."','".$_POST['email']."','".$_POST['Dcode']."','".$_POST['Lcode']."','".$_POST['DHcode']."','".$_POST['age']."','".$_POST['birthdate']."')";

insert($sql);
	}else{
			echo 'enter the needed data';
		}
	
	
}



?>

