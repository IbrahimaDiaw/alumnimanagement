<?php
$conn = mysqli_connect("localhost", "root", "", "gestion_alumni");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rèseau chat alumni</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style1.css">
	<meta charset="utf-8">

	<style type="text/css">
		hr{
			height: 2px;
		}
	</style>

</head>
<body style="background-color: #F0EEEE">
<!-- Slider -->
<div class="slider" id="home">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top1">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8  slider-info-txt">
								<h2></h2>
								<div class="w3ls-button">
									
								</div>
								
							</div>
							<div class="col-md-4">
							
							</div>
						</div>
					</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts-banner-top">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8 slider-info-txt">
								<h2></h2>
								<div class="w3ls-button">
									
								</div>
								
							</div>
							<div class="col-md-4">
							
							</div>
						</div>
					</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top3">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8 slider-info-txt">
								<h2></h2>
								<div class="w3ls-button">
									
								</div>
								
							</div>
							<div class="col-md-4">
								
							</div>
						</div>
					</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="clearfix"></div>
	<div class="main add">
			<h3  align="center"><font color="#E32F75">Rèseau alumni</font></h3>
				<hr color="#E32F75">
				<form method="post" action="">
					<div class="panel panel-success">
						<div class="panel-heading" align="center" style="color:white;"> Connexion formulaire </div>
						<div class="panel-body">
							<div class="form-group">
									<input type="text" name="email" placeholder="Adresse email" class="form-control">
							</div>
							<div class="form-group">
									<input type="password" name="password" placeholder="mot de passe" class="form-control">
							</div>
							<div class="form-group" align="center">
								<button type="submit" class="btn btn-success" name="Submit"> Connexion
                               </button>
							</div>

						</div>
						<div class="panel-footer">
							<?php
            if (isset($_GET['error'])) 
							{
		    echo "<font color='red'><p align='center'><b>".@$_GET['error']. "</b></p>";
							} 
			if (isset($_GET['logout'])) 
							{
		    echo "<font color='green'> <p align='center'><b>".@$_GET['logout']. "</b></p>";
							} 

			if (isset($_POST['Submit'])) {
			    
			    $email = $_POST['email'];
			    $password = $_POST['password'];

				$result = mysqli_query($conn , "SELECT * from user where email='$email' and password='$password'");
					while($row = mysqli_fetch_assoc($result))
					{
						$_SESSION['email'] = $row['email'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['name'] = $row['name'];
					}
					if(mysqli_num_rows($result)>0){			
						$query = mysqli_query($conn, "UPDATE user SET status = '1' WHERE email = '$email' ");
						header('location: index.php');
						}
					else {
						echo "<font color='red'><p align='center' style='color:red'>Adresse email ou mot de passe incorrect</p>";
						}	
                          }

                          ?>
						</div>
						<div class="panel-footer">
							<div align="center" style="color: white">
							  Vous n'avez pas de compte ? <a href="register.php"><font color="red"><b>S'inscrire ici</b></font></a>
							</div>
						</div>
					</div>
				</form>
		</div>
</div>
<!-- //Slider -->
	<div class="container">
		<div class="row" style="margin-top: 50px">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

	<script type="text/javascript" src="js/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	

<!-- start-smoth-scrolling -->
<script src="js/js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/js/move-top.js"></script>
<script type="text/javascript" src="js/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- start-smoth-scrolling -->
	<script src="js/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager:false,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>

</body>
</html>
