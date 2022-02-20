<?php 
require_once 'setting/config.php';
include 'include/session.php';

$id = $_GET['id'];

$liste = $alumni->detail_offre($id);
$detail=$alumni->actualite_du_jour();
$evenement=$alumni->evenement_du_jour();

 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Gestion alumni département Management des organisations</title>
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
             <b> Détail complet de l'offre&nbsp;</b>
              <i class="fa fa-feed"></i>
            </h3>
          </div>
        </div>
        <?php 
         foreach ($liste as $key => $actualite)
          {
         ?>
         <div class="image">
          <div class="row">
         	<div class="col-lg-12" >
         	 <b style="text-transform: uppercase;">
         	 	<label>L'entreprise <?php echo $actualite['entreprise'] ?> est à la recherche d'un </label>
         		<?php echo $actualite['titre'] ?>
         	</b><hr>
         	<label style="text-transform: uppercase;">Description de l'offre :</label><br>
             <b>Mission: </b><?php echo $actualite['mission'] ?><br>
             <b>Type de contrat: </b><?php echo $actualite['contrat'] ?><br>
             <b>Durée: </b><?php echo $actualite['duree'] ?><br>
             <b>date début: </b><?php echo $actualite['date_debut'] ?><br>

              
             <br>
             <label style="text-transform: uppercase;">Profil Récherché :</label><br>
             <b>Profil: </b><?php echo $actualite['profil'] ?><br>
             <b>Niveau d'étude: </b><?php echo $actualite['niveau'] ?><br>
             <b>Compétences requises: </b><?php echo $actualite['competence'] ?><br>


             <br>
         	<label style="text-transform: uppercase;">Information de l'entreprise :</label>
         	<br>
             <b>Description de l'entreprise: </b><?php echo $actualite['description'] ?><br>
             <b>Secteur: </b><?php echo $actualite['secteur'] ?><br>
             <b>Slogan: </b><?php echo $actualite['slogan'] ?><br>
             <b>Site: </b><?php echo $actualite['site'] ?><br>





             <br><br>
             <label style="padding-left: 400px;" >
             	Publié le :
             	<?php echo $actualite['date'] ?>
             </label>
             
         	</div>
            </div>
         	
         
         </div>
        <hr>
      
       
      <?php }; ?>
  <a href="#" class="trend-w3l" data-toggle="modal" data-target="#myModal"><span>Postuler</span></a><br>
  <div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
      </div> 
      <div class="modal-body">
        <img src="images/IMG_4856.jpg" alt="" style="width: 100%;height: 200px;"> 

        <!-- Formulaire de depot de candidature-->
      <br><br>
    <form role="form" action="" method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="post_title">Email du destinataire</label>
        <input type="email" name="email" placeholder = " " value= ""  class="form-control" required>
    </div>
    <div class="form-group">
        <label for="post_tag">Curriculum vitae(CV)</label>
        <input type="file" name="objet" placeholder = "" value= "" class="form-control" >
    </div>
    <div class="form-group">
        <label for="post_content">Lettre de motivation</label>
        <textarea class="form-control" name="message"  id="" cols="50" rows="4" ></textarea>
    </div><br>
    <div class="form-group">
      <button type="submit" name="envoyer" class="btn btn-primary" value="Envoyer">Envoyer</button>
     </div>

</form>
<?php
if (isset($_POST['envoyer']) && !empty($_POST['pseudo']) && !empty($_POST['objet']) && !empty($_POST['message'])) {
  extract($_POST);
  $destinataire=$email;
  $expediteur=' <'.$email.'>';
  $mail=mail($destinataire,$objet, $message,$expediteur.':portailalumni.000webhostapp.com :Mail de test');
  if ($mail) {
    echo "email envoyé avec succés";
  }
  else
  {
    echo "echec d'envoi";
  }

 }else{
  echo "Fomulaire non soumis ou champs vides";
 }





 ?>
      </div> 
    </div>
  </div>
</div>

    </div>
    <div class="col-lg-4">
      <h4 class="page-header">ACTUALITES RECENTES </h4>
               <?php 
                 foreach ($detail as $key => $v) 
                { 
                ?> 
               <div class="row">
                <a href="actualite.php?id=<?=$v['id']?>">
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
                </a><hr>
              <div class="row">
                <h4 class="page-header">EVENEMENTS RECENTS </h4>
               <?php 
                 foreach ($evenement as $key => $v) 
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
                    Voir tous les évènements
                  </button>
                </div>
                </a><hr>
              </div>

    </div>
  </div>
</div><br>
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


