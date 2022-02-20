<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>


<?php 
try{
    
    $db=new PDO('mysql:host=localhost;dbname=gestion_alumni;charset=utf8','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);//on émet une alerte à chaque fois qu'une requète a échoué  

}catch(PDOException $ex)
{
       echo $ex;
}
      $msg="";
    if (isset($_POST['Soumettre'])) { 

        $prenom=htmlentities($_POST['prenom']);
    	$nom=htmlentities($_POST['nom']);
    	$naissance=htmlentities($_POST['naissance']);
    	$adresse=htmlentities($_POST['adresse']);
    	$phone=htmlentities($_POST['phone']);
     	$email=htmlentities($_POST['email']);
    	$genre=htmlentities($_POST['genre']);
    	$promo=htmlentities($_POST['promo']);
    	$universite=htmlentities($_POST['universite']);
    	$filiere=htmlentities($_POST['filiere']);
    	$alumni=htmlentities($_POST['alumni']);
    	if ($alumni=="Etudiant(e)") 
    	{
    		
    	$question1=htmlentities($_POST['q1']);
    	$question2=htmlentities($_POST['q2']);	
    	$question3=htmlentities($_POST['q3']);	
    	$question4=htmlentities($_POST['q4']);
    	}
    	elseif ($alumni=="Employé d'un service")
    	 {
    		
          $question1=htmlentities($_POST['q5']);
    	  $question2=htmlentities($_POST['q6']);	
    	  $question3=htmlentities($_POST['q7']);	
    	  $question4=htmlentities($_POST['q8']);
    	}
    	else
    	{
    	  $question1=htmlentities($_POST['q9']);
    	  $question2=htmlentities($_POST['q10']);	
    	  $question3=htmlentities($_POST['q11']);	
    	  $question4=htmlentities($_POST['q12']);

    	}
    	
        
    	$img_name = $_FILES['imglink']['name'];
		$img_size =$_FILES['imglink']['size'];
	    $img_tmp =$_FILES['imglink']['tmp_name'];		
		$url = '../album/';
		$target_file=$url.$img_name;

       
                 $requete=$db->prepare("SELECT id,avatar,prenom,nom,naissance,adresse,telephone,email,genre,promo,universite,filiere FROM  membre where email='$email' ");
       		    $requete->setFetchMode(PDO::FETCH_ASSOC);
       		    $requete->execute();
       		    $data=$requete->fetch();
       		    if ($data>0 ) {
       		   $msg="Ce membre  existe déjà";   
       		   }
       		   else
       		   {
       		   	move_uploaded_file($img_tmp,$target_file);	
                $requete=$db->prepare("INSERT INTO membre SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,email=? ,genre=?, promo=?,universite=?,filiere=?, situation_actuelle=? ");
       			$requete->execute(array($target_file,$prenom,$nom,$naissance,$adresse,$phone,$email,$genre,$promo,$universite,$filiere,$alumni));
       			$requete=$db->prepare("INSERT INTO login SET username=? ,password=?  ");
       			$requete->execute(array($prenom.' '.$nom,$nom));


       			

       		   }
          
       		
       			switch ($alumni) {
       			 case 'Etudiant(e)':
                 
                $sql=$db->prepare("SELECT id,avatar,prenom,nom,naissance,adresse,telephone,email,genre,promo,universite,filiere,encours_de_poursuite,etablissement,adresse_etablissement,specialite,temps FROM  alumni_etudiant where email='$email' ");
       		    $sql->setFetchMode(PDO::FETCH_ASSOC);
       		    $sql->execute();
       		    $data=$sql->fetch();
       		    if ($data>0 ) {
       		   $msg="Cet alumnus exite déjà";   
       		   }
       		   else
       				{
       			move_uploaded_file($img_tmp,$target_file);	
                $sql=$db->prepare("INSERT INTO alumni_etudiant SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,email=? ,genre=?, promo=?,universite=?,filiere=?,encours_de_poursuite=? ,etablissement=? ,adresse_etablissement=? ,specialite=? ,temps=?  ");
       			$sql->execute(array($target_file,$prenom,$nom,$naissance,$adresse,$phone,$email,$genre,$promo,$universite,$filiere,$alumni,$question1,$question2,$question3,$question4));

       			echo "<script>window.location='index.php';</script>";
                    }
       					break;

       			  case "Employé d'un service":

                $sql=$db->prepare("SELECT id,avatar,prenom,nom,naissance,adresse,telephone,email,genre,promo,universite,filiere,encours_de_poursuite,temps,societe,contrat,fourchette FROM  alumni_employeur where email='$email' ");
       		    $sql->setFetchMode(PDO::FETCH_ASSOC);
       		    $sql->execute();
       		    $data=$sql->fetch();
       		    if ($data>0 ) {
       		       $msg="Cet alumnus exite déjà";   
       		   }
       		   else
       				{

       			move_uploaded_file($img_tmp,$target_file);	
                $sql=$db->prepare("INSERT INTO alumni_employeur SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,email=? ,genre=?, promo=?,universite=?,filiere=?,encours_de_poursuite=? ,temps=? ,societe=? ,contrat=? ,fourchette=?  ");
       			$sql->execute(array($target_file,$prenom,$nom,$naissance,$adresse,$phone,$email,$genre,$promo,$universite,$filiere,$alumni,$question1,$question2,$question3,$question4));

                echo "<script>window.location='index.php';</script>";
               }

                         break;
             
       			default:
        			
       			$sql=$db->prepare("SELECT id,avatar,prenom,nom,naissance,adresse,telephone,email,genre,promo,universite,filiere,encours_de_poursuite,type_travail,lieu,temps,salaire FROM  alumni_independant where email='$email' ");
       		    $sql->setFetchMode(PDO::FETCH_ASSOC);
       		    $sql->execute();
       		    $data=$sql->fetch();
       		    if ($data>0 ) {
       		   $msg="Cet alumnus exite déjà";   
       		   }
       		   else
       				{

                move_uploaded_file($img_tmp,$target_file);
                $sql=$db->prepare("INSERT INTO alumni_independant SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,email=? ,genre=?, promo=?,universite=?,filiere=?,encours_de_poursuite=? ,type_travail=? ,lieu=? ,temps=? ,salaire=?  ");
       			$sql->execute(array($target_file,$prenom,$nom,$naissance,$adresse,$phone,$email,$genre,$promo,$universite,$filiere,$alumni,$question1,$question2,$question3,$question4));


                   echo "<script>window.location='index.php';</script>";
               }

       					break;
       			}

       		

      

    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Alumni Panel: Resgistration </title>
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
	<!-- /js -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- //js-->
<style type="text/css">
	.hide{
		display: none;
	}
</style>
</head> 
<body style="background: skyblue;">
	       <div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
											  <div id="dd" class="wrapper-dropdown-3" tabindex="1">
																			<span>Sénégal</span>
																			
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


							<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="../index.php">Home</a></li>
											<li class="active">Alumni</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual">
											<h2 class="inner-tittle"><center>Formulaire des alumni</center></h2>
												<div class="graph">

													<p style="color: red;" ><?php echo $msg; ?></p>
													<form method="post" action="" enctype="multipart/form-data">
												    <div class="form-group">
														<div class="row">
															<div class="col-md-12">
													<center>
			                                             <img id="uploadPreview" src="images/avatar_2x.png" class="avatar"/ style="width:150px;text-align:center;"><br>
			                                             <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>
		                                             </center>
															</div>
															<div class="clearfix"> </div>
														</div>
													</div>
													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
															<label>Prénom</label>	
														     <input type="text" class="form-control1" placeholder="Prénom" name="prenom" required="">
															</div>
															<div class="col-md-6">
															 <label>Nom</label>
														     <input type="text" class="form-control1" placeholder="Nom" name="nom"  required="">
															</div>
															<div class="clearfix"> </div>
														</div>
													</div>
													<div class="form-group">
													<div class="row">
														<div class="col-md-6 grid_box1">
															<label>Date de Naissance </label>
															<input type="date" class="form-control1" placeholder="" name="naissance" required="">
														</div>
														<div class="col-md-6">
															<label>Adresse </label>
															<input type="text" class="form-control1" placeholder="Adresse" name="adresse" required="">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-6 grid_box1">
															<label>Téléphone</label>
															<input type="number" class="form-control1" placeholder="numéro de téléphone" name="phone" required="">
														</div>
														<div class="col-md-6 grid_box1">
															<label>Adresse email</label>
															<input type="text" class="form-control1" placeholder="adresse email" name="email" required="">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>	
												<div class="form-group">
													<div class="row">
														<div class="col-md-6 grid_box1">
															<label>Promotion</label>
															<select name="promo" class="form-control1" required="">
																<option>Selectionner la promotion</option>
																<option>2007</option>
																<option>2008</option>
																<option>2009</option>
																<option>2010</option>
																<option>2011</option>
																<option>2012</option>
																<option>2013</option>
																<option>2014</option>
																<option>2015</option>
																<option>2016</option>
															</select>
														</div>
														<div class="col-md-6 grid_box1">
															<label>Dans quel établissement avez-vous eu votre licence ?</label>
															<input type="text" class="form-control1" placeholder="nom de l'établissement" name="universite" required="">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>	
												<div class="form-group">
													<div class="row">
														<div class="col-md-12 grid_box1">
															<label>Filière </label>
															<input type="text" class="form-control1" placeholder="la Filière d'obtention de la licence" name="filiere" required="">
														</div>
														
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-4 grid_box1">
															<label>Genre</label>
														</div>
														<div class="col-md-4">
															<label>Masculin</label>
															<input type="checkbox"   name="genre" value="Masculin" >
														</div>
														<div class="col-md-4">
															<label>Féminin</label>
															<input type="checkbox"    name="genre" value="Féminin" >
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>	
												<div class="form-group">
													<div class="row">
														<div class="col-md-3 grid_box1">
															<label>Encours de poursuite</label>
														</div>
														<div class="col-md-3">
															<label>Etudiant(e)</label>
															<input type="checkbox"  name="alumni" id="choix" value="Etudiant(e)" class="check">
														</div>
														<div class="col-md-3">
															<label>Employé d'un service</label>
															<input type="checkbox"   name="alumni" id="choix" value="Employé d'un service" class="check">
														</div>
														<div class="col-md-3">
															<label>Employé indépendant</label>
															<input type="checkbox"   name="alumni" id="choix" value="Employé indépendant"  class="check">
														</div>

														<div class="clearfix"> </div>
													</div>
												</div>
									           <div id="monstatus">
												<div class="row hide" id="el1"  >
													<div class="col-md-6 grid_box1">
														<label>Dans quel établissement avez-vous poursuivi un master ?</label>
														<input type="text" class="form-control1" placeholder="Votre réponse" name="q1"  >
													</div>
													<div class="col-md-6 grid_box1">
														<label>Où se trouve votre établissement actuel ?</label>
														<input type="text" class="form-control1" placeholder="Votre réponse" name="q2"  >
													</div>
													<div class="col-md-6 grid_box1">
														<label>Quelle est votre spécialité ou domaine </label>
														<input type="text" class="form-control1" placeholder="Votre réponse" name="q3">
													</div>
													<div class="col-md-6 grid_box1">
														<label>Combien de temps avez-vous mis pour trouver un master ?</label>
														<input type="text" class="form-control1" placeholder="Votre réponse" name="q4">
													</div>
											</div>
											<div class="row hide" id="el2" >
												<div class="col-md-6 grid_box1">
													<label>Combien de temps avez-vous mis pour trouver un travail ?</label>
													<input type="text" class="form-control1" placeholder="Votre réponse" name="q5">
												</div>
												<div class="col-md-6 grid_box1">
													<label>Où travaillez-vous et quel est le nom de la société ?</label>
													<input type="text" class="form-control1" placeholder="Votre réponse " name="q6">
												</div>
												<div class="col-md-6 grid_box1">
													<label>Quel type de contrat avez vous signé et le poste que vous occupez ?</label>
													<input type="text" class="form-control1" placeholder="Votre réponse" name="q7" >
												</div>
												<div class="col-md-6 grid_box1">
													<label>Quelle est la fourchette de votre salaire ?</label>
													<input type="text" class="form-control1" placeholder="Votre réponse" name="q8">
												</div>
										</div>
										<div class="row hide" id="el3"  >
											<div class="col-md-6 grid_box1">
												<label>Quel genre de travail faites-vous ?</label>
												<input type="text" class="form-control1" placeholder="Votre réponse" name="q9">
											</div>
											<div class="col-md-6 grid_box1">
												<label>Quel est le lieu de votre travail ?</label>
												<input type="text" class="form-control1" placeholder="Votre réponse " name="q10">
											</div>
											<div class="col-md-6 grid_box1">
												<label>Combien de temps avez-vous mis pour trouver ce travail ?</label>
												<input type="text" class="form-control1" placeholder="Votre réponse" name="q11">
											</div>
											<div class="col-md-6 grid_box1">
												<label>Combien gagnez vous par mois ?</label>
												<input type="text" class="form-control1" placeholder="Votre réponse" name="q12">
											</div>
									  </div>
									   	
									 </div>
												<div class="form-group" >
													<div class="row" id="status">
														
														<div class="clearfix"> </div>
													</div>
												</div>	
                                             <div class="col-md-12 form-group button-2">
										    <center>  <button type="submit" class="btn btn-primary" name="Soumettre">Soumettre</button>
										     <button type="reset" class="btn btn-default">Annuler</button>
											<p class="sign">Vous avez dèjà un compte ? <a href="index.php">Se connecter</a></p>
										    </center>
										    </div>
										   <div class="clearfix"> </div>
										   </form>
										</div>
									
								
									</div>	
									</div>
									 <footer>
									 <p>© Copyright Alumni web of MO department 2018 . Tous les droits sont réservés et Dévéloppé par Ibrahima Diaw - Cheikh Ibrahima Gueye & Awa Pouye</p>
										</footer>
									
												
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
										
	</body>
	</html>

									<!--//outer-wp-->