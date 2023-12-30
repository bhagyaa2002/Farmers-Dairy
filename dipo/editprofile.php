	<!DOCTYPE html>
<html>
<head>

<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");
body {
	box-sizing: border-box;
	background: #f2f2f2;
	font-family: "Roboto", sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
}

.container {
	background: #fff;
	width: 100%;
	padding: 1rem;
}

.title {
	font-size: 24px;
	line-height: 28px;
	font-weight: bold;
	color: #374151;
	padding-bottom: 11px;
	border-bottom: 1px solid #d7dbdf;
}

.form-group {
	margin-top: 25px;
	display: flex;
	flex-direction: column;
}

.textarea-group label,
.form-group label {
	color: #374151;
	font-size: 16px;
	line-height: 19px;
	margin-bottom: 10px;
}

.form-group [type],
.textarea-group textarea {
	border: 1px solid #d2d6db;
	border-radius: 6px;
	padding: 15px;
}
.form-group [type]:hover,
.textarea-group textarea:hover {
	border-color: #a8afb9;
}
.form-group [type]:focus,
.textarea-group textarea:focus {
	border-color: #5850eb;
}

.textarea-group {
	margin-top: 24px;
}

.textarea-group textarea {
	resize: none;
	width: 100%;
	margin-top: 10px;
	height: calc(100% - 59px);
}

.checkbox-group {
	margin-top: 25px;
}

.checkbox-group label {
	display: flex;
}

.checkbox-group label::before {
	content: "\0020";
	display: flex;
	align-items: center;
	justify-content: center;
	width: 16px;
	height: 16px;
	margin-right: 8px;
	border: 1px solid #d2d6db;
	border-radius: 6px;
	transition: background 0.1s ease-in;
}

.checkbox-group input[type="checkbox"] {
	/* ici on ne doit pas mettre de display: none afin de pouvoir "tabber" */
	position: absolute;
	width: 1px;
	height: 1px;
	padding: 0;
	margin: -1px;
	overflow: hidden;
	clip: rect(0, 0, 0, 0);
	border: 0;
}
.checkbox-group input[type="checkbox"]:focus + label:before {
	border-color: #5850eb;
}
.checkbox-group input[type="checkbox"]:checked + label:before {
	color: #fff;
	content: "\2713";
	background: #5850eb;
	border-color: #5850eb;
}

.button {
	font-weight: bold;
	line-height: 19px;
	background: #5850eb;
	border: none;
	padding: 15px 25px;
	border-radius: 6px;
	color: white;
	width: 100%;
	margin-top: 24px;
}
.button:hover {
	background: #6e67ee;
}
.button:focus {
	background: #4239e8;
}

@media screen and (min-width: 768px) {
	body {
		align-items: center;
		justify-content: center;
	}

	.container {
		margin: 2rem;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
		border-radius: 4px;
		max-width: 32rem;
		padding: 2rem;
	}
}
@media screen and (min-width: 1024px) {
	.container {
		max-width: 80%;
		width: 100%;
	}

	.checkboxes {
		display: flex;
	}
	.checkboxes > :not(:first-child) {
		margin-left: 1rem;
	}

	.grid {
		display: grid;
		grid-gap: 24px;
		grid-template-columns: 1fr 1fr 1fr;
		grid-auto-rows: 1fr;
	}

	.email-group {
		grid-column: 1;
		grid-row: 2;
	}

	.phone-group {
		grid-column: 2;
		grid-row: 2;
	}

	.textarea-group {
		grid-column: 3;
		grid-row: span 2;
		margin-right: 2rem;
	}

	.button-container {
		text-align: right;
	}

	.button {
		/* bon, bon, bon
		c'est pas tout mais j'ai faim moi ^^
		*/
		width: auto;
	}
}

</style>
</head>
<body>

<div class="container">

	<h1 class="title">Edit Profile</h1>

	<div class="grid">
		<div class="form-group a">
			<label for="name">Name</label>
			<input id="name" type="text">
		</div>

		<div class="form-group b">
			<label for="first-name">Designation</label>
			<input id="first-name" type="text">
		</div>

		<div class="form-group email-group">
			<label for="email">Email</label>
			<input id="email" type="text">
		</div>

		<div class="form-group phone-group">
			<label for="phone">Phone Number</label>
			<input id="phone" type="text">
		</div>

		
		<div class="form-group">
			<label for="address">Address</label>
			<input id="address" type="text">
		</div>

		<div class="form-group">
			<label for="city">City</label>
			<input id="city" type="text">
		</div>

		<div class="form-group">
			<label for="zip">PinCode</label>
			<input id="zip" type="text">
		</div>
	</div>

	<div class="checkboxes">
   <div class="button-container">
		<button class="button">Submit</button>
	</div>
</div>
<div class="row">
             <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    
                     
                        <hr>
						<?php
						if(isset($_GET['edid']))
							{
								$eid=$_GET['edid'];
								include 'config.php';
								$sql1 = "select * from d_profile where p_id='".$eid."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$p_id=$row1[0];
								$name=$row1['name'];
								$designation=$row1['designation'];
								$address=$row1['address'];
								$email=$row1['email'];
								$ph_no=$row1['ph_no'];
								
								$city=$row1['city'];
								$pincode=$row1['pincode'];
								}	
								?>
								<form action="#" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="validationCustom01">Name</label>
                                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" id="validationCustom01" placeholder="Name" required>
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02">Designation</label>
                                    <input type="text" name="designation" value="<?php echo $designation; ?>" class="form-control" id="validationCustom02" placeholder="designation" option>
                                    
                                </div>
							</div>
							<div class="col-md-6 mb-6">
                                <label for="inputAddress">Permanent Address</label>
                                <input type="text"  name="address" value="<?php echo $address; ?> "class="form-control" id="inputAddress" placeholder="address">
                            </div>
							<div class="col-md-6 mb-6">
                                <label for="inputAddress">Email</label>
                                <input type="text"  name="email" value="<?php echo $email; ?> "class="form-control" id="inputAddress" placeholder="email">
                            </div>
                            <div class="form-row">
							<div class="col-md-6 mb-6">
                                    <label for="validationCustom03">Phone Number</label>
                                    <input type="number" name="ph_no" value="<?php echo $ph_no; ?>"class="form-control" id="validationCustom03" placeholder="Phone number" required>
                                    <div class="valid-feedback">
                                        Please enter your phone number
                                    </div>
                                </div>
								
							</div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" name="city" value="<?php echo $city; ?>  "class="form-control" id="inputCity"  placeholder="City">
                                </div>
                                
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Pin Code</label>
                                    <input type="text"  name="pincode" value="<?php echo $pincode; ?>  "class="form-control" id="inputZip"  placeholder="Pincode">
                                </div>
                            </div>
							
                            <div class="form-row">
							 <div class="form-group col-md-2">
                            <button type="submit" name="update" class="btn  btn-primary">Submit</button>
							</div>
							</div>
						</form>
						<?php
								}
							}
							
if(isset($_POST['update']))
{
	error_reporting(1);
	include("config.php");
		
		$name=$_POST['name'];
		$designation=$_POST['designation'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$ph_no=$_POST['ph_no'];
		
		$city=$_POST['city'];
		$pincode=$_POST['pincode'];
		
		$query = "update d_profile set name='".$name."',designation='".$designation."',address='".$address."',email='".$email."',ph_no='".$ph_no."' ,city='".$city."' ,pincode='".$pincode."' where p_id='".$eid."'";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
			
		echo "<script>
				alert('Updated Successfully...');
			</script>";
			echo "<script> location.href='profile.php'; </script>";
			
}
?>
</div>
				</div>
			</div>
							
</body>
</html>
