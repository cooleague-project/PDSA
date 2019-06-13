<?php
class functions{

	public function connect(){
		$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pdsa";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if (!$conn) {
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
	}else{
		die ('ok');
		
	}
		return $conn;
	}
public function insertAppointment($sql){

	$conn=$this->connect();  /////useing  connect() function
if ($conn->query($sql) === TRUE) {
  return 1;
} else {

return -1;
}

}
public function retriveAppointment($sql){

		$conn=$this->connect();  /////useing  connect() function
	if ($conn->query($sql) === TRUE) {
	   return 1;
	} else {
	   return -1;
	}
}




public function insert($sql){

	//$conn=connect();  /////useing  connect() function
if ($conn->query($sql) === TRUE) {
  return 1;
} else {
    return-1;
}

}



public function random_code($string,$v) {
$pattern = " ";
$firstPart = strstr(strtolower($string), $pattern, true);
$secondPart = substr(strstr(strtolower($string), $pattern, false), 0,3);
$nrRand = rand(0, 100);

$username = trim($firstPart).trim($secondPart).trim($nrRand);
return $string.$username.$v;
}



public function ret($sql){
//$conn=connect();  /////useing  connect() function
$query = mysqli_query($conn, $sql);

if (!$query) {
return 1;
}else{
 return -1;
}

}


}

$obj=new functions();
$obj->connect();
?>