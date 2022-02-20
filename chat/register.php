<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Discussion instanstée</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style1.css">
	<style type="text/css">
		hr{
			height: 2px;
		}
		#main{
          margin-top: 60em;
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
		<div class="main add " id="main">
			<h2  align="center"><font color="#E32F75">Rèseau gestion_alumni alumni</font></h2>
				<hr color="#E32F75">
			      	<div class="panel panel-success">
						<div class="panel-heading" align="center">
							Inscription au gestion_alumni
						</div>
						<div class="panel-body">
							<form method="POST" action="register.php">
								<label>Nom complet</label>
								<input type="text" name="name" placeholder="nom complet" class="form-control">
								<label>Email</label>
								<input type="text" name="email" placeholder="Adresse email" class="form-control">
								<label>Adresse</label>
								<input type="text" name="country" placeholder="Votre Adresse" class="form-control">
								<label>Genre</label>
								<span style="margin-left: 40px; margin-right: 5px"> Masculin </span> <input type="radio" name="gender" value="Masculin"  style="margin-right: 15px;">
								Féminin <input type="radio" name="gender" value="Féminin" style="margin-left: 5px;"><br>
								<label>Mot de passe</label>
								<input type="password" name="password" placeholder="Password" class="form-control">
						</div>
						<div class="panel-footer">
							<button type="submit" class="btn btn-success" name="Submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;s'inscrire </button>
							<button type="reset" class="btn btn-danger" style="float: right;"> <span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;Annuler</button>
						</div>
						<div class="panel-footer">
							<div align="center">
								Dèjà un compte ? <a href="login.php"><font color="green"><b>Se connecter</b></a>
							</div>
						</div>
					  </form>
					</div>
				</div>
				
		</div>
	</div>


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

<?php

if (isset($_POST['Submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];

	$query = "INSERT INTO user SET name='$name', email='$email', country='$country', gender='$gender', password='$password', status='0' ";
	$run = mysqli_query($con, $query);
	if ($run) {
		header('location: login.php');
	}
	else{
		echo "Error Occured";
	}
}