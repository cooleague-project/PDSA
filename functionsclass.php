<?php


class functions{

	public function connect($servername, $username, $password, $dbname){


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if (!$conn) {
		return -1;
	}

	$out = new MyXYZ();
	$out->x = $conn;
	   $out->y = 1;
	 return 1;
	}

public function insertData($sql){

	$x=$this->connect("localhost","root","","pdsa");
	 $conn=$x->x;
if ($conn->query($sql) == TRUE) {
  return 1;
} else {
    return-1;
}

}

public function retriveData($sql){
	$x=$this->connect("localhost","root","","pdsa");
	 $conn=$x->x;  /////useing  connect() function
$query = mysqli_query($conn, $sql);

if (!$query) {
return -1;
}else{
 return 1;
}
}

public function concate($day,$month,$year)
{
  $appointment=$day.'-'.$month.'-'.$year;
	return $appointment;
}
     public function random()
    {
        return rand(0,100);
    }

	public function random_code($string,$v,$nrRand) {
	$pattern = " ";
	$firstPart = strstr(strtolower($string), $pattern, true);
	$secondPart = substr(strstr(strtolower($string), $pattern, false), 0,3);
	//$nrRand = $this-> random();

	$username = trim($firstPart).trim($secondPart).trim($nrRand);
	return $string.$username.$v;
	}

}




class MyXYZ
{
    public $x;
    public $y;

}


?>
