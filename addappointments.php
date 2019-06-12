<?php

if (isset($_COOKIE['PrivatePageCode'])){
		include 'functions.php';
	$conn=connect();

	$sql = "SELECT doctorC,labC,hospitalC FROM patient WHERE id ='".$_COOKIE['id']."'";
	$usr=retriveData($sql);
	$usrrow = mysqli_fetch_array($usr);
	if($usrrow['doctorC']== $_COOKIE['PrivatePageCode']||$usrrow['labC']== $_COOKIE['PrivatePageCode']||$usrrow['hospitalC']== $_COOKIE['PrivatePageCode']){
		if(isset($_POST['submit'])){

		if($_POST['name']&&$_POST['field']&&$_POST['day']&&$_POST['month']&&$_POST['year']){


			 $day=$_POST["day"];
  $month=$_POST["month"];
  $year=$_POST["year"];
$appointment=concate($day,$month,$year);
		if($usrrow['doctorC']==$_COOKIE['PrivatePageCode']){
			$sql2= "INSERT INTO doctor (name,field,appointment,patientid)
			VALUES ('".$_POST['name']."','".$_POST['field']."','".$appointment."','".$_COOKIE['id']."') ";
			insertData($sql2);

			}else if ($usrrow['hospitalC']==$_COOKIE['PrivatePageCode']){
			$sql2= "INSERT INTO Hdoctor (name,field,appointment,patientid)
			VALUES ('".$_POST['name']."','".$_POST['field']."','".$appointment."','".$_COOKIE['id']."') ";
			insertData($sql2);

			}else if ($usrrow['labC']==$_COOKIE['PrivatePageCode']){
				$sql2= "INSERT INTO lab (name,appointment,patientid)
			VALUES ('".$_POST['name']."','".$appointment."','".$_COOKIE['id']."') ";
			insertData($sql2);

			}else{

					echo "Bad Cookie.";
				  exit;
				}

		}

			}




 ?>
<!DOCTYPE html>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Page Title -->
    <title>Doctors</title>

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
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="styles.css">
	    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

  
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
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
 <?php  include"header.php"?>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->

	
	    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Add Appointments</h1>
                    <a href="index.html">Home</a> <span>|</span> <a href="addappointments.php">Add Appointments</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

	
		<!-- Welcome Area Starts -->
    <section class="welcome-area section-padding">
        <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-top text-center">
                            <h2>Add appointment</h2>
                            <p>Add appointment in term of day-month-year</p>
                        </div>
                    </div>

            </div>

          </div>
        </section>
        <form method="post" action="">
          <div class="form-group row">
            <label for="firstname" class="col-md-2">Appointment date<span>:</span> </label>
            <div class="col-md-2">
              <input type="text" class="form-control" name="day" placeholder="Day" required oninvalid="this.setCustomValidity('please fill this field')">
            </div>
            <div class="col-md-2">
              <input type="text" class="form-control"  name="month" placeholder="Month" required oninvalid="this.setCustomValidity('please fill this field')">
            </div>
            <div class="col-md-2">
              <input type="text" class="form-control"  name="year" placeholder="Year" required oninvalid="this.setCustomValidity('please fill this field')">
            </div>
          </div>


          <div class="form-group row">
            <label for="firstname" class="col-md-2">Doctor Details<span>:</span> </label>
            <div class="col-md-2">
              <input type="text" class="form-control" name="name" placeholder="Doctor Name " required oninvalid="this.setCustomValidity('please fill this field')">
            </div>

			            <div class="col-md-2">
              <input type="text" class="form-control" name="field" placeholder="Doctor field " required oninvalid="this.setCustomValidity('please fill this field')">
            </div>
          </div>


           <div class="row">


            <div class="offset-md-6">
              <button type="submit" class="btn btn-primary" name="submit">Add </button>
            </div>
          </div>
        </form>

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
          <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
          <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
          <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
    </html>




	<?php

}else{

	  echo "You are not Authrized";
      exit;

   }

   }else {
	echo "You are not Authrized";
      exit;


}

	?>
