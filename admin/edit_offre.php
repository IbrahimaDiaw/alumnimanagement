<?php 

       $id=$_GET['id'];
        $sql=$db->prepare("SELECT * from offre  where id=$id");
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute(array($id));
        $donnee=$sql->fetch();
       
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

         
       
        $requete=$db->prepare("UPDATE offre set entreprise=?,description=?,secteur=?,site=?,slogan=?,titre=?,mission=?,date_debut=?,contrat=?,duree=?,ville=?,profil=?,niveau=?,competence=? where id='$id'");
        $requete->execute(array($entreprise,$description,$secteur,$site,$slogan,$titre,$mission,$date_debut,$contrat,$duree,$ville,$profil,$niveau,$competence));
        	if ($requete==true) 
        	{
        	   $msg='<label class="alert-success"> Félicitation votre Offre a été mise à jour avec succès</label>';
        	}
        	else
        	{
        		$msg='<label class="alert-danger">Echec de mise à jour</label>' ;
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
	        	         <input type="text" name="entreprise" class="form-control" value="<?php echo $donnee['entreprise'];?>" />
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Descriptif de l'entreprise</label>
	        	        <textarea class="form-control" name="description" cols="50" rows="6">
	        		      <?php echo $donnee['description'];?>
	        	        </textarea>
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Secteur de l'entreprise</label>
	        	         <input type="text" name="secteur" class="form-control" value="<?php echo $donnee['secteur'];?>" />
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Site de l'entreprise</label>
	        	         <input type="text" name="site" class="form-control" value="<?php echo $donnee['site'];?>" />
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Slogan de l'entreprise</label>
	        	         <input type="text" name="slogan" class="form-control" value="<?php echo $donnee['slogan'];?>" />
	                  </div>
	     	  		</div>
	     	  	</div>


	     	  </div>
	     	  <div class="col-lg-6">
	     	  	<div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Titre de l'annonce</label>
	        	         <input type="text" name="titre" class="form-control" value="<?php echo $donnee['titre'];?>" />
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
	        	      <label>Mission</label>
	        	      <textarea class="form-control" name="mission" cols="50" rows="6">
	        		 <?php echo $donnee['mission'];?>
	        	     </textarea>
	                </div>
                </div>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
	        	      <label>Date Début</label>
	        	      <input type="date" name="date_debut" class="form-control" value="<?php echo $donnee['date_debut'];?>" />
	                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
	        	      <label>Contrat</label>
	        	      <select class="form-control1" name="contrat">
	        	      	<option>Selectionner un contrat</option>
	        	      	<option <?php 
                                if ($donnee['contrat']=='Stage') {
                                	echo "selected";
                                }
	        	      	     ?>>Stage</option>
	        	      	<option <?php 
                                if ($donnee['contrat']=='CDD') {
                                	echo "selected";
                                }
	        	      	     ?>>CDD</option>
	        	      	<option <?php 
                                if ($donnee['contrat']=='CDI') {
                                	echo "selected";
                                }
	        	      	     ?>>CDI</option>
	        	      </select>
	                </div>
                </div>
               </div>
               <div class="row">
	     	  		<div class="col-lg-12">
	     	  		  <div class="form-group">
	        	        <label>Durée</label>
	        	        <select class="form-control1" name="duree">
	        	      	<option></option>
	        	      	<option <?php 
                                if ($donnee['duree']=='Moins de 3 mois') {
                                	echo "selected";
                                }
	        	      	     ?>>Moins de 3 mois</option>
	        	      	<option <?php 
                                if ($donnee['duree']=='Entre 3 mois et 6 mois') {
                                	echo "selected";
                                }
	        	      	     ?>>Entre 3 mois et 6 mois</option>
	        	      	<option <?php 
                                if ($donnee['duree']=='Plus de 12 mois') {
                                	echo "selected";
                                }
	        	      	     ?>>Plus de 12 mois</option>
	        	      	<option <?php 
                                if ($donnee['duree']=='Entre 12 et 24 mois') {
                                	echo "selected";
                                }
	        	      	     ?>>Entre 12 et 24 mois</option>
	        	      	<option <?php 
                                if ($donnee['duree']=='12 mois') {
                                	echo "selected";
                                }
	        	      	     ?>>12 mois </option>
	        	      	<option <?php 
                                if ($donnee['duree']=='36 mois') {
                                	echo "selected";
                                }
	        	      	     ?>>36 mois </option>
	        	      	<option  <?php 
                                if ($donnee['duree']=='24 mois') {
                                	echo "selected";
                                }
	        	      	     ?>>24 mois </option>
	        	      	<option <?php 
                                if ($donnee['duree']=='Plus de 24 mois') {
                                	echo "selected";
                                }
	        	      	     ?>>Plus de 24 mois </option>

	        	      </select>
	                  </div>
	     	  		</div>
	     	  	</div>
	     	  	<div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
	        	      <label>Ville</label>
	        	      <input type="text" name="ville" class="form-control" value="<?php echo $donnee['ville'];?>" />
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
	        		     <?php echo $donnee['profil'];?>
	        	        </textarea>
	                  </div>
	     	  		</div>
	     	 </div>
             <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
	        	      <label>Niveau d'étude</label>
	        	      <select class="form-control1" name="niveau">
	        	      	<option></option>
	        	      	<option <?php 
                                if ($donnee['niveau']=='BEP,CAP') {
                                	echo "selected";
                                }
	        	      	     ?>>BEP,CAP</option>
	        	      	<option <?php 
                                if ($donnee['niveau']=='Bac') {
                                	echo "selected";
                                }
	        	      	     ?>>Bac</option>
	        	      	<option <?php 
                                if ($donnee['niveau']=='BTS,DUT,BAC+2') {
                                	echo "selected";
                                }
	        	      	     ?>>BTS,DUT,BAC+2</option>
	        	      	<option <?php 
                                if ($donnee['niveau']=='Licence') {
                                	echo "selected";
                                }
	        	      	     ?>>Licence</option>
	        	      	<option <?php 
                                if ($donnee['niveau']=='Master,Titre ingénieur,Bac+5') {
                                	echo "selected";
                                }
	        	      	     ?>>Master,Titre ingénieur,Bac+5</option>
	        	      	<option <?php 
                                if ($donnee['niveau']=='Doctorat,Bac+8') {
                                	echo "selected";
                                }
	        	      	     ?>>Doctorat,Bac+8</option>
	        	      </select>
	                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
	        	      <label>Compétences</label>
	        	      <input type="text" name="competence" class="form-control" value="<?php echo $donnee['competence'];?>" />
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