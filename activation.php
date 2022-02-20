<?php 
     include_once 'include/session.php'; 

     $msg="";

  if (isset($_POST['activation'])) 
  {
     $prenom=$_POST['prenom'];
     $nom=$_POST['nom'];
     $date_naissance=$_POST['date_naissance'];
     $lieu=$_POST['lieu'];
     $promo=$_POST['promo'];

     $sql=$db->prepare("SELECT * FROM membre where prenom='$prenom' and nom='$nom' and adresse='$lieu' and promo='$promo' and activation='' ");
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      $sql->execute();        
      $data=$sql->fetch();
       
     if ($data>0) 
     {
       $id=$data['id'];
       header("location:inscription.php?id=".$id);
     }
     else
     {
       $msg='<label class="alert alert-danger">Mise à jour déjà éffectuée ou informations saisies sont incorrectes</label> ';

     }
     
  }

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
.stats-info {
  text-align: center;
  padding-top: 400px;
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
#container{
  height: 100%;
  padding-bottom:90px;
  
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
        <label>Anciens Etudiants ? <a href="activation.php" style="color:#ffb71c;">Activer compte</a></label>
         
       </div><br><br><br><br><br><br><br><br><br><br>
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" align="center"><i class="fa fa-angle-left"></i></a>
</div>
<div id="main">
<div id="container">
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
<br><br>
<div class="stats" id="stats">
  <div class="container">
    <div class="row alert alert-info">
      <label>ACTIVATION DE VOTRE COMPTE</label>
    </div>
    <div class="panel panel-default">
      <div class="panel panel-heading">Activer votre compte</div>
      <div class="panel panel-heading">
        Pour activer votre compte, veuillez tout d'abord saisir votre prénom, nom, date de naissance, lieu de naissance, et promotion. Cliquez ensuite sur le bouton "Activer mon compte". Enfin vous aurez la possibilité de mettre à jour vos informations et obtenir un compte personnel dans la plateforme . 
        
      </div>
  <div class="panel-body">
    <form action="" method="post">
      <div class="row">
        <div class="row"><?php echo $msg; ?></div>
        <div class="col-md-6">
          <label for="prenom">Votre Prénom</label>
          <input type="text" name="prenom" class="form-control" required="" placeholder="champs obligatoire" />
        </div>
        <div class="col-md-6">
          <label for="nom">Votre Nom</label>
          <input type="text" name="nom" class="form-control" required="" placeholder="champs obligatoire" />
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="naissance">Votre date de Naisance</label>
          <input type="date" name="date_naissance" class="form-control" required=""/>
        </div>
        <div class="col-md-4">
          <label for="lieu">Votre Lieu de Naissance</label>
          <input type="text" name="lieu" class="form-control" required="" placeholder="champs obligatoire" />
        </div>
        <div class="col-md-4">
          <label for="lieu">Votre Promotion</label>
          <input type="text" name="promo" class="form-control" required="" placeholder="champs obligatoire" />
        </div>
      </div><br>
      <div class="panel panel-footer" align="right">
      <input type="submit" name="activation" class="btn btn-info" value="Activer mon compte">
    </div>
    </form>
     </div>
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