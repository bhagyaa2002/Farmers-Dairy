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
                            <h5 class="m-b-10">Add Milk Details</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    
                       <h5 class="mt-5">Milk Details</h5>
                        <hr>
                        <form class="needs-validation" action="#" method="post" >
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="validationCustom01">User Number</label>
                                    <select class="form-control" name="uno" required>
									<option selected>Select User No</option>
									<?php
								include 'config.php';
								$sql1="select * from add_user where dippoid='$dippo'";
								$result1=mysqli_query($con,$sql1);
								$num1=mysqli_num_rows($result1);
								$sI=0;
								if($num1>0)
								{
									while($row1=mysqli_fetch_array($result1))
									{
										$sI+=1;
										$id=$row1[0];
										$userno=$row1['userno'];
								?>
									<option value="<?php echo $userno; ?>"><?php echo $userno; ?></option>
									<?php
									}
								}
								?>
                                    </select>
                                </div>
								<div class="form-group col-md-2">
								<label for="validationCustom01">&nbsp;</label>
                                <button type="submit" name="search" class="form-control btn btn-primary ">Search</button>
								</div>
							</form>
							<?php
							if(isset($_POST['search']))
							{
								$uno=$_POST['uno'];
								
								include 'config.php';
								$sql1="select * from add_user where userno='".$uno."'";
								$result1=mysqli_query($con,$sql1);
								$num1=mysqli_num_rows($result1);
								$sI=0;
								if($num1>0)
								{
									while($row1=mysqli_fetch_array($result1))
									{
										$sI+=1;
										$id=$row1[0];
										$userno=$row1['userno'];
										$fname=$row1['fname'];
										$lname=$row1['lname'];
										$phoneno=$row1['phone_no'];
										$email=$row1['email'];
										$accno=$row1['accno'];
										$ifsc_code=$row1['ifsc_code'];
								?>
                            <div class="col-md-6">
                                    <p for="validationCustom" style="text-align:right;font-weight:900">User Name: <?php echo $fname;?>&nbsp;<?php echo $lname; ?>
									<br>User Phone:<?php echo $phoneno; ?>
									<br>Email: <?php echo $email; ?>
									<br>Account No: <?php echo $accno; ?>
									<br>IFSC: <?php echo $ifsc_code; ?></p>
                                </div>
								<?php
									}
								}
							}
				?>
								
                            </div>
							<form class="needs-validation" novalidate action="#" method="post" >
							<div class="form-row">
							    <div class="form-group col-md-4">
                                    <label for="inputEmail4">Date</label>
                                    <input type="date" class="form-control" value="<?php print(date("Y-m-d"));?>" name="date" >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputPassword">Time</label><br>
                                   <input type="radio" name="time" value="Morning">
									<label for="html">Morning</label><br>
									<input type="radio" name="time" value="Evening">
									<label for="css">Evening</label><br>
                                </div>
								<div class="form-group col-md-2">
                                    <label for="inputEmail4">FAT</label>
                                    <select class="form-control" name="fat">
									<option></option>
									</select>                              
								</div>
								<div class="form-group col-md-2">
                                    <label for="inputEmail4">SNF</label>
                                    <select class="form-control" name="snf">
									<option></option>
									</select>
                                </div>
								
								<div class="form-group col-md-2">
                                    <label for="inputEmail4">Liter</label>
                                    <input type="number" min="1" class="form-control" name="liter">
                                </div>
								
                            </div>
							<div class="form-row">
							<div class="form-group col-md-2">
                            <button type="submit" name="add" class="btn  btn-primary ">Add</button>
							</div>
							</div>
							</form>
							
							
							<?php
if(isset($_POST['add']))
{
	error_reporting(1);
	include("config.php");
	
	
	$sql = "select * from add_milk";
	$result = mysqli_query($con,$sql);
	$count = mysqlI_num_rows($result);


	
	
		$name=$_POST['name'];
		
		$user_no=$_POST['user_no'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$fat=$_POST['fat'];
		$snf=$_POST['snf'];
		$liter=$_POST['liter'];
		
		
		$query = "insert into add_milk(name,user_no,date,time,fat,snf,liter) values('".$name."','".$user_no."','".$date."','".$time."','".$fat."','".$snf."','".$liter."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('added successfully...');
			</script>";
			echo "<script> location.href='viewmilkd.php'; </script>";
		
	
}
?>

                        </div>
					</div>
				</div>
				
			<div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Recently Added Milk Details</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
									    <th>Sl.No</th>
                                        <th>Name</th>
                                        <th>User number</th>
										<th>Date</th>
										<th>Time </th>
										<th>FAT </th>
										<th>SNF</th>
										<th>Liter</th>
										<th>Amount</th>
                                    </tr>    
										
                                </thead>
                                <tbody>
								<?php
								include 'config.php';
								$sql1="select * from add_milk";
								$result1=mysqli_query($con,$sql1);
								$num1=mysqli_num_rows($result1);
								$sI=0;
								if($num1>0)
								{
									while($row1=mysqli_fetch_array($result1))
									{
										$sI+=1;
										$am_id=$row1[0];
										$name=$row1['name'];
										$user_no=$row1['user_no'];
										$date=$row1['date'];
										$time=$row1['time'];
										$fat=$row1['fat'];
										$snf=$row1['snf'];
										$liter=$row1['liter'];
										$amount=$row1['amount'];
								}}
								?>
                                    <tr>
										<td><?php echo $sI; ?></td>
										<td><?php echo $name; ?></td>
										<td><?php echo $user_no; ?></td>
										<td><?php echo $date; ?></td>
										<td><?php echo $time; ?></td>
										<td><?php echo $fat; ?></td>
										<td><?php echo $snf; ?></td>
										<td><?php echo $liter; ?></td>
										<td><?php echo $amount; ?></td>
										
                                     </tr>
									 <tr>
									 <td colspan="8">
									 <div class="form-group col-md-2">
							<a href="printbill.php"> 
                            <button type="submit" name="bill" class="btn  btn-primary">Bill</button></a>
							</div></td></tr>
                                </tbody>
                            </table>
						</div>
                    </div>
                </div>
            </div>
		  </div>
      </div>
</section>

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