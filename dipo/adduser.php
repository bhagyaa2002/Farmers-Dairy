 <?php
session_start();
if(isset($_SESSION['dippo']))
{
$dippo=$_SESSION['dippo'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DIPO PAGE</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
   <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    
<style>
.fixed-button{
	visibility:hidden;
}
</style>
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
					<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<span>DIPPO</span>
							<div id="more-details"><i class="fa fa-chevron-down m-l-5"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="profile.php"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							
							<li class="list-group-item"><a href="logout.php"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="main.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Staff Details</span></a>
					    <ul class="pcoded-submenu">
					    <li><a href="addstaff.php">Addstaff</a></li>
					<li><a href="viewstaff.php">Viewstaff</a></li>  
					<li><a href="viewbank.php">Viewbank</a></li> 					
					<li> <a href="addsalary.php">AddSalary</a></li>
					<li><a href="viewsalary.php" >ViewSalary</a></li> 
			          </ul>
					</li>
					
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">User Details</span></a>
					    <ul class="pcoded-submenu">
                        <li> <a href="adduser.php">AddUser</a></li>
					<li><a href="viewuser.php" >ViewUser</a></li>  
					    </ul>
					</li>
						<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Milk Details</span></a>
					    <ul class="pcoded-submenu">
						    <li><a href="addmilkd.php">Add Milk Details</a></li>
							<li><a href="viewmilkd.php">View Milk Details</a></li>
					    </ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Facilities</span></a>
					    <ul class="pcoded-submenu">
						    <li><a href="food.php">Add Feed</a></li>
							<li><a href="viewfood.php">View Feed</a></li>
							<li><a href="medicines.php">Add Medicines</a></li>
							<li><a href="viewmedicines.php">View Medicines</a></li>
							<li><a href="doctors.php">Add Doctors</a></li>
							<li><a href="viewdoc.php">View Doctor</a></li>
					    </ul>
					</li>
                        <li class="nav-item">
					    <a href="viewfeedb.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">View feedback</span></a>
					</li>  
				</ul>
				
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="assets/images/67.png" width="190px" height="50px" class="logo">
						
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
						
						
					</ul>
					<ul class="navbar-nav ml-auto">
						
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										
										<span>DIPO</span>
										<a href="profile.php" class="dud-logout" title="Logout">
											<i class="feather icon-user"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="logout.php" class="dropdown-item"><i class="feather  icon-log-out"></i> Logout</a></li>
										
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Add User Details</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
		<?php
			include 'config.php';
			$sql1 = "SELECT userno from add_user";
			$result1 = mysqli_query($con,$sql1);
			$num1=mysqlI_num_rows($result1);
			
			if($num1 > 0)
			{ 
			while($row1 = mysqli_fetch_array($result1))
			{ 
			$userno=$row1[0];
			}
			}
			else
			{
				$userno="U000";
			}
			$userno++;
			?>
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    
                       <h5 class="mt-5">User Register</h5>
                        <hr>
                        <form class="needs-validation" action="#" method="post">
                            <div class="form-row">
                                <div class="col-md-5">
                                    <label for="validationCustom01">First name</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="First name" required>
                                    
                                </div>
                                <div class="col-md-5">
                                    <label for="validationCustom02">Last name</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="lname" placeholder="Last name" 
                                   option>
                                </div>
								<div class="col-md-2">
                                    <label for="validationCustom02">User Number</label>
                                    <input type="text" class="form-control" id="validationCustom03" name="userno" placeholder="User Number" value="<?php echo $userno; ?>" readonly />
                                    
                                </div>
                            </div>
							<div class="form-row">
							    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" option>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" option>
                                </div>
                            </div>
                            <div class="form-row">
							<div class="col-md-6 mb-6">
                                    <label for="validationCustom03">Phone Number</label>
                                    <input type="number" class="form-control" id="validationCustom03" name="phone_no" pattern="[0-9]{10}" placeholder="Phone number" required />
                                    
                                </div>
								<div class="col-md-6 mb-6">
                                <label for="inputAddress">Permanent Address</label>
                                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required />
                            </div>
							</div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity" name="city" placeholder="City" required />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" name="state"class="form-control">
                                        <option selected>select</option>
                                        <option>Karnataka</option>
										<option>Kerala</option>
										<option>Maharasthara</option>
										<option>Anadhra Pradesh</option>
										<option>Telangana</option>
										<option>TamilNadu</option>
										<option>West Bengal</option>
										<option>Gujarath</option>
										<option>Goa</option>
									</select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Pin Code</label>
                                    <input type="text" class="form-control" id="inputZip" name="pincode" placeholder="Pin code" required />
                                </div>
                            </div>
							<br>
							<h5 class="mt-5">Cattle Information</h5>
							<hr>
							<br>
							<div class="form-row">
                                <div class="col-md-3">
                                    <label for="validationCustom01">Number of cattles</label>
                                    <input type="number" class="form-control" id="validationCustom01" name="no_cattle" required />
                                    <div class="valid-feedback">
                                        Please enter number of cattles 
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputPassword">Insurance </label><br>
                                   <input type="radio" name="insurance" value="yes">
									<label for="html">Yes</label><br>
									<input type="radio"  name="insurance" value="no">
									<label for="css">No</label><br>
                                </div>
                               <div class="col-md-3">
                                    <label for="validationCustom01">Number of Insured Cattles</label>
                                    <input type="number" class="form-control" id="validationCustom01" name="no_insured_cattles" required />
                                    <div class="valid-feedback">
                                        Please enter number of insuranced cattles 
                                    </div>
                                </div>
                            </div>
							
                            <h5 class="mt-5">Bank Details</h5>
							<hr>
							<br>
							<div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Account Number</label>
                                    <input type="number" class="form-control" id="validationCustom01" name="accno" placeholder="Account number" required />
                                    <div class="valid-feedback">
                                        Please enter your account number
                                    </div>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="validationCustom02">IFSC Code</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="ifsc_code" placeholder="IFSC" required />
                                    <div class="valid-feedback">
                                         Please enter your IFSC Code
                                    </div>
                                </div>
                               
                            </div>
							
						 <div class="form-row">
								<div class="form-group col-md-6">
                                    <label for="inputState">Bank</label>
                                    <select id="inputState" name="bank" class="form-control" required>
                                        <option value="">select</option>
                                        <option>Karnataka Bank</option>
										<option>Canara Bank</option>
										<option>Syndicate Bank</option>
										<option>State Bank of India</option>
										<option>Coorperation Bank</option>
										<option>Bank of Baroda</option>
										<option>CA Bank</option>
										<option>Axis Bank</option>
								
									</select>
                                </div>
							</div>
                            <div class="form-row">
							 <div class="form-group col-md-2">
                            <button type="submit" name="save" class="btn  btn-primary">Register</button>
							</div>
							</div>
							<br>
    </div>
</div>
                        </form>
						
<?php
if(isset($_POST['save']))
{
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];

	$sql = "select * from add_user where email='$email' or phone_no='$phone_no'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		
		echo "<script>
				alert('There is an already exists this email address......');
			</script>";
			echo "<script> location.href='viewuser.php'; </script>";
	}
	else
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$userno=$_POST['userno'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$phone_no=$_POST['phone_no'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$pincode=$_POST['pincode'];
		$no_cattle=$_POST['no_cattle'];
		$insurance=$_POST['insurance'];
		$no_insured_cattles=$_POST['no_insured_cattles'];
		$accno=$_POST['accno'];
		$ifsc_code=$_POST['ifsc_code'];
		$bank=$_POST['bank'];

		$query = "insert into add_user(fname,lname,userno,email,password,phone_no,address,city,state,pincode,no_cattle,insurance,no_insured_cattles,accno,ifsc_code,bank,dippoid) values('".$fname."','".$lname."','".$userno."','".$email."','".$password."','".$phone_no."','".$address."','".$city."','".$state."','".$pincode."','".$no_cattle."','".$insurance."','".$no_insured_cattles."','".$accno."','".$ifsc_code."','".$bank."','".$dippo."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed...');
			</script>";
			echo "<script> location.href='viewuser.php'; </script>";
		}
	
}
?>
                      
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</body>

</html>
<?php
}
else
{
	echo "<script> location.href='../index.php'; </script>";
}	
?>