<?php 
session_start();
include_once "../setting/config.php";
require_once '../setting/dbconnection.php';
if(!$_SESSION['email'])
{
	header("location:../index.php");
}
else
{
	$admin=$_SESSION['email'];
    $query=$db->prepare("select * from admin_info where username='$admin'");
	$query->execute();
    $admi=$query->fetch();
}
 

?>     
<!DOCTYPE HTML>
<html>
<head>
<title>Accueil Administrateur</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8"/>
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
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
											  <div id="dd" style="padding: 30px;" tabindex="1">
												<b><?php echo $admi['prenom']." ".$admi['nom']; ?></b>
																			
								              </div>
																		
										</li>
									
													   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>					<!-- //header-ends -->
								<?php 
				
				
				
				$homepage = "home1";
				if(isset($_GET['page']))
				{
					$homepage = $_GET['page'];
				}
				include $homepage.".php";
				
				
				
			?>	
												<!--/charts-->
												
										<!--//outer-wp-->
									
									 <!--footer section start-->
										<footer>
										    <p>© Copyright PORTAIL ALUMNI DU DEPARTEMENT MO 2018 . Tous les droits sont réservés et Dévéloppé par Ibrahima Diaw - Cheikh Ibrahima Gueye & Awa Pouye</p>

										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1> Admin</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.php"><img src="../album/<?php echo $admi['avatar']; ?>" style="width:120px;height: 120;text-align:center;"></a>
									  <a href="index.php"><span class=" name-caret"><?php echo $admi['prenom']." ".$admi['nom']; ?></span></a>
									 <p>Administrateur du système</p>
									<ul>
									<li><a class="tooltips" href="index.php?page=profile"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="index.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="logout.php"><span>Deconnexion</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Tableau de bord</span></a></li>
										<li id="menu-academico" ><a href="index.php?page=mail"><i class="fa fa-smile-o"></i> <span>Demande d'adhésion</span></a>
										 </li>
										<li id="menu-academico" ><a href="#"><i class="fa fa-user"></i> <span>Gestion des alumni</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-boletim" ><a href="index.php?page=validation">Ajouter Alumnus</a></li>
												<li id="menu-academico-boletim" ><a href="index.php?page=liste_alumni">liste des alumni</a>
												</li>
												</ul>
										 </li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-user"></i> <span>Gestion personnelle</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-boletim" ><a href="index.php?page=personnel">Ajouter Admin</a></li>
												<li id="menu-academico-boletim" ><a href="index.php?page=listPersonnel">Liste Admin</a></li>
												</ul>
										 </li>
									<li id="menu-academico" ><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Gestion événement</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										  <ul id="menu-academico-sub" >
										    <li id="menu-academico-avaliacoes" ><a href="index.php?page=event">Ajouter Evénement</a></li>
										    <li id="menu-academico-boletim" ><a href="index.php?page=listEvent">Liste Evénement</a></li>
											</ul>
									 </li>
									 <li><a href="#"><i class="fa fa-globe"></i> <span>Gestion actualité</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="index.php?page=liste_news"><i class="fa fa-inbox"></i>Information actualité</a></li>
										<li><a href="index.php?page=publienews"><i class="fa fa-pencil-square-o"></i>Publication</a></li>
										
									  </ul>
									</li>
									<li id="menu-comunicacao" ><a href="#"><i class="fa fa-plane"></i> <span>Gestion des offres</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul id="menu-comunicacao-sub" >
									  	<li id="menu-mensagen" style="width:150px" ><a href="index.php?page=offre">Ajouter Offre</a></li>
										<li id="menu-mensagens" style="width:150px" ><a href="index.php?page=liste_offre">Liste offre</a></li>
									  </ul>
									</li>
								  </ul>
								</div> 
							  </div> 
							   <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>