<!<!DOCTYPE html>
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
        <title>Chennai Talkies</title>		
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
			<?php
			session_start();
			$conn = mysqli_connect("localhost","root","","matinee");
			
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			echo "<div align='center'; class='text'>";
			$movName=$_SESSION['movie'];
			
			
			
			$sql="select * from shows S INNER JOIN movie M INNER JOIN  hall H where M.movName IN ('".$movName."') AND M.mid=S.mid AND H.hid=S.hid AND DATE(S.date)='".$_SESSION['movDate']."'";
				$result = mysqli_query($conn,$sql);
				echo "<form method='post'> ";
				echo "Select number of seats : <select name='seats' style ='color:black'> <option value='1'> 1 <option value='2'> 2 <option value='3'> 3 <option value='4'> 4 <option value='5'> 5  ";
				echo "</select><br/><br/>";
				echo "<h3>Please select A Hall</h3><br>";
				echo($conn->error);
				
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
					echo "<input type='radio' name='show' value=".$row['hid']."> Hall- ".$row['hname']." ..Movie- ".$row['movName']." ..Seats Left- ".$row['seats']."<br/></input>";
					}
					echo  "<br><input type='submit' name='book' value='Proceed to Payment' style='color:black'></form>";
				}
				else {
					echo "0 results";
				}
				if(isset($_POST['book'])){
					$sql1="select mid from movie where movName in ('".$movName."')";
					$result = mysqli_query($conn,$sql1);
					$row = $result->fetch_assoc();
					$_SESSION['booking']=$_POST['show'].$row['mid'].$_POST['seats'].$_SESSION['movDate'];
					$sql="update shows set seats= seats- ".$_POST['seats']." where hid='".$_POST['show']."' AND mid='".$row['mid']."' AND DATE(date)='".$_SESSION['movDate']."'";
					mysqli_query($conn,$sql);
					header('Location: payment.php');
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
