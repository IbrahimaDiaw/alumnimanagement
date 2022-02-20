<?php
   session_start();
   require_once  '../setting/dbconnection.php';

	if(!$_SESSION['email'])
{
	header("location:index.php");
}
else
{
	$user=$_SESSION['email'];
    $query=$db->prepare("select * from membre where mail='$user'");
	$query->execute();
    $data=$query->fetch();
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Panel alumni</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
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
	<!-- /js -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- //js-->
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
												<b><?php echo $data['prenom']." ".$data['nom']; ?></b>
																			
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
				</div>
					<!-- //header-ends -->
						<!--outter-wp-->
                             <?php 
				
				
				
				$homepage = "home";
				if(isset($_GET['page']))
				{
					$homepage = $_GET['page'];
				}
				include $homepage.".php";
				
				
				
			?>	


                                                    
  
                                                                       

					
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
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="accueil.php"> <span id="logo"> <h1>ESPACE ALUMNI</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->        
							<div class="down">	
									  <a href="accueil.php"><img src="../album/<?php echo $data['avatar']?>"style="width:200px;height: 200px;text-align:center;"></a>
									  <a href="accueil.php"><span class=" name-caret"><?php echo $data['prenom']." ".$data['nom']; ?></span></a>
									 <p>Alumni du système</p>
									<ul>
									<li><a class="tooltips" href="accueil.php?page=Profile"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="accueil.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
								<div class="menu">
									<ul id="menu" >
										<li><a href="accueil.php"><i class="fa fa-tachometer"></i> <span>Tableau de bord</span></a></li>
										<li><a href="accueil.php?page=edit_alumni&id=<?php echo $data['id']; ?>"><i class="fa fa-edit"></i> <span>Modifier profil</span></a></li>
									    <li><a href="#"><i class="fa fa-globe"></i> <span>Actualités</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="accueil.php?page=liste_news"><i class="fa fa-inbox"></i>Information actualité</a></li>
										<li><a href="accueil.php?page=publienews"><i class="fa fa-pencil-square-o"></i>Publication</a></li>
										
									  </ul>
									</li>
									 <li><a href="../chat/login.php"><i class="lnr lnr-envelope"></i> <span>Chat</span></a></li>
									 
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
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>