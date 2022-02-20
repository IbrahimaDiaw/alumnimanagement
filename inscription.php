<?php 
require_once 'setting/dbconnection.php';
include 'include/session.php';

echo( (isset($_GET['error'])) ? '<script> alert("Le nom utilisateur ou le mot de passe est incorrect ")</script>' : "");
   
    $id=$_GET['id'];
    
      $query=$db->prepare("SELECT * from membre where id=?");
       $query->execute(array($id));
       $data=$query->fetch();

      $msg="";
    if (isset($_POST['Soumettre'])) { 

      $prenom=htmlentities($_POST['prenom']);
    	$nom=htmlentities($_POST['nom']);
    	$naissance=htmlentities($_POST['naissance']);
    	$adresse=htmlentities($_POST['adresse']);
    	$phone=htmlentities($_POST['phone']);
     	$mail=htmlentities($_POST['mail']);
    	$genre=htmlentities($_POST['genre']);
    	$promo=htmlentities($_POST['promo']);
    	$universite=htmlentities($_POST['universite']);
    	$filiere=htmlentities($_POST['filiere']);
    	$password=htmlentities($_POST['password']);
    	$alumni=htmlentities($_POST['alumni']);
      if($alumni=="Etudiant(e)")
      {
        $question1=htmlentities($_POST['q1']);
        $question2=htmlentities($_POST['q2']);  
        $question3=htmlentities($_POST['q3']);  
        $question4=htmlentities($_POST['q4']);
      }
      elseif ($alumni=="Employé d'un service") 
      {
        $question5=htmlentities($_POST['q5']);
        $question6=htmlentities($_POST['q6']);  
        $question7=htmlentities($_POST['q7']);  
        $question8=htmlentities($_POST['q8']);
      }
      else{
        $question9=htmlentities($_POST['q9']);
        $question10=htmlentities($_POST['q10']);  
        $question11=htmlentities($_POST['q11']);  
        $question12=htmlentities($_POST['q12']);
      }

      
    	
    	$img_name = $_FILES['imglink']['name'];
		  $img_size =$_FILES['imglink']['size'];
	    $img_tmp =$_FILES['imglink']['tmp_name'];		
		  $url = 'album/';
		  $target_file=$url.$img_name;
       			

      
       		
       			switch ($alumni) {
             case 'Etudiant(e)':
                 
            move_uploaded_file($img_tmp,$target_file);  
           $sql=$db->prepare("UPDATE membre SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,mail=?, password=? ,genre=?, promo=?,universite=?,filiere=?,encours_de_poursuite=? ,etablissement=? ,adresse_etablissement=? ,specialite=? ,temps=?, activation=? where id=?");
            $sql->execute(array($img_name,$prenom,$nom,$naissance,$adresse,$phone,$mail,$password,$genre,$promo,$universite,$filiere,$alumni,$question1,$question2,$question3,$question4,"oui",$id));

            $requete=$db->prepare("INSERT INTO user SET name=?,email=?,country=?,gender=? ,password=?  ");
            $requete->execute(array($prenom." ".$nom,$mail,$adresse,$genre,$password));

            $req=$db->prepare("INSERT into login_membre set prenom=?,nom=?,email=?,password=?,cpassword=?,profile=? ");
             $req->execute(array($prenom,$nom,$mail,$password,$password,"alumni"));

            $msg='<label class="alert alert-success">Mise à jour éffectuée avec succès!!<label>';
                
                break;

              case "Employé d'un service":

                move_uploaded_file($img_tmp,$target_file);  
                $sql=$db->prepare("UPDATE membre SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,mail=?,password=? ,genre=?, promo=?,universite=?,filiere=?,encours_de_poursuite=? ,temps=? ,societe=? ,contrat=? ,fourchette=?, activation=? where id=? ");
            $sql->execute(array($img_name,$prenom,$nom,$naissance,$adresse,$phone,$mail,$password,$genre,$promo,$universite,$filiere,$alumni,$question5,$question6,$question7,$question8,"oui",$id));

           $requete=$db->prepare("INSERT INTO user SET name=?,email=?,country=?,gender=? ,password=?  ");
            $requete->execute(array($prenom." ".$nom,$mail,$adresse,$genre,$password));

            $req=$db->prepare("INSERT into login_membre set prenom=?,nom=?,email=?,password=?,cpassword=?,profile=? ");
             $req->execute(array($prenom,$nom,$mail,$password,$password,"alumni"));

                $msg='<label class="alert alert-success">Mise à jour éffectuée avec succès. Veuillez cliquer sur la barre Accès membre pour se connecter !!<label>';
               

                         break;
             
            case "Employé indépendant":

                move_uploaded_file($img_tmp,$target_file);
                $sql=$db->prepare("UPDATE membre SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,mail=?,password=? ,genre=?, promo=?,universite=?,filiere=?,encours_de_poursuite=? ,type_travail=? ,lieu=? ,temps=? ,salaire=?, activation=? where id=? ");
            $sql->execute(array($img_name,$prenom,$nom,$naissance,$adresse,$phone,$mail,$password,$genre,$promo,$universite,$filiere,$alumni,$question9,$question10,$question11,$question12,"oui",$id));

            $requete=$db->prepare("INSERT INTO user SET name=?,email=?,country=?,gender=? ,password=?  ");
            $requete->execute(array($prenom." ".$nom,$mail,$adresse,$genre,$password));

            $req=$db->prepare("INSERT into login_membre set prenom=?,nom=?,email=?,password=?,cpassword=?,profile=? ");
             $req->execute(array($prenom,$nom,$mail,$password,$password,"alumni"));

            $msg='<label class="alert alert-success">Mise à jour éffectuée avec succès. Veuillez cliquer sur la barre Accès membre pour se connecter !!<label>';
               
                break;

            default:

                move_uploaded_file($img_tmp,$target_file);
            $sql=$db->prepare("UPDATE membre SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,mail=?,password=? ,genre=?, promo=?,universite=?,filiere=?,encours_de_poursuite=?, activation=?WHERE id = ? " );
            $sql->execute(array($img_name,$prenom,$nom,$naissance,$adresse,$phone,$mail,$password,$genre,$promo,$universite,$filiere,$alumni,"oui",$id));
              
            $requete=$db->prepare("INSERT INTO user SET name=?,email=?,country=?,gender=? ,password=?  ");
            $requete->execute(array($prenom." ".$nom,$mail,$adresse,$genre,$password));

            $req=$db->prepare("INSERT into login_membre set prenom=?,nom=?,email=?,password=?,cpassword=?,profile=? ");
            $req->execute(array($prenom,$nom,$mail,$password,$password,"alumni"));
                
               $msg='<label class="alert alert-success">Mise à jour éffectuée avec succès. Veuillez cliquer sur la barre Accès membre pour se connecter !!<label>';
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
<link rel="stylesheet" href="css/css.css" type="text/css" media="all" />
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
<div id="wrapper">
  <div id="page-wrapper">
     <div class="container">
<!-- Page Heading -->
      
       <div class="row">
           <div class="col-lg-12">
              <img src="images/images.png" style="height: 100px;width: 100%">
           </div>
       </div>

		            <p style="color: red;" ><?php echo $msg; ?></p>
		    <form method="post" action="" enctype="multipart/form-data">
				   <div class="form-group">
			            <div class="row"><br>
				            <div class="col-md-6">
				             <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();" value="<?php echo $data['avatar'];?>" />
		                     </div>
				            <div class="col-md-6">
				              <img id="uploadPreview" src="album/<?php echo $data['avatar'];?>" class="avatar"/ style="width:150px;"><br>
				            </div>
				     <div class="clearfix"> </div>
		               </div>
		            </div><br>
					  <div class="form-group">
						 <div class="row">
						  <div class="col-md-6">
							<label>Prénom</label>	
							<input type="text" class="form-control" placeholder="Prénom" name="prenom" required="" value="<?php echo $data['prenom'];?>">
						 </div>
						 <div class="col-md-6">
						    <label>Nom</label>
						    <input type="text" class="form-control" name="nom"  required="" value="<?php echo $data['nom'];?>">
						     </div>
						    <div class="clearfix"> </div>
						 </div>
					  </div><br>
					  <div class="form-group">
						 <div class="row">
							<div class="col-md-6 grid_box1">
							  <label>Date de Naissance </label>
							  <input type="date" class="form-control" name="naissance" required="" value="<?php echo $data['naissance'];?>">
						    </div>
							<div class="col-md-6">
								<label>Lieu de naissance </label>
								<input type="text" class="form-control" name="adresse" required="" value="<?php echo $data['adresse'];?>">
							</div>
							<div class="clearfix"> </div>
						  </div>
					   </div><br>
					   <div class="form-group">
						<div class="row">
							<div class="col-md-6 grid_box1">
								<label>Téléphone</label>
								<input type="number" class="form-control" name="phone" value="<?php echo $data['telephone'];?>">
							</div>
							<div class="col-md-6 grid_box1">
								<label>Adresse email</label>
								<input type="text" class="form-control" name="mail" value="<?php echo $data['mail'];?>">
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>	<br>
		           <div class="form-group">
			           <div class="row">
				           <div class="col-md-6 grid_box1">
					           <label>Promotion</label>
					           <select name="promo" class="form-control">
						           <option>Selectionner la promotion</option>
						           <option <?php 
                                if ($data['promo']=='2007') {
                                  echo "selected";
                                }
                         ?>>2007</option>
						           <option <?php 
                                if ($data['promo']=='2008') {
                                  echo "selected";
                                }
                         ?>>2008</option>
						           <option <?php 
                                if ($data['promo']=='2009') {
                                  echo "selected";
                                }
                         ?>>2009</option>
						           <option <?php 
                                if ($data['promo']=='2010') {
                                  echo "selected";
                                }
                         ?>>2010</option>
						           <option <?php 
                                if ($data['promo']=='2011') {
                                  echo "selected";
                                }
                         ?>>2011</option>
						           <option <?php 
                                if ($data['promo']=='2012') {
                                  echo "selected";
                                }
                         ?>>2012</option>
						           <option <?php 
                                if ($data['promo']=='2013') {
                                  echo "selected";
                                }
                         ?>>2013</option>
						           <option <?php 
                                if ($data['promo']=='2014') {
                                  echo "selected";
                                }
                         ?>>2014</option>
								   <option <?php 
                                if ($data['promo']=='2015') {
                                  echo "selected";
                                }
                         ?>>2015</option>
								   <option <?php 
                                if ($data['promo']=='2016') {
                                  echo "selected";
                                }
                         ?>>2016</option>
							   </select>
						   </div>
						   <div class="col-md-6 grid_box1">
							   <label>Dans quel établissement avez-vous obtenu votre licence ?</label>
							   <input type="text" class="form-control" name="universite"  value="<?php echo $data['universite'];?>">
						   </div>
						   <div class="clearfix"> </div>
					   </div>
				   </div><br>	
				    <div class="form-group">
					    <div class="row">
						    <div class="col-md-6 grid_box1">
							    <label>Filière </label>
							    <input type="text" class="form-control" name="filiere"  value="<?php echo $data['filiere'];?>">
						    </div>
						    <div class="col-md-6 grid_box1">
								<label>Mot de passe</label>
								<input type="password" class="form-control" name="password" value="<?php echo $data['password'];?>">
							</div>
														
						    <div class="clearfix"> </div>
					    </div>
				    </div><br>
				    <div class="form-group">
					    <div class="row">
						  <div class="col-md-4 grid_box1">
							  <label>Genre</label>
						  </div>
						  <div class="col-md-4">
							  <label>Masculin</label>
							  <input type="radio"   name="genre" value="Masculin"<?php 
                                if ($data['genre']=='Masculin') {
                                  echo "checked";
                                }
                         ?> >
						  </div>
						  <div class="col-md-4">
							  <label>Féminin</label>
							  <input type="radio"    name="genre" value="Féminin" <?php 
                                if ($data['genre']=='F&eacute;mini') {
                                  echo "checked";
                                }
                         ?>>
						  </div>
						  <div class="clearfix"> </div>
					  </div>
				  </div>	<br>
				  <div class="form-group">
						<div class="row">
							<div class="col-md-2 grid_box1">
								<label>Situation actuelle</label>
							</div>
							<div class="col-md-2">
								<label>Etudiant(e)</label>
								<input type="checkbox"  name="alumni" id="choix" value="Etudiant(e)" class="check" <?php 
                                if ($data['encours_de_poursuite']=='Etudiant(e)') {
                                  echo "checked";
                                }
                         ?>>
							</div>
							<div class="col-md-3">
								<label>Employé d'un service</label>
								<input type="checkbox"   name="alumni" id="choix" value="Employé d'un service" class="check" <?php 
                                if ($data['encours_de_poursuite']=="Employ&eacute; d'un service") {
                                  echo "checked";
                                }
                         ?>>
							</div>
              <div class="col-md-3">
                <label>Employé indépendant</label>
                <input type="checkbox"   name="alumni" id="choix" value="Employé indépendant"  class="check" <?php 
                                if ($data['encours_de_poursuite']=="Employ&eacute; ind&eacute;pendant") {
                                  echo "checked";
                                }
                         ?>>
              </div>
              <div class="col-md-2">
                <label>Chômeur</label>
                <input type="checkbox"   name="alumni" id="choix" value="Chômeur"  class="check" <?php 
                                if ($data['encours_de_poursuite']=="Ch&ocirc;meur") {
                                  echo "checked";
                                }
                         ?>>
              </div>

							<div class="clearfix"> </div>
						</div>
					</div>
				  <div id="monstatus"><br>
					<div class="row hide" id="el1"  >
						<div class="col-md-6 grid_box1">
							<label>Dans quel établissement avez-vous poursuivi un master ?</label>
							<input type="text" class="form-control" placeholder="Votre réponse" name="q1" value="<?php echo $data['etablissement'];?>">
						</div>
						<div class="col-md-6 grid_box1">
							<label>Où se trouve votre établissement actuel ?</label>
							<input type="text" class="form-control" placeholder="Votre réponse" name="q2" value="<?php echo $data['adresse_etablissement'];?>" >
						</div>
						<div class="col-md-6 grid_box1">
						    <label>Quelle est votre spécialité ou domaine </label>
						    <input type="text" class="form-control" placeholder="Votre réponse" name="q3" value="<?php echo $data['specialite'];?>">
					    </div>
					    <div class="col-md-6 grid_box1">
						    <label>Combien de temps avez-vous mis pour trouver un master ?</label>
						    <input type="text" class="form-control" placeholder="Votre réponse" name="q4" value="<?php echo $data['temps'];?>">
					    </div>
			    </div>
			    <div class="row hide" id="el2" >
				    <div class="col-md-6 grid_box1">
					    <label>Combien de temps avez-vous mis pour trouver un travail ?</label>
					    <input type="text" class="form-control" placeholder="Votre réponse" name="q5" value="<?php echo $data['temps'];?>">
				    </div>
				    <div class="col-md-6 grid_box1">
					    <label>Où travaillez-vous et quel est le nom de la société ?</label>
					    <input type="text" class="form-control" placeholder="Votre réponse " name="q6" value="<?php echo $data['societe'];?>">
				    </div>
				    <div class="col-md-6 grid_box1">
					    <label>Quel type de contrat avez vous signé et le poste que vous occupez ?</label>
					    <input type="text" class="form-control" placeholder="Votre réponse" name="q7" value="<?php echo $data['contrat'];?>" >
				    </div>
				    <div class="col-md-6 grid_box1">
					    <label>Quelle est la fourchette de votre salaire ?</label>
              <select  class="form-control" name="q8" >
                       <option>Selectionner l'interval de votre salaire</option>
                       <option <?php 
                                if ($data['fourchette']=='moins de 50000') {
                                  echo "selected";
                                }
                         ?>>moins de 50000</option>
                       <option <?php 
                                if ($data['fourchette']=='Entre 100000 et 150000') {
                                  echo "selected";
                                }
                         ?>>Entre 50000 et 100000</option>
                       <option <?php 
                                if ($data['fourchette']=='2009') {
                                  echo "selected";
                                }
                         ?>>Entre 100000 et 150000</option>
                       <option <?php 
                                if ($data['fourchette']=='Entre 150000 et 200000') {
                                  echo "selected";
                                }
                         ?>>Entre 150000 et 200000</option>
                       <option <?php 
                                if ($data['fourchette']=='Entre 200000 et 30000') {
                                  echo "selected";
                                }
                         ?>>Entre 200000 et 30000</option>
                       <option <?php 
                                if ($data['fourchette']=='Entre 300000 et 400000') {
                                  echo "selected";
                                }
                         ?>>Entre 300000 et 400000</option>
                       <option <?php 
                                if ($data['fourchette']=='Entre 400000 et 500000') {
                                  echo "selected";
                                }
                         ?>>Entre 400000 et 500000</option>
                   <option <?php 
                                if ($data['fourchette']=='Entre 500000 et 600000') {
                                  echo "selected";
                                }
                         ?>>Entre 500000 et 600000</option>
                   <option <?php 
                                if ($data['fourchette']=='600000 ou plus') {
                                  echo "selected";
                                }
                         ?>>600000 ou plus </option>
                 </select>
				    </div>
		    </div>
		    <div class="row hide" id="el3"  >
			  <div class="col-md-6 grid_box1">
				  <label>Quel genre de travail faites-vous ?</label>
				  <input type="text" class="form-control" placeholder="Votre réponse" name="q9" value="<?php echo $data['type_travail'];?>">
			  </div>
			  <div class="col-md-6 grid_box1">
				  <label>Quel est le lieu de votre travail ?</label>
				  <input type="text" class="form-control" placeholder="Votre réponse " name="q10" value="<?php echo $data['lieu'];?>">
			  </div>
			  <div class="col-md-6 grid_box1">
				   <label>Combien de temps avez-vous mis pour trouver ce travail ?</label>
				   <input type="text" class="form-control" placeholder="Votre réponse" name="q11" value="<?php echo $data['temps'];?>">
			  </div>
			  <div class="col-md-6 grid_box1">
				  <label>Combien gagnez vous par mois ?</label>
           <select  class="form-control" name="q12" >
                       <option>Selectionner l'interval de votre salaire</option>
                       <option <?php 
                                if ($data['salaire']=='moins de 50000') {
                                  echo "selected";
                                }
                         ?>>moins de 50000</option>
                       <option <?php 
                                if ($data['salaire']=='Entre 100000 et 150000') {
                                  echo "selected";
                                }
                         ?>>Entre 50000 et 100000</option>
                       <option <?php 
                                if ($data['salaire']=='2009') {
                                  echo "selected";
                                }
                         ?>>Entre 100000 et 150000</option>
                       <option <?php 
                                if ($data['salaire']=='Entre 150000 et 200000') {
                                  echo "selected";
                                }
                         ?>>Entre 150000 et 200000</option>
                       <option <?php 
                                if ($data['salaire']=='Entre 200000 et 30000') {
                                  echo "selected";
                                }
                         ?>>Entre 200000 et 30000</option>
                       <option <?php 
                                if ($data['salaire']=='Entre 300000 et 400000') {
                                  echo "selected";
                                }
                         ?>>Entre 300000 et 400000</option>
                       <option <?php 
                                if ($data['salaire']=='Entre 400000 et 500000') {
                                  echo "selected";
                                }
                         ?>>Entre 400000 et 500000</option>
                   <option <?php 
                                if ($data['salaire']=='Entre 500000 et 600000') {
                                  echo "selected";
                                }
                         ?>>Entre 500000 et 600000</option>
                   <option <?php 
                                if ($data['salaire']=='600000 ou plus') {
                                  echo "selected";
                                }
                         ?>>600000 ou plus </option>
                 </select>
			  </div>
			  </div>
									   	
			</div>
			 <div class="form-group" >
				<div class="row" id="status">
														
			      <div class="clearfix"> </div>
				</div>
			</div><br>
            <div class="col-md-12 form-group button-2">
		       <center>  
		       	<button type="submit" class="btn btn-primary" name="Soumettre">Soumettre</button>
			    <button type="reset" class="btn btn-danger">Annuler</button>
			   </center>
			</div>
		    <div class="clearfix"> </div>
	</form>
   </div>
  </div>
</div><br><br>
<div class="clearfix"> </div>
<div class="w3layouts_copy_right">
  <div class="container-fluid">
    <p>©Copyright PORTAIL ALUMNI DU DEPARTEMENT MO 2018.Tous les droits sont réservés et Dévéloppé par Ibrahima Diaw-Cheikh Ibrahima Gueye & Awa Pouye</p>
  </div>
</div>
<!-- //footer -->
</div>






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
<script type="text/javascript" src="js/jquery.min.js"></script>
 <script >
 	var els = document.querySelectorAll('#choix');
 	var status = document.querySelector('#monstatus');
 	var div1 = document.querySelector('#el1');
 	var div2 = document.querySelector('#el2');
 	var div3 = document.querySelector('#el3');

    for (var i = 0; i < els.length; i++) {
    	els[i].addEventListener('click',(e)=>{
    		if(e.target.value == "Etudiant(e)"){
    			div2.classList.add('hide')
    			div3.classList.add('hide')
    			div1.classList.remove('hide')
    		}else if (e.target.value == "Employé d'un service"){
    			div1.classList.add('hide')
    			div3.classList.add('hide')
    			div2.classList.remove('hide')
    		}else if(e.target.value == "Employé indépendant") {
    			div2.classList.add('hide')
    			div1.classList.add('hide')
    			div3.classList.remove('hide')
    		}
      else if(e.target.value == "Chômeur") {
          div2.classList.add('hide')
          div1.classList.add('hide')
          div3.classList.add('hide')
        }
    	})
  }

     
    </script>
    <script type="text/javascript">
    	$(function(){
    		$(".check").change(function(){
    			if ($(this).is(":checked")) {
    				$(".check").not($(this)).each(function(){
    					$(this).removeAttr("checked");
    				})
    			}
    		})
    	})
    </script>
				
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
</body>
</html>