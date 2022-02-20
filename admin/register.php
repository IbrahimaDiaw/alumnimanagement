<?php  

include "../setting/config.php";
       $msg="";

    if (isset($_POST['signup'])) {
    	# code...

         $nomComplet=$_POST['nomComplet'];
         $email      =$_POST['email'];
         $password =$_POST['password'];
         $cpassword = $_POST['cpassword'];


         if ($password!= $cpassword) {

         	 $msg ="les mots de passe ne correspondent pas";

         }
         else{

         	  $login = $alumni->admin_login($email,$password);
         	 if (($login)>0) {

         	   $msg= "Cet utilisateur existe déjà veuillez essayer un autre";
         	 }

         	else{
         	$ajou_fait= $alumni->inscrit_admin($nomComplet,$email,$password,$cpassword);
         	if ($ajou_fait==true) {

         		$msg="Opération reussie avec succés";
         	}
         	else{

         		$msg="Opération échouée";
         	}
         }
         	
         }
    }











?>

<!DOCTYPE HTML>
<html>
<head>
<title>Espace admin inscription</title>
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
												
													<div class="error-top up">
													<h2 class="inner-tittle page">ESPACE ADMIN</h2>
													    <div class="login">
													    	<p style="color: blue;">Bienvenue cher administreur veuillez remplir le formulaire pour obtenir un compte admin s'il vous plait</p>
														<h3 class="inner-tittle t-inner"style="color: blue; font-family: georgia;">INSCRIPTION</h3>
														  <p style="color: red;"><?php echo $msg; ?></p>
																<form method="post" action="">
																	    <input type="text" class="text" placeholder ="Nom complet" name="nomComplet" required="" >
																		<input type="text" class="text" placeholder ="Adresse email" name="email" required="" >
																		<input type="password" placeholder="mot de passe" name="password" required="">
																		<input type="password" placeholder="confirmer mot de passe" name="cpassword" required="">
																		<div class="submit"><input type="submit"  value="S'inscrire" name="signup"></div>
																		<div class="clearfix"></div>
																		<div class="buttons">
																			<ul>
																				<li><a href="#" class="hvr-sweep-to-right">S'inscrire</a></li>
																				<li class="or"><h6>OR</h6></li>
																				<li class="lost"><a href="#" class="hvr-sweep-to-left">S'inscrire</a> </li>
																				<div class="clearfix"></div>
																			</ul>
																		</div>
																		<div class="new">
																			<p class="sign up">Avez-vous déjà un compte ? <a href="login.php"> Connecter ici.</a></p>
																			<div class="clearfix"></div>
																		</div>
																	</form>
															</div>
														</div>
														<div class="error-btn">
															<a class="read fourth" href="../index.php">Back</a>
															</div>
													</div>
													 
												<!--//login-top-->
												<div class="clearfix"></div>
												<div class="clearfix"></div>
												<div class="clearfix"></div>
										   </div>
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer sign" style="background: skyblue;margin-top: 30%;">
										
										 <p>© Copyright Alumni web of MO department 2018 . Tous les droits sont réservés</a> et Dévéloppé par Ibrahima Diaw - Cheikh Ibrahima Gueye & Awa Pouye</p>
										   
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