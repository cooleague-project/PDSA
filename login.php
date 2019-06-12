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
    <title>Login</title>

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
                    <h1>Login</h1>
                    <a href="index.html">Home</a> <span>|</span> <a href="about.html">Login</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
	<!-- Welcome Area Starts -->
    <section class="welcome-area section-padding">
        <div class="container">
	

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>PDSA-  Login </h1>
                            <div class="description">

                            </div>
                        </div>
                    </div>
					
                    <div class="row">
					<video style="width:0%; visibility:hidden;" id="preview"></video>
					<br><center><button style="width:0%; visibility:hidden;" id="backk" onclick="back()" class="btn">Back</button></center>
                        <div id="loginform" class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
								
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
							
                            
									<button onclick="location.href='loginp.php';" class="btn">Patient Sign in</button>
									<button onclick="location.href='loginc.php';" class="btn">Code Sign in</button>
			                        
			                  
								
		                    </div>
                        </div>
                    </div>
                   
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