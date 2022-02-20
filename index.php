<?php 
require_once 'setting/config.php';
include 'include/session.php';

echo( (isset($_GET['error'])) ? '<script> alert("Le nom utilisateur ou le mot de passe est incorrect ")</script>' : "");
$detail = $alumni->actualite_du_jour();
$event=$alumni->evenement_du_jour();
$offre=$alumni->liste_offre();

   ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/sidebar.css" type="text/css" media="all" />

 <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<style type="text/css">

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background:#002147;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    color: white;
}
.sidenav .closebtn {
    top:0px;
    font-size: 36px;
}
.stats-info {
  text-align: center;
}
.stats h4 {
    color: #fff;
    font-size: 17px;
    line-height: 1.4;
    letter-spacing: 2px;
    text-align: center;
    font-weight: 600;
    background: #002147;
    padding: .5em;
    height: 80px
}
h4:hover {
  opacity:1;
  background:#ffb71c;

}
.stats-grid {
  font-size: 60px;
  font-weight: 400;
  color: white;
  margin-bottom: 10px;
}
h4.stats-info {
  margin-top: 20px;
}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1580px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  font-size: 20px;
  padding-left:36em;
  position: relative;
  bottom: 6em;
  width: 100%;
  text-align: center;
  text-align: justify;

}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #002147;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 5s;
  animation-name: fade;
  animation-duration: 5s;
}

@-webkit-keyframes fade {
  from {opacity: 1} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: 1} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
#stats {
  background: url(images/bg1.jpg) no-repeat 0px 0px;
    padding-bottom: 100px;
    background-size: cover;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
    background-attachment: fixed;
    border-radius: 50px;
}
#stats-info {
  text-align: center;
}
#stats h4 {
    color: #fff;
    font-size: 26px;
    line-height: 1.4;
    letter-spacing: 2px;
    text-align: center;
    font-weight: 600;
    background: #ffb71c;
    padding: .5em;
    border-right: 5px solid #fff;
    border-radius: 13px 0;
}
#stats-grid {
  font-size: 60px;
  font-weight: 400;
  color: white;
  margin-bottom: 10px;
}
h4#stats-info {
  margin-top: 20px;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <label style="font-size: 25px; padding-left: 30px; background:#002147; color: white;margin-top: 20%;">Accès membre</label><br>
  
  <form method="post" style="background:white;">
      <div class="modal-body">
       <div class="w3l-title" align="center" style="background:#002147;border-radius: 5em;">
        
        <a data-toggle="modal" data-target="#myModal3"><i class=" fa fa-sign-in" aria-hidden="true"></i>Connexion</a>
      
      </div><br><br>
        <div class="form-group"> 
              <label>Adresse E-mail</label> 
              <input type="text" placeholder="Adresse E-mail" name="email" class="form-control" required="">
                <label>Mot de passe</label>
                <input type="password" placeholder="Mot de passe" name="password" class="form-control" required="">
             </div><br>
             <div class="clearfix"></div>
             <div class="submit form-group ">
             <center><input type="submit" class="btn btn-primary" value="Connexion" name="login"></center>  
            </div>
           
           
      </div>
       </form>
       <div>
         <label>Pas encore de compte ? </label><br><br>
        <label >Anciens Etudiants ? <a href="activation.php" style="color: #ffb71c;">Activer compte</a></label>
         </div><br><br><br><br><br><br><br><br><br><br>
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" align="center"><i class="fa fa-angle-left"></i></a>
</div>
<div id="main">
  <header>
  <div class="main_section_agile" id="home">
  <div class="agileits_w3layouts_banner_nav">
    <nav class="navbar navbar-default"> 
      <div class="navbar-header navbar-left">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <h1><a class="navbar-brand" href="index.php"><i class="fa fa-leanpub" aria-hidden="true"></i>PORTAIL ALUMNI DU DEPARTEMENT MO</a></h1>

      </div>
      <div class="w3layouts_header_right">
          <form action="#" method="post">
          <input name="Search here" type="search" placeholder="Search" required="">
          <input type="submit" value="">
        </form>&nbsp;
        <div style="cursor:pointer" onclick="openNav()" >
       <button class="btn btn-warning" style="width:15em;background: #ffb71c;">Connexion</button>  
      </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <nav class="link-effect-2" id="link-effect-2">
          <ul class="nav navbar-nav">
            <ul class="nav navbar-nav">
            <li><a href="index.php" class="effect-3"><i class="fa fa-home">&nbsp;</i>Accueil</a></li>
            <li><a href="liste_actualite.php" class="effect-3"><i class="fa fa-globe">&nbsp;</i>Actualités</a></li>
            <li><a href="liste_evenement.php" class="effect-3 "><i class="fa fa-info-circle">&nbsp;</i> Evénements</a></li>
            <li><a href="offre_emploi.php" class="effect-3"><i class="fa fa-plane">&nbsp;</i>Offre d'emploi</a></li>
            <li><a href="#team" class="effect-3 scroll"><i class="fa fa-group">&nbsp;</i>Equipe</a></li>
            <li><a href="#mail" class="effect-3 scroll"><i class="fa fa-phone">&nbsp;</i>Contact</a></li>
          </ul>
          </ul>
        </nav>
    
      </div>
    </nav> 
    </div>
    </div> 
    <div class="clearfix"> </div>
<!-- banner -->
</header>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/s1.jpg" style="width:100%;height: 500px;">
  <div class="text">
     
</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/ufr-ses1.jpg" style="width:100%;height: 500px;">
    <div class="text">
     
    
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/IMG_4856.jpg" style="width:100%;height: 500px;">
  <div class="text">
    
    
  </div>
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  
  <div class="clearfix"></div>
</div>
</div>

<!-- //banner -->
<!-- Modal2 -->
<!--stats-->
<div class="stats">
  <div class="container">
    <div class="stats-info">
      <a href="demande_compte.php">
        <div class="col-md-4 col-xs-4 stats-grid slideanim">
        <h4 class="stats-info"> 
          <i class="fa fa-leanpub" aria-hidden="true"></i>
          CREATION DE COMPTE
          <br><b>Demander votre compte</b>
        </h4>

      </div>
      </a>
      <a href="chat/login.php">
        <div class="col-md-4 col-xs-4 stats-grid slideanim">
        
        <h4 class="stats-info">
          <i class="fa fa-book" aria-hidden="true"></i>
          SYTEME DE CHAT 
          <br><b>Accèder au réseau des anciens</b>
        </h4>
      </div>
      </a>
      <a href="activation.php">
        <div class="col-md-4 col-xs-4 stats-grid slideanim">
        <h4 class="stats-info">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        ETUDIANTS,DIPLÔMES
        <br><b>Mise à jour informations</b>
        </h4>
      </div>
      </a>
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--//stats-->
<!-- //Modal2 -->

<!-- about -->
<div class="container">
            <div class="row">
               <div class="col-lg-6">
                <h4 class="page-header">OFFRES D'EMPLOI</h4>
                <?php 
                 foreach ($offre as $key => $v) 
                { 
                ?> 
               <div class="row">
                <a href="offre_detail.php?id=<?=$v['id']?>">
                 <div class="col-md-4" style="font-family: algerian;font-size: 30px">
                   <?php echo $v['contrat']; ?>
                 </div>
                 <div class="col-lg-8" style="border-left: 2px solid green;"><b><?php echo $v['titre']; ?></b><br>
                 <span><strong><?php echo" ".$v['entreprise']; ?></strong></span>
                <span><strong><?php echo" ".$v['site']; ?></strong></span>
                </div>
                 </a>
               </div><hr>
                 
                <?php   };?>
                
                <a href="offre_emploi.php">
                <div class="form-group">
                  <button type="button" class="btn btn-primary" align="right">
                    Voir toutes les offres
                  </button>
                </div>
                </a>
              </div>
              <div class="col-lg-6">
               <h4 class="page-header">EVENEMENTS</h4>
               <?php 
                 foreach ($event as $key => $evenement) 
                { 
                ?> 
               <div class="row">
                <a href="evenement.php?id=<?=$evenement['id']?>">
                 <div class="col-md-4" style="border-right: 2px solid green;"><img src="album/<?php echo $evenement['image']; ?>" style="width: 80px;" ></div>
                 <div class="col-lg-8"><b><?php echo $evenement['titre']; ?></b><br><?php echo $evenement['description']; ?><br>
                 <span class="fa fa-user"><strong><?php echo" ".$evenement['auteur']; ?></strong></span>
                <span class="fa fa-calendar"><strong><?php echo" ".$evenement['date']; ?></strong></span>
                </div>
                 </a>
               </div><hr>
                 
                <?php   };?>
                <a href="liste_evenement.php">
                <div class="form-group">
                  <button type="button" class="btn btn-primary" align="right">
                    Voir tous les évènements
                  </button>
                </div>
              </a>
           </div>
       </div>
<div class="clearfix"></div>
</div><br>
<!-- //about -->
<!-- about -->
<div class="about-top" id="about">
  <div class="container">
    <h3 class="w3l-title">A propos</h3>
    <div class="w3layouts_header">
      <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
    </div>
    <div class="col-md-7 wthree-services-bottom-grids">
      <div class="wthree-services-left">
        <img src="images/conference.jpg" alt="" width="600px" height="600px">
      </div>
      <div class="wthree-services-right">
        <img src="images/recteur.png" alt="" width="600px" height="600px">
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="col-md-5 wthree-about-grids">
      <h4>A propos du site</h4>
      <a href="#" class="trend-w3l" data-toggle="modal" data-target="#myModal"><span>Lire plus</span></a>
      
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
      </div> 
      <div class="modal-body">
        <img src="images/IMG_4856.jpg" alt="" style="width: 100%;height: 200px;">  
        <p style="text-align: justify;">
           Ce système permet de gérer les données des anciens étudiants du département et de fournir un accès facile au système. Les contacts entre anciens peuvent être utilisés pour forger des liens d'affaires et pour obtenir des références ou des idées dans un nouveau domaine. L'accès au système peut les aider à établir des relations dans leurs projets. Cela permettra une communication rapide et facile. Chaque utilisateur sera responsable de la mise à jour de ses propres informations. Chaque utilisateur aura également l'option de maintenir leur vie privée. Il ne nécessite pas l'attention constante d'un groupe d'étudiants pour sa maintenance. Les anciens seront en mesure d'organiser des réunions et de se renseigner sur les possibilités d'emploi sur eux-mêmes en utilisant ce système.
</p>
      </div> 
    </div>
  </div>
</div>
<!-- //modal --> 
<!-- //about -->
<?php
    $q= $db->query('SELECT id FROM ajout_evenement');
     $nb_event = 0;
     $list = array();
     while($data = $q->fetch(PDO::FETCH_ASSOC)){    
         $list[] = $data;
     };
     
     $nb_event = count($list);

     $q1= $db->query('SELECT id FROM actualite');
     $nb_actualite = 0;
     $list1 = array();
     while($data1 = $q1->fetch(PDO::FETCH_ASSOC)){    
         $list1[] = $data1;
     };
     
     $nb_actualite = count($list1);

     $q2= $db->query('SELECT id FROM offre');
     $nb_offre = 0;
     $list2 = array();
     while($data2 = $q2->fetch(PDO::FETCH_ASSOC)){    
         $list2[] = $data2;
     };
     
     $nb_offre = count($list2);

     $q3= $db->query('SELECT id FROM login_membre');
     $nb_membre = 0;
     $list3 = array();
     while($data3 = $q3->fetch(PDO::FETCH_ASSOC)){    
         $list3[] = $data3;
     };
     
     $nb_membre = count($list3);

 ?>
<!-- services -->
 <!--stats-->
<div id="stats">
  <div class="container">
    <div id="stats-info">
       <div class="col-md-3 col-xs-3 slideanim" id="stats-grid" >
        <i class="fa fa-globe" aria-hidden="true"></i>
        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $nb_actualite; ?>' data-delay='.5' data-increment="1"><?php echo $nb_actualite; ?></div>
        
        <h4 id="stats-info"><br>Actualités</h4>
      </div>
      <div class="col-md-3 col-xs-3 slideanim" id="stats-grid" >
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $nb_event; ?>' data-delay='.5' data-increment="1">
          <?php echo $nb_event; ?></div>
        
        <h4 id="stats-info"><br>Evénements</h4>
      </div>
      <div class="col-md-3 col-xs-3 slideanim" id="stats-grid">
        <i class="fa fa-plane" aria-hidden="true"></i>
        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $nb_offre; ?>' data-delay='.5' data-increment="10">
          <?php echo $nb_offre; ?></div>
        
        <h4 id="stats-info"><br>Offres <br></h4>
      </div>
      <div class="col-md-3 col-xs-3 slideanim" id="stats-grid">
          <i class="fa fa-user" aria-hidden="true"></i>
        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $nb_membre; ?>' data-delay='.5' data-increment="1">
          <?php echo $nb_membre; ?></div>
      
        <h4 id="stats-info"><br>Membres</h4>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--//stats-->
<div class="container">
  <div class="row">
    <div class="col-lg-6"></div>
    <div class="col-lg-6">
               <h4 class="page-header">Actualités Récentes </h4>
               <?php 
                 foreach ($detail as $key => $v) 
                { 
                ?> 
               <div class="row">
                <a href="Actualite.php?id=<?=$v['id']?>">
                 <div class="col-md-4" style="border-right: 2px solid green;"><img src="album/<?php echo $v['image']; ?>" style="width: 80px;" ></div>
                 <div class="col-lg-8"><b><?php echo $v['titre']; ?></b><br><?php echo $v['description']; ?><br>
                 <span class="fa fa-user"><strong><?php echo" ".$v['auteur']; ?></strong></span>
                <span class="fa fa-calendar"><strong><?php echo" ".$v['date']; ?></strong></span>
                </div>
                 </a>
               </div><hr>
                 
                <?php   };?>
                <a href="liste_actualite.php">
                <div class="form-group">
                  <button type="button" class="btn btn-primary" align="right">
                    Voir toutes les actualités
                  </button>
                </div>
                </a>
           </div>
  </div>
</div><br>
<!-- //services -->
<!-- team -->
<div class="team-w3l" id="team">
    <div class="container">
    <h3 class="w3l-title">Equipe</h3>
    <div class="w3layouts_header">
      <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
    </div>
    <div class="team-w3l-grid">
      <div class="col-md-4 col-xs-4 about-poleft t1">
        <div class="about_img"><img src="images/ben.jpg" alt="" style="height: 650px;">
          <h5>Ibrahima DIAW</h5>
          <div class="about_opa">
          <p>Etudiant en licence 3 MIO, Développeur</p>
          <ul class="fb_icons2 text-center">
            <li><a class="fa fa-facebook" href="#"></a></li>
            <li><a class="fa fa-twitter" href="#"></a></li>
            <li><a class="fa fa-google" href="#"></a></li>
            <li><a class="fa fa-linkedin" href="#"></a></li>
           
          </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 about-poleft t2">
        <div class="about_img"><img src="images/pouye.jpg" alt="" style="height: 650px;" >
          <h5>Awa POUYE</h5>
          <div class="about_opa">
          <p>Etudiante en Licence 3 MIO, Rédactrice</p>
          <ul class="fb_icons2 text-center">
            <li><a class="fa fa-facebook" href="#"></a></li>
            <li><a class="fa fa-twitter" href="#"></a></li>
            <li><a class="fa fa-google" href="#"></a></li>
            <li><a class="fa fa-linkedin" href="#"></a></li>
           
          </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 about-poleft t3">
        <div class="about_img"><img src="images/GUEYE.png" alt="" style="height: 650px;">
          <h5>Cheikh Ibrahima GUEYE</h5>
          <div class="about_opa">
          <p>Etudiant en licence 3 MIO Concepteur</p>
          <ul class="fb_icons2 text-center">
            <li><a class="fa fa-facebook" href="#"></a></li>
            <li><a class="fa fa-twitter" href="#"></a></li>
            <li><a class="fa fa-google" href="#"></a></li>
            <li><a class="fa fa-linkedin" href="#"></a></li>
            
          </ul>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    
      <div class="clearfix"></div>
    </div>
</div>
<!-- //team -->
<!-- contact -->
<div id="mail" class="contact">
  <div class="container">
    <h3 class="w3l-title">Contact</h3>
    <div class="w3layouts_header">
      <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
    </div>
    <div class="agile_banner_bottom_grids">
      <div class="col-md-4 col-xs-4 w3_agile_contact_grid">
        <div class="agile_contact_grid_left">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
        </div>
        <div class="agile_contact_grid_right agilew3_contact">
          <h4>Addresse</h4>
          <p>Université de Thiès</p>
          <p>Thiès</p>
          <P>Sénégal</P>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 w3_agile_contact_grid">
        <div class="agile_contact_grid_left agileits_w3layouts_left">
          <i class="fa fa-mobile" aria-hidden="true"></i>
        </div>
        <div class="agile_contact_grid_right agileits_w3layouts_right">
          <h4>Phone</h4>
          <p> +221 77 793 35 16 <span>+221 77 847 17 31</span><span>+221 77 662 91 33</span></p>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 w3_agile_contact_grid">
        <div class="agile_contact_grid_left agileits_w3layouts_left1">
           <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </div>
        <div class="agile_contact_grid_right agileits_w3layouts_right1">
          <h4>Email</h4>
          <p>ibrahimadiaw1997@gmail.com</p>
            <p><span>gueyecheikhibrahima151@gmail.com</span></p>
            <p><span>awapouyesaly02@gmail.com</span></p>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
    </div>

  </div>
</div>
<!-- footer -->
<div class="footer">
  <div class="container">
    <div class="wthree_footer_grid_left">
      <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
        <h4>A propos</h4>
        <p>Ce site web regroupe les anciens étudiants du département management des organisations et permet a ces étudiant de tiser des liens entre eux</p>
      </div>
      <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
        <h4>Navigation</h4>
        <ul>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.php">Accueil</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#about" class="scroll">Actualités</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="students/index.php" class="scroll">Alumni</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#services" class="scroll">Evénement</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#gallery" class="scroll">Galerie</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#mail" class="scroll">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
        <h4>Others</h4>
        <ul>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Media</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Mobile Apps</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">
        <h4>Contact Us</h4>
        <p class="fa fa-envelope-o" aria-hidden="true">E-mail</p>
          <p class="fa fa-phone" aria-hidden="true"><span>77 793 35 16 / 77 662 91 33 / 77 847 17 31</span></p>
        <p class="fa fa-fax" aria-hidden="true"><span>33 858 58 58</span></p>
        </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<div class="w3layouts_copy_right">
  <div class="container-fluid">
    <p>© Copyright PORTAIL ALUMNI DU DEPARTEMENT MO 2018 . Tous les droits sont réservés et Dévéloppé par Ibrahima Diaw - Cheikh Ibrahima Gueye & Awa Pouye</p>
  </div>
</div>
<!-- //footer -->
  
</div>
<!-- js-scripts -->     
<!-- js-files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->
<!-- Baneer-js -->
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
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
  <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //moving-top scrolling -->
<!-- gallery popup -->
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
  $(".swipebox").swipebox();
});
</script>
<!-- //gallery popup -->
<!--/script-->
  <script src="js/simplePlayer.js"></script>
      <script>
        $("document").ready(function() {
          $("#video").simplePlayer();
        });
      </script>
<!-- //Baneer-js -->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
  <script>
    $(function() {
    $( "#datepicker" ).datepicker();
   });
  </script>
<!-- //Calendar --> 
<!--Slide-->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
<!--fin slide js-->
<!-- //js-scripts -->
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
</body>
</html> 
