<?php 
       
       $msg="";
        
      if (isset($_POST['envoi'])) 
      {
        $entreprise=$_POST['entreprise']; 	
        $description=$_POST['description']; 	
        $secteur=$_POST['secteur']; 	
        $site=$_POST['site']; 	
        $slogan=$_POST['slogan']; 	
        $titre=$_POST['titre']; 	
        $mission=$_POST['mission']; 	
        $date_debut=$_POST['date_debut']; 	
        $contrat=$_POST['contrat']; 	
        $duree=$_POST['duree']; 	
        $ville=$_POST['ville']; 	
        $profil=$_POST['profil']; 	
        $niveau=$_POST['niveau']; 	
        $competence=$_POST['competence'];  	

         
        $sql=$db->prepare("SELECT * from offre  where titre='$titre' and entreprise='$entreprise' and mission='$mission' and secteur='$secteur' and date_debut='$date_debut'");
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();
        $donnee=$sql->fetch();
        if ($donnee>0) 
        {
          $msg='<label class="alert-info">Cette offre existe dèjà. Veuillez essayer une autre</label>'; 
        }
        else
        {
        	$requete=$db->prepare("INSERT into offre set entreprise=?,description=?,secteur=?,site=?,slogan=?,titre=?,mission=?,date_debut=?,contrat=?,duree=?,ville=?,profil=?,niveau=?,competence=?");
        	$requete->execute(array($entreprise,$description,$secteur,$site,$slogan,$titre,$mission,$date_debut,$contrat,$duree,$ville,$profil,$niveau,$competence));
        	if ($requete==true) 
        	{
        	   $msg='<label class="alert-success"> Félicitation votre Offre a été sauvegardée avec succès</label>';
        	}
        	else
        	{
        		$msg='<label class="alert-danger">Echec de sauvegarde</label>' ;
        	}
        }
        


       }   



 ?>
<!--Oup-->
<div id="wrapper">
  <div id="page-wrapper">
  	 <div class="container">
<!-- Page Heading -->
      <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
           <li><a href="accueil.php">Home</a></li>
           <li class="active">Offre</li>
       </ol>
      </div>
       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header" align="center">Publication d'une offre </h1>
           </div>
       </div>
     <form method="post" action="">


	     <div class="container">
	     	<p><?php echo $msg; ?></p>
	     	<div class="row">
	     	  <div class="col-lg-6"><i class="fa fa-briefcase">&nbsp;</i><b>Mon Entreprise</b></div>
	     	  <div class="col-lg-6"><i class="fa fa-certificate">&nbsp;</i><b>Le Poste</b></div>
            </div><hr>
            <div class="row">
	     	  <div class="col-lg-6">
	     	  	<div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Nom de l'entreprise</label>
	        	         <input type="text" name="entreprise" class="form-control" required="" placeholder="Ex: CCPS , DIGITECH" />
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Descriptif de l'entreprise</label>
	        	        <textarea class="form-control" name="description" cols="50" rows="6">
	        		
	        	        </textarea>
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Secteur de l'entreprise</label>
	        	         <input type="text" name="secteur" class="form-control" required="" />
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Site de l'entreprise</label>
	        	         <input type="text" name="site" class="form-control" required="" />
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Slogan de l'entreprise</label>
	        	         <input type="text" name="slogan" class="form-control" required="" />
	                  </div>
	     	  		</div>
	     	  	</div>


	     	  </div>
	     	  <div class="col-lg-6">
	     	  	<div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Titre de l'annonce</label>
	        	         <input type="text" name="titre" class="form-control" required="" placeholder="Ex: Developpeur Web" />
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
	        	      <label>Mission</label>
	        	      <textarea class="form-control" name="mission" cols="50" rows="6">
	        		
	        	     </textarea>
	                </div>
                </div>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
	        	      <label>Date Début</label>
	        	      <input type="date" name="date_debut" class="form-control" required="" />
	                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
	        	      <label>Contrat</label>
	        	      <select class="form-control1" name="contrat">
	        	      	<option>Selectionner un contrat</option>
	        	      	<option>Stage</option>
	        	      	<option>Job Etudiant</option>
	        	      	<option>CDD</option>
	        	      	<option>CDI</option>
	        	      </select>
	                </div>
                </div>
               </div>
               <div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Durée</label>
	        	        <select class="form-control1" name="duree">
	        	      	<option>Selectionner la durée de l'offre</option>
	        	      	<option>Moins de 3 mois</option>
	        	      	<option>Entre 3 mois et 6 mois</option>
	        	      	<option>Plus de 12 mois</option>
	        	      	<option>Entre 12 et 24 mois</option>
	        	      	<option>12 mois </option>
	        	      	<option>36mois </option>
	        	      	<option>24 mois </option>
	        	      	<option>Plus de 24 mois </option>

	        	      </select>
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
	        	      <label>Ville</label>
	        	      <input type="text" name="ville" class="form-control" required="" />
	                </div>
                </div>
               </div>

               </div>


            </div><hr>
            <div class="row">
             <div class="col-lg-12">
             	<b><i class="fa fa-user">&nbsp;</i>Profil Recherché</b>
             </div>	
            </div><hr>
             <div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Descriptif du profil</label>
	        	        <textarea class="form-control" name="profil" cols="50" rows="6">
	        		
	        	        </textarea>
	                  </div>
	     	  		</div>
	     	 </div>
             <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
	        	      <label>Niveau d'étude</label>
	        	      <select class="form-control1" name="niveau">
	        	      	<option>Selectionner le niveau d'étude</option>
	        	      	<option>BEP,CAP</option>
	        	      	<option>Bac</option>
	        	      	<option>BTS,DUT,BAC+2</option>
	        	      	<option>Licence</option>
	        	      	<option>Master,Titre ingénieur,Bac+5</option>
	        	      	<option>Doctorat,Bac+8</option>
	        	      </select>
	                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
	        	      <label>Compétences</label>
	        	      <input type="text" name="competence" class="form-control" required="" placeholder="ex: Informatique, Droit, Mathematique" />
	                </div>
                </div>
             </div>
             <div class="clearfix"></div>
	        <div class="form-group">
	        	<input type="submit" name="envoi" value="Envoyer" class="btn btn-primary" />
	        	<input type="reset" name="annuler" value="annuler" class="btn btn-danger" />
	        </div>
	     </div>
	     <br>
	     <br>
	
     </form>
   </div>
  </div>
</div>