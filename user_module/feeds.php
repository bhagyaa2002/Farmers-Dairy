<?php
session_start();
if(isset($_SESSION['user1']))
{
$dippo=$_SESSION['user1'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FARMER'S DAIRY</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/about.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     
	 <style> 
img {
  width: 270px;
  border: 1px solid black;
  height:400px;
  margin-right: 30px;   /* Horizontal Space */
  margin-bottom: 30px;  /* Vertical Space */
  border: 2px solid black;
 }
 
  
.m_tag
{
	margin-top:10px;
}

</style>
  </head>
<body>

<section id="header" class="clearfix cd-secondary-nav">
	<nav class="navbar nav_t">
		<div class="container">
		    <div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  	 <ul class="nav navbar-nav">
				<li><img src="img/logo1.png" height="50px" class="iw" alt="img25"></li>
				<li><a class="m_tag" href="home.php">Home</a></li>
				<li><a class="m_tag " href="about.php">About</a></li>
				<li><a class="m_tag" href="services.php">Services</a></li>
				<li><a class="m_tag" href="needs.php">Cattle Needs</a></li>
				<li><a class="m_tag" href="bill.php">Bill Details</a></li>
				<li><a class="m_tag" href="contact.php">Feedback</a></li>
				
			</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	</section>
	
<section id="center" class="center_o clearfix">
 <div class="container">
   <div class="row">
       <div class="serv_h1 text-center clearfix">
     <div class="col-sm-12">
	  <h2 class="col_4">Cattle Needs</h2>
	  <hr class="hr_1">
	  <p>We provide good nutritions and medicines to the cow </p>
	 </div>
   </div>
   </div>
  </div>
</section>

<section id="team_h">
 <div class="container">
  <div class="row">
   <div class="team_h1 clearfix">
   
   <?php
								include 'config.php';
								$sql1="select * from add_food";
								$result1=mysqli_query($con,$sql1);
								$num1=mysqli_num_rows($result1);
								$sI=0;
								if($num1>0)
								{
									while($row1=mysqli_fetch_array($result1))
									{
										$sI+=1;
										$f_id=$row1[0];
										$name=$row1['name'];
										$description=$row1['description'];
										$rate=$row1['rate'];
										
										
								?>
    <div class="col-sm-3 space_left">
	 <div class="team_h2i clearfix">
		<div class="team_h2i1 clearfix">
			<div class="grid clearfix">
		         <figure class="effect-jazz">
			          <a href="#"><img src="img/m2.jpg" class="iw" alt="img25" ></a>
		           </figure>
	          </div>
			</div>
			<div class="team_h2i2 text-center clearfix" style=" border: 2px solid black;">
				<h4 class="mgt"><?php echo $sI; ?></h4>
				<h5><?php echo $name; ?></h5>
				<h6><?php echo $description; ?></h6>
				<h6><?php echo $rate; ?></h6>
			</div>
		</div>
	</div>
	<?php
	}
	}
	?>


	</div>
  </div>
 </div>
</section>

<section id="footer">
 <div class="container">
  <div class="row">
   <div class="footer_1 clearfix">
	 <div class="col-sm-4 space_left">
	  <div class="footer_1i clearfix">
	    <h2 class="mgt big"><img src="img/logo1.png" height="50px" class="iw" alt="img25"></h2>
		<p class="col_3">To facilitate rural development by providing opportunities for self-employement along with providing opportunity for steady income at village level </p>
		 
	  </div>
	 </div>
	 <div class="col-sm-3 space_left">
	  <div class="footer_1i1 clearfix">
	   <h4 class="col mgt">Contact Us</h4>
	   <hr class="hr_1 mgl">
	   <p class="col_3"><i class="fa fa-map-marker col_1"></i>Periyadka,puttur Taluk</p>
	   <p class="col_3"><i class="fa fa-phone col_1"></i> (+91) 8236945578</p>
	   <p class="col_3"><i class="fa fa-envelope col_1"></i>amruthsangham@gmail.com</p>
	   <p class="col_3"><i class="fa fa-clock-o col_1"></i> Morning (07AM - 09AM)<br> Evening (3:30PM - 05:30PM)</p>
	  </div>
	 </div>
	 
	 <div class="col-sm-3 space_left">
	  <div class="footer_1i1 clearfix">
	   <h4 class="col mgt">Queries</h4>
	   <hr class="hr_1 mgl">
	   <p class="col_3">For more queries contact us</p>
       
	  </div>
	 </div>
   </div>
  </div>
 </div>
</section>

<script>
$(document).ready(function(){
	/*****Fixed Menu******/
	var secondaryNav = $('.cd-secondary-nav'),
	   secondaryNavTopPosition = secondaryNav.offset().top;
	   navbar_height = document.querySelector('.navbar').offsetHeight;
	   
		$(window).on('scroll', function(){
		    if($(window).scrollTop() > secondaryNavTopPosition + navbar_height ) {
				secondaryNav.addClass('is-fixed');	
				document.body.style.paddingTop = navbar_height + 'px';
				
			} else {
				secondaryNav.removeClass('is-fixed');
				document.body.style.paddingTop = '0'
			}
		});	
		
});
</script>

<script>
	$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
	}
});
</script>

</body>
 
</html>
<?php
}
else
{
	echo "<script> location.href='../index.php'; </script>";
}	
?>
