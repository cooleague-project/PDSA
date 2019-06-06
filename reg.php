<?php
include 'functions.php';

$conn=connect();


if(isset($_POST['submit'])){
	
	
	if($_POST['name']&&$_POST['email']&&$_POST['username']&&$_POST['password']&&$_POST['age']&&$_POST['birthdate']){
			$Dcode=random_code($_POST['username'],"D");
			$Lcode=random_code($_POST['username'],"L");
			$DHcode=random_code($_POST['username'],"DH");
			$sql=	"INSERT INTO patient (username, password, name,email,doctorC,labC,hospitalC,age,birthdate) VALUES ('".$_POST['username']."','".password_hash($_POST['password'], PASSWORD_DEFAULT)."','".$_POST['name']."','".$_POST['email']."','".$Dcode."','".$Lcode."','".$DHcode."','".$_POST['age']."','".$_POST['birthdate']."')";

insert($sql);
	}else{
			echo 'enter the needed data';
		}
	
	
}



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
    <title>Registration</title>

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
                    <h1>Registration</h1>
                    <a href="index.html">Home</a> <span>|</span> <a href="reg.php">Registration</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
		<!-- Welcome Area Starts -->
    <section class="welcome-area section-padding">
        <div class="container">

		
		 <!-- the conetent -->
		
		      <div id="loginform" class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
								
                        			<h3>Register  to our site</h3>
                            		
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
							
                            <form id="myForm" role="form" action="" method="post" class="login-form">
			                    	<div id="usern" class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input id="user" type="text" name="username" placeholder="Username..." class="form-username form-control" required>
			                        </div>
									
			                        <div id="passw" class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input id="keypass" type="password" name="password" placeholder="Password..." class="form-password form-control" required>
			                        </div>
								
								<div id="usern" class="form-group">
			                    		<label class="sr-only" for="form-username">Your Name</label>
			                        	<input  type="text" name="name" placeholder="Your Name..." class="form-username form-control" required>
			                        </div>
									
									
								<div id="usern" class="form-group">
			                    		<label class="sr-only" for="form-username">Email</label>
			                        	<input  type="text" name="email" placeholder="Email..." class="form-username form-control" required>
			                        </div>
									
									
								<div id="usern" class="form-group">
			                    		<label class="sr-only" for="form-username">Age</label>
			                        	<input  type="text" name="age" placeholder="Age..." class="form-username form-control" required>
			                        </div>
									
									
								<div id="usern" class="form-group">
			                    		<label class="sr-only" for="form-username">Birthdate</label>
			                        	<input id="user" type="text" name="birthdate" placeholder="birthdate... like ****/**/**" class="form-username form-control" required>
			                        </div>
									<button name="submit" id="submit" type="submit" class="btn">Sign Up!</button>
									
			                        
			                    </form>
								
		                    </div>
		
		
		
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
	
