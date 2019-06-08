<?php
function connect(){
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdsa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
	return $conn;
}

function insertData($sql){

	$conn=connect();  /////useing  connect() function
if ($conn->query($sql) === TRUE) {
    echo "<label id='good'>New record created successfully</label>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}


function retriveData($sql){
$conn=connect();  /////useing  connect() function
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}else{
 return $query;
}

function random_code($string,$v) {
$pattern = " ";
$firstPart = strstr(strtolower($string), $pattern, true);
$secondPart = substr(strstr(strtolower($string), $pattern, false), 0,3);
$nrRand = rand(0, 100);

$username = trim($firstPart).trim($secondPart).trim($nrRand);
return $string.$username.$v;
}




}
function concate($day,$month,$year)
{
  $appointment=$day.'-'.$month.'-'.$year;
	return $appointment;
}

/*








////////insert function


////////// $sql is your qeury as string like $sql=	"INSERT INTO table1 ...."

function insert($sql){

	$conn=connect();  /////useing  connect() function
if ($conn->query($sql) === TRUE) {
    echo "<label id='good'>New record created successfully</label>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}








//////// retrive function



////////// $sql is your qeury as string like $sql = 'SELECT * ...."

function ret($sql){

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}else{
 return $query;
}

}





/////example for retrive data into table after calling ret function and get the result from the function return


<?php
		$no 	= 1;

		while ($row = mysqli_fetch_array($query))///////$query is the retun from ret function
		{

			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['cname'].'<a href=approve.php?id='.$row['id'].' >  <strong>Approve </strong></a>&nbsp;&nbsp;<a href=delete.php?id='.$row['id'].' >  <strong>Delete </strong></a></td>
					<td>'.$row['cgender'].'</td>
					<td>'.$row['pname'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['phone'].'</td>
					<td>'.$row['pgender'].'</td>


				</tr>';

			$no++;
		}?>*/


?>
