<?php 
include 'session.php';

$msg = (isset($_GET['error'])) ? "Le nom d'utilisateur ou le mot de passe est incorrect" : "";

?>









<!DOCTYPE HTML>
<html>
<head>
<title>Espace alumni connexion</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page">ESPACE ALUMNI</h2>
													    <div class="login">
													    	<P style="color: blue;">Bienvenue cher alumnus veuillez remplir le formulaire pour accéder à votre compte</P>
														<h3 class="inner-tittle t-inner" style="color: blue; font-family: georgia;">Login</h3>
																<div class="buttons login">
																	  <p style="color: red;"><?=$msg?></p>
																			<ul>
																				<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
																				<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
																				<div class="clearfix"></div>
																			</ul>
																		</div>
																<form method="post" action="session.php">
																		<input type="text" class="text" placeholder="Veuillez entrer votre adresse email" name="email" >
																		<input type="password" placeholder="Veuillez entrer votre mot de passe" name="password">
																		<div class="submit"><input type="submit" value="Login" name="login"></div>
																		<div class="clearfix"></div>
																		
																		<div class="new">
																			<p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Mot de passe oublié ?</label></p>
																			<p class="sign">Vous n'avez pas de compte ? <a href="../inscription.php">Créer un compte</a></p>
																			<div class="clearfix"></div>
																			
																		</div>
																	</form>
														</div>

														
													</div>
													
													<div class="error-btn">
															<a class="read fourth" href="../index.php">Back</a>
															</div>
												<!--//login-top-->
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer" style="background: skyblue; margin-top: 25%;">
											 <p> © Copyright Alumni web of MO department 2018 . Tous les droits sont réservés</a> et Dévéloppé par Ibrahima Diaw - Cheikh Ibrahima Gueye & Awa Pouye</p>

										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>