
<?php
// Include the database configuration file


if (isset($_COOKIE['PrivatePageLogin'])) {
		include 'functions.php';
	$instance = Database::getInstance();
$conn = $instance->getConnection();

	$sql = "SELECT password FROM patient WHERE id ='".$_COOKIE['id']."'";
	$usr=retriveData($sql);
	$usrrow = mysqli_fetch_array($usr);
	if(password_verify($usrrow['password'], $_COOKIE['PrivatePageLogin'])){


$statusMsg = '';

// File upload path

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

	$targetDir = "reports/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);



    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
			$sql="INSERT into medicalr (name,byWho,reportLink,patientid) VALUES ('".$_POST['name']."','".$_POST['byWho']."','".$fileName."','".$_COOKIE['id']."')";

            $insert = $conn->query($sql);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
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
    <title>Upload MY Report</title>

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
                    <h1>Upload MY Report</h1>
                    <a href="index.html">Home</a> <span>|</span> <a href="upload my reports.php">Upload MY Report</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
		<!-- Welcome Area Starts -->
    <section class="welcome-area section-padding">
        <div class="container">


		 <!-- the conetent -->

		<form action="" method="post" enctype="multipart/form-data">
    Select  File to Upload:
	<div>
			<label  for="form-username">Report Name</label>
			<input  type="text" name="name" placeholder="Report name..." >
	</div>
	<div>
			<label  for="form-username">Your Name</label>
			<input  type="text" name="byWho" placeholder="Your Name..." >
	</div>
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>



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

	  echo "You are not patient";
      exit;

   }

   }else {
	echo "You are not patient";
      exit;


}

	?>
