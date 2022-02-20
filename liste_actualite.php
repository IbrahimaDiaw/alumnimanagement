<?php 
require_once 'setting/config.php';
include 'include/session.php';

    $liste = $alumni->actualite_du_jour();
    $detail=$alumni->evenement_du_jour();
    $offre=$alumni->liste_offre();

  
 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Actualitès</title>
<!-- Meta tag Keywords -->
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

</style>
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>

</head>
<body>
<!-- banner -->
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
        <label>Anciens Etudiants ? <a href="inscription.php" style="color:#ffb71c;">Activer compte</a></label>
         
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
<!--//banner-->
<div class="container">
  <div class="row">
    <div class="col-lg-8">
        <div class="abt-w3l">
           <div class="header-w3l">
            <h3 class="page-header">
              Toutes les actualités&nbsp;
              <i class="fa fa-feed"></i>
            </h3>
          </div>
        </div>
        <?php 
         foreach ($liste as $key => $actualite)
          {
          
    

         ?>

        <div class="row">
          <div class="col-lg-4">
            <?php echo $actualite['date']; ?>
          </div>
          <div class="col-lg-8" style="border-left: 5px solid blue">
            <a href="actualite.php?id=<?php echo $actualite['id']; ?>">
              <b><?php echo $actualite['titre']; ?></b></a>
            <br><b><i class="fa fa-user">&nbsp;</i><?php echo $actualite['auteur']; ?></b>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-4">
            <a href="actualite.php?id=<?php echo $actualite['id']; ?>">
            <img src="album/<?php echo $actualite['image']; ?>" width="200" height="150" />
            </a>
          </div>
          <div class="col-lg-8">
            <a href="actualite.php?id=<?php echo $actualite['id']; ?>">
              <b><?php echo $actualite['description']; ?></b>
            </a>
          </div>
        </div><hr>
      

      <?php }; ?>
    </div>
    <div class="col-lg-4">
      <h4 class="page-header">EVENEMENTS RECENTS </h4>
               <?php 
                 foreach ($detail as $key => $v) 
                { 
                ?> 
               <div class="row">
                <a href="evenement.php?id=<?=$v['id']?>">
                 <div class="col-md-4" style="border-right: 2px solid green;"><img src="album/<?php echo $v['image']; ?>" style="width: 80px;" ></div>
                 <div class="col-lg-8"><b><?php echo $v['titre']; ?></b><br><?php echo $v['description']; ?><br>
                 <span class="fa fa-user"><strong><?php echo" ".$v['auteur']; ?></strong></span>
                <span class="fa fa-calendar"><strong><?php echo" ".$v['date']; ?></strong></span>
                </div>
                 </a>
               </div><hr>
                 
                <?php   };?>
                <a href="liste_evenement.php">
                <div class="form-group">
                  <button type="button" class="btn btn-primary" align="right">
                    Voir toutes les évènements
                  </button>
                </div>
              </a><hr>
              <div class="row">
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

    </div>
  </div>
</div>
<div class="clearfix"> </div>
<div class="w3layouts_copy_right">
  <div class="container-fluid">
    <p>©Copyright PORTAIL ALUMNI DU DEPARTEMENT MO 2018.Tous les droits sont réservés et Dévéloppé par Ibrahima Diaw-Cheikh Ibrahima Gueye & Awa Pouye</p>
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