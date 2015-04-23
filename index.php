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
        <title>Chennai Talkies</title>		
		<!-- Meta Description -->
        <meta name="description" content="Movie Ticketing portal Vellore">
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

    </head>
	
    <body id="body">
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
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img  alt="Matinee">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="active"><a href="#body">Home</a></li>
						
						<li id='top'><a href="#login">Login/Register
							</a></li>
                        <li><a href="#contact">About us</a></li>
						<li><?php session_start();
							
							if(isset($_POST['login']))
								echo "Welcome ".$_SESSION['user'];
							else
								$_SESSION['user']="";?></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					
					<!-- end single slide -->
					
					<!-- single slide -->
					<div class="item active" style="background-image: url(img/banner.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Chennai<span> Talkies</span>!</h2>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">Live</span> Cinema</h3>
							<p data-wow-duration="500ms" class="wow slideInRight animated">We are Cinemaholics</p>
			
							
							<ul class="social-links text-center">
						
						<div class="col-lg-4 col-sm-4" style="padding-top:10px;">
			<?php
			$conn = mysqli_connect("localhost","root","","matinee");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			echo "<form method='post'>Select Movie:&nbsp";
				//$date=$_POST['bookdate'];
				$sql="select movName from movie";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					echo "<select name='movie' style ='color:black'>";
					while($row = $result->fetch_assoc()) {
					echo "<option value=". $row['movName'].">". $row['movName']."</option>";
					}
					echo "</select> <br/> <br/>";
				}
				else {
					echo "0 results";
				}
				// output data of each row
				echo "</div> <div class='col-lg-4 col-sm-4'>";
				echo " Select Date: <input type='date' name='bookdate' style='color:black'> </select> &nbsp;";
				echo "</div> <div class='col-lg-4 col-sm-4' style='padding-top:10px;'>";
				
				echo "<input type='submit' value='Go' name='findHall' style='width:150px;color:#000' href='book.php'> </form>";
				if(isset($_POST['findHall']))
				{	
					$_SESSION['movie']=$_POST['movie'];
					$_SESSION['movDate']=$_POST['bookdate'];
					
					header('Location:book.php');
					
				}
				
			?>
			</div>								
							</ul>
						</div>
					</div>
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
			
		</section>
		<section id="login">
			<div class="row">
				<div class="col-lg-6 col-sm-6">
			
				<div class="container">
			
			
			
			<form method='post'>
			<div align="center" id="login">
			<h1>Login</h1><br><br>

			Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="eamil" name="id" required placeholder="Enter a valid email address"><br><br>
			
			Password :<input type="password" name="pwd" required > <br><br></div>
			<div align="center"><input type="submit" value="LogIn" name="login">&nbsp;&nbsp;&nbsp;
			</div><br><br>
		</form>
		
	
		
		<?php
			$conn = mysqli_connect("localhost","root","","matinee");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			if(isset($_POST['login'])){
				$sql="Select * from user where email='".$_POST['id']."' AND pwd='".$_POST['pwd']."'";
				$res=mysqli_query($conn, $sql);
				
				if($res->num_rows>0){
					$row = $result->fetch_assoc();
					echo "ho gaya".$row['userid'];
					//echo ;
					$_SESSION['user']=$row['userid'];
					$_SESSION['flag']=1;
					echo $row['email'];
					
					/*if(strpos($_SESSION['user'], 'ajay kumar agrawal') !== false ){
						header('Location: admin.php');
						}
					else
						header('Location: index.php');*/
					
					}
				else{
					echo "Wrong Credentials";
					}
				
			}
			
			?>
			
			
			</div>
			</div>
		
		<div class="col-lg-6 col-sm-6" id='register'>
<div class ="container" >
			<form method='post'>
	<h1> Registration</h1><br/><br/>
	Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Name"><br/><br/>
	Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="email" name="email"  placeholder="Enter a valid email address"><br/><br/>
	Password : <input type="password" name="pwd"><br/><br/>
	<input type="submit" value="Register" name="register">&nbsp;&nbsp;
	<input type="submit" value="Cancel" name="Cancel">
	</form>
	<?php
			$conn = mysqli_connect("localhost","root","","matinee");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			if(isset($_POST['register'])){
				$sql1 = "INSERT INTO user(userid, pwd, email) VALUES ('".$_POST['Name']."','".$_POST['pwd']."','".$_POST['email']."')";
						echo($conn->error);
				if (mysqli_query($conn, $sql1)) {
					$e="NEW User- ".$_POST['Name']." added succesfully ";
					echo "<SCRIPT> alert('$e'); </SCRIPT>";
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				
				
			}
			if(isset($_POST['Cancel'])){
				header('Location: index.php');
				//$_Session['user']=$_POST['register'];
				//$_Session['pwd']=$_POST['pwd'];
				
				
			}
			ob_end_flush();
			?>
			</div>
		
		</div>
		</div>
		</section>
       	
		
		<section id="contact" class="contact">
			<div class="container">
			
			</div>
				<div class="row mb50" style="padding-top:20px;">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Find us on Google Maps</h2>
						<br/>

							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3890.03724175021!2d80.15301199999999!3d12.84087!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5259a58da799fb%3A0x6c36cf03722b3308!2sVIT+University!5e0!3m2!1sen!2sin!4v1428249368268" width="100%" height="600" frameborder="0" style="border:0"></iframe>
							
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Ajay Kumar Agrawal</p><p>6th Sem Final Project<br/>&nbsp;&nbsp;Vellore Institute of Technology , Chennai</div>
					
					<!-- contact address -->
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
							<h3>&nbsp;&nbsp;MCA 6th Sem, 2015</h3>
							<p>&nbsp;&nbsp;Vandalur, Kelambakkam Road,</p>
							<p> &nbsp;&nbsp;Chennai, Tamil Nadu 600127</p>
							<p>&nbsp;&nbsp;044 3993 1555</p>
						</div>
					</div>
					<!-- end contact address -->
					
					<!-- contact form -->
				<!--	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<h3>Connect with me.</h3>
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<input type="text" name="name" id="name" placeholder="Name" class="form-control">
									</div>
									<div class="input-field">
										<input type="email" name="email" id="email" placeholder="Email" class="form-control">
									</div>
								</div>
								<div class="input-group">
									<textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
								</div>
								<div class="input-group">
									<input type="submit" id="form-submit" class="pull-right" value="Send message">
								</div>
							</form>
						</div>
					</div>
					end contact form -->
					
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow11.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

					
				</div>
			</div>
			
			
			
		</section>
		
        <!--
        End Contact Us
        ==================================== -->
		
		
		
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

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
		<script type="text/javascript">

<form>
  Birthday:
  <input type="date" name="bday">
</form>
});
</script>
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
		
 
		
		
		
		
		
		
		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
			
		</script>
		
    </body>
</html>
