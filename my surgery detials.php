<?php

if (isset($_COOKIE['PrivatePageLogin'])) {
		include 'functions.php';
	$conn=connect();

	$sql = "SELECT password FROM patient WHERE id ='".$_COOKIE['id']."'";
	$usr=retriveData($sql);
	$usrrow = mysqli_fetch_array($usr);
	if(password_verify($usrrow['password'], $_COOKIE['PrivatePageLogin'])){

	$sql = 'SELECT name,field,surgeryTestTime,surgeryTests
		FROM Hdoctor WHERE patientid="'.$_COOKIE['id'].'"';

	$doctors=retriveData($sql);
	?>



<!DOCTYPE html>

<head>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>My Surgery Detials</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">


<link rel="stylesheet" href="ret.css" />
</head>
<body>


    <div class="preloader">
        <div class="spinner"></div>
    </div>

	    <!-- Header Area Starts -->
    <?php  include"header.php"?>

    <!-- Header Area End -->

		<!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>My Surgery Detials</h1>
                    <a href="index.html">Home</a> <span>|</span> <a href="my surgery detials.php">My Surgery Detials</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
		<!-- Welcome Area Starts -->
    <section class="welcome-area section-padding">
        <div class="container">

<center>

	<h1>My Surgery Detials</h1>
	<table class="data-table">
		<caption class="title">My Surgery Detials DB</caption>
		<thead>
			<tr>
				<th>NO</th>
				<th>Doctor NAME</th>
				<th>Doctor Field</th>
				<th>Surgery Date</th>
				<th>Surgery Tests</th>

			</tr>
		</thead>
		<tbody>
<?php
		$no 	= 1;

		while ($Drow = mysqli_fetch_array($doctors))///////$query is the retun from ret function
		{

			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$Drow['name'].'</td>
					<td>'.$Drow['field'].'</td>
					<td>'.$Drow['surgeryTestTime'].'</td>
					<td>'.$Drow['surgeryTests'].'</td>



				</tr>';

			$no++;
		}?>
		</tbody>

	</table>
</center>
  </div>
    </section>
	  <!-- Welcome Area End -->
	    <!-- Footer Area Starts -->
     <?php  include"footer.php"?>
    <!-- Footer Area End -->
	<!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>




<?php

}else{

	  echo "You are not patient";
      exit;

   }

   }else {
	echo "You are not patient";
      exit;


}

	?>
