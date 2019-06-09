<header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +1 305 708 2563</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> medical@example.com</h6>
                        <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Find our Location</h6>
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.php"><img src="assets/images/logo/logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                       <?php




					   if (isset($_COOKIE['PrivatePageLogin'])) {
include_once 'functions.php';


$conn = connect();







	$sql = "SELECT password FROM patient WHERE id ='".$_COOKIE['id']."'";
	$usr=retriveData($sql);
	$usrrow = mysqli_fetch_array($usr);
	if(password_verify($usrrow['password'], $_COOKIE['PrivatePageLogin'])){

								    echo'<li class="menu-active"><a href="index.php">Home</a></li>

                        <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                                <li><a href="my reports.php">My Reports</a></li>
								<li><a href="retriveAppointments.php">My Appointments</a></li>
								<li><a href="retpresc.php">My Prescrtiption</a></li>
								<li><a href="my doctors.php">My Doctors</a></li>
								<li><a href="my labs.php">My Labs</a></li>
								<li><a href="my reports.php">my reports</a></li>
                                <li><a href="my surgery detials.php">My Surgery Detials</a></li>
								<li><a href="xray.php">XRay Scan</a></li>
								<li><a href="upload my reports.php">Upload My Reports</a></li>
								<li><a href="pationet codes.php">Pationet Codes</a></li>

                            </ul>
                        </li>

                        <li><a href="contact.php">Contact</a></li>
						<li><a href="logout.php">Logout</a></li>
                       ';

	}


					   }else if(isset($_COOKIE['PrivatePageCode'])){



						   include_once 'functions.php';


$conn = connect();







	$sql = "SELECT doctorC,labC,hospitalC FROM patient WHERE id ='".$_COOKIE['id']."'";
	$usr=retriveData($sql);
	$usrrow = mysqli_fetch_array($usr);
	if($usrrow['doctorC']==$_COOKIE['PrivatePageCode']){

								    echo'<li class="menu-active"><a href="index.php">Home</a></li>

                        <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                                <li><a href="add report.php">Add Report</a></li>
								<li><a href="addappointments.php">Add Appointments</a></li>
								<li><a href="addpresc.php">Add Prescrtiption</a></li>
								<li><a href="see the pationet history.php">See The Pationet History</a></li>

                            </ul>
                        </li>

                        <li><a href="contact.php">Contact</a></li>
						<li><a href="logout.php">Logout</a></li>
                       ';
	}else if ($usrrow['labC']==$_COOKIE['PrivatePageCode']){
								    echo'<li class="menu-active"><a href="index.php">Home</a></li>

                        <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                                  <li><a href="add report.php">Add Report</a></li>
								<li><a href="addappointments.php">Add Appointments</a></li>
								<li><a href="see the pationet history.php">See The Pationet History</a></li>

                            </ul>
                        </li>

                        <li><a href="contact.php">Contact</a></li>
						<li><a href="logout.php">Logout</a></li>
                       ';

	}else if ($usrrow['hospitalC']==$_COOKIE['PrivatePageCode']){
								    echo'<li class="menu-active"><a href="index.php">Home</a></li>

                        <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                                 <li><a href="add report.php">Add Report</a></li>
								<li><a href="addappointments.php">Add Appointments</a></li>
								<li><a href="addpresc.php">Add Prescrtiption</a></li>
								<li><a href="add surgery detials.php">Add Surgery Detials</a></li>
								<li><a href="see the pationet history.php">See The Pationet History</a></li>

                            </ul>
                        </li>

                        <li><a href="contact.php">Contact</a></li>
						<li><a href="logout.php">Logout</a></li>
                       ';

	}else{

		echo "Bad Cookie.";
      exit;
	}














					   }else{




						    echo'<li class="menu-active"><a href="index.php">Home</a></li>

                        <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                                <li><a href="about.php">about us</a></li>

								<li><a href="xray.php">XRay Scan</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.php">Contact</a></li>
						<li><a href="login.php">Login</a></li>
                        <li><a href="reg.php">register</a></li>	';



					   }


					  	?>
                    </ul>
                </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
