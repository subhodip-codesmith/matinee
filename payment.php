<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>PAYMENT</title>		
		<!-- Meta Description -->
        <meta name="description" content="Ajay Kumar Agrawal">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Ajay Kumar Agrawal">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">


		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
		<style>
		.backimg{
			background-image: url("img/banner.jpg");
			
			
		}
		.text{
			color:#fff;
			
		}
		
		</style>
    </head>
	
    <body id="body" class="backimg">
	<?php
		ob_start();
	?>
		<!-- preloader -->
		<div id="preloader">
			<img src="img/preloader.gif" alt="Preloader">
		</div>
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="index.php">
						<h1 id="logo">
							<img  alt="Matinee">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                
				<!-- /main nav -->
				
            </div>
        </header>
		
		
		
			<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>
			
			<style>
			
			.container{
				
				width:80%;
				margin:0px auto;
				padding:20px auto;
				
			}
			</style>
			<div class="row" style="padding:100px;">
			
			
			<div class ="container" align="center">
						
			</div>
			<div class="row" style="padding:30px;">
			<form action="">
									
				<div class="row">
				<h1 class="text" align="center">Select your bank </h1><br>
					<div class="col-lg-3 col-sm-3">
						<input type="radio" name="sex" value="male"><img src="img/sbi.gif" alt ="img" height="150px;" width="200px" class="thumbnail"><br>
						</div>
						<div class="col-lg-3 col-sm-3">
						<input type="radio" name="sex" value="male"><img src="img/indian.jpg" alt ="img" height="150px;" width="200px" class="thumbnail"><br>
						</div>
						<div class="col-lg-3 col-sm-3">
						<input type="radio" name="sex" value="male"><img src="img/icici.jpg" alt ="img" height="150px;" width="200px" class="thumbnail"><br>
						</div>
						<div class="col-lg-3 col-sm-3">
						<input type="radio" name="sex" value="male"><img src="img/hdfc.jpg" alt ="img" height="150px;" width="200px" class="thumbnail"><br>
						</div>
					</div>
			</form>
				<h1 class="text" align="center">Fill your details </h1><br>
			<?php
			session_start();
			$conn = mysqli_connect("localhost","root","","matinee");
			
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			echo "<div align='center';>";
			echo "<form method='post'>";
			/*echo "<input type='radio' name='seatType' value='GOLD_Rs200'>";
			echo "<input type='radio' name='seatType' value='Silver_Rs100'>";*/
			echo "Name of CardHolder: <input type='text' name='cardholder' size='30'><br/><br/>";
			echo "Card Number: <input type='number' name='cardnumber'><br/><br/>";
			echo "Expiry Date: <input type='number' name='expirymonth' min='1' max='12'> &nbsp;&nbsp;<input type='number' name='expiryyear' min='2015' max='2025'><br/><br/>	";
			echo "CVV: <input type='password' name='cvv' min='0' max'999'><br/><br/>";
			echo "<input type='submit' value='Confirm Payment' name='Confirm'>&nbsp; &nbsp";
			echo "<input type='submit' value='Cancel' name='Cancel'>";
			echo "</form>";
			
				if(isset($_POST['Confirm'])){
					//$sql="update shows set seats"
					header('Location: confirm.php');
				}
				if(isset($_POST['Cancel'])){
					//$sql="update shows set seats"
					header('Location: index.php');
				}
				ob_end_flush();
		?></div>
			</div>
			</div>
			
			

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="js/custom.js"></script>
		
		
		
 
 
    </body>
</html>
