<?php

if (isset($_COOKIE['PrivatePageCode'])) {
		include 'functions.php';
	//$conn=connect();

	$sql = "SELECT doctorC,labC,hospitalC FROM patient WHERE id ='".$_COOKIE['id']."'";
	$usr=retriveData($sql);
	$usrrow = mysqli_fetch_array($usr);
	if($usrrow['doctorC']== $_COOKIE['PrivatePageCode']||$usrrow['hospitalC']== $_COOKIE['PrivatePageCode']||$usrrow['labC']== $_COOKIE['PrivatePageCode']){

		$sql = 'SELECT name,field,prescription
		FROM doctor   WHERE patientid="'.$_COOKIE['id'].'" AND prescription IS NOT NULL';

	$doctor=retriveData($sql);

		$sql = 'SELECT name,field,prescription
		FROM Hdoctor   WHERE patientid="'.$_COOKIE['id'].'" AND prescription IS NOT NULL';

	$Hdoctor=retriveData($sql);
		$sql = 'SELECT name,byWho,reportLink
		FROM medicalR   WHERE patientid="'.$_COOKIE['id'].'"';

	$medicalR=retriveData($sql);




	?>





















<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>See The Patient Profile</title>

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
                    <h1>See The Patient Profile</h1>
                    <a href="index.html">Home</a> <span>|</span> <a href="see the patient profile.php">See The Patient Profile</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
		<!-- Welcome Area Starts -->
    <section class="welcome-area section-padding">
        <div class="container">


		 <!-- the conetent -->


		<center>

	<h1>Doctors</h1>
	<table class="data-table">

		<thead>
			<tr>
			<th>Doctors Prescriptions</th>
			</tr>
			<tr>
				<th>NO</th>
				<th>Doctor NAME</th>
				<th>Doctor Field</th>
				<th>Doctor Prescriptions</th>

			</tr>


		</thead>
		<tbody>


<?php
		$no 	= 1;

		while ($Drow = mysqli_fetch_array($doctor))///////$query is the retun from ret function
		{

			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$Drow['name'].'</td>
					<td>'.$Drow['field'].'</td>
					<td>'.$Drow['prescription'].'</td>



				</tr>';

			$no++;
		}?>

		</tbody>
		</table>
		<table class="data-table">
				<thead>

										<tr>
				<th>Hospital's Doctors Prescriptions</th>
				</tr>
				<tr>
				<th>NO</th>
				<th>Doctor NAME</th>
				<th>Doctor Field</th>
				<th>Doctor Prescriptions</th>
				</tr>
		</thead>
            <tbody><tbody>
		<?php

			$no 	= 1;
		while ($HDrow = mysqli_fetch_array($Hdoctor))///////$query is the retun from ret function
		{

			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$HDrow['name'].'</td>
					<td>'.$HDrow['field'].'</td>
					<td>'.$HDrow['prescription'].'</td>



				</tr>';

			$no++;
		}?>

		</tbody>
		</table>
		<table class="data-table">
		<thead>
							<tr>

				<th>Reports</th>
				</tr>
								<tr>
							<th>NO</th>
				<th>Report NAME</th>
				<th>By Who </th>
				<th>Report Link</th>

				</tr>

		</thead>
		<tbody>


		<?php
		$no 	= 1;

		while ($medicalrow = mysqli_fetch_array($medicalR))///////$query is the retun from ret function
		{

			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$medicalrow['name'].'</td>
					<td>'.$medicalrow['byWho'].'</td>
					<td><a href="/reports/'.$medicalrow['reportLink'].'">Download the report</a></td>


				</tr>';

			$no++;
		}?>
		</tbody>

	</table>
</center>


		 <!-- the conetent -->



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

	  echo "You are not Doctor";
      exit;

   }

   }else {
	echo "You are not Doctor";
      exit;


}

	?>
