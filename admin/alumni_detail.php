<?php  
$id=$_GET['id'];

$algebre=$db->prepare("SELECT * from membre where id='$id'");
$algebre->execute();
$detail=$algebre->fetch();


?>
<br><br>
<div class="container panel panel-primary">
	<div class="row panel-heading">
		<div class="col-md-12" align="center">
			Information sur <?php echo $detail['prenom'].' '.$detail['nom']; ?>
		</div>	
	  </div>
	 <div class=" panel panel-body">
	  <div class="row">
	  	<div class="col-md-6">
	  		<b>Prénom:</b>
	  		<?php echo $detail['prenom']; ?>
	  	</div>
	  	<div class="col-md-6">
	  		<b>Nom:</b>
	  		<?php echo $detail['nom']; ?>
	  	</div>
	  </div>
	  <div class="row">
	  	<div class="col-md-6">
	  		<b>Date Naissance:</b>
	  		<?php echo $detail['naissance']; ?>
	  	</div>
	  	<div class="col-md-6">
	  		<b>Lieu de naissance:</b>
	  		<?php echo $detail['adresse']; ?>
	  	</div>
	  </div>
	  <div class="row">
	  	<div class="col-md-6">
	  		<b>Adresse email:</b>
	  		<?php echo $detail['mail']; ?>
	  	</div>
	  	<div class="col-md-6">
	  		<b>Téléphone:</b>
	  		<?php echo $detail['telephone']; ?>
	  	</div>
	  </div>
	  <div class="row">
	  	<div class="col-md-6">
	  		<b>Filière:</b>
	  		<?php echo $detail['filiere']; ?>
	  	</div>
	  	<div class="col-md-6">
	  		<b>Promotion:</b>
	  		<?php echo $detail['promo']; ?>
	  	</div>
	  </div>
	  <div class="row">
	  	<div class="col-md-6">
	  		<b>Etablissement:</b>
	  		<?php echo $detail['universite']; ?>
	  	</div>
	  	<div class="col-md-6">
	  		<b>Genre:</b>
	  		<?php echo $detail['genre']; ?>
	  	</div>
	  </div>
	   <?php
        if ($detail['encours_de_poursuite']=="Etudiant(e)")
         {
        echo '
        <div class="row">
        <div class="col-md-6">
	  		<b>Situation actuelle:</b>
	     '.$detail["encours_de_poursuite"].'
	  	</div>
	  	<div class="col-md-6">
	  		<b>Etablissement Actuel:</b>
	  		 '.$detail["etablissement"].'
	  	</div>
	  	
	  </div>
	  <div class="row">
        <div class="col-md-6">
	  		<b>Adresse etablissement:</b>
	     '.$detail["adresse_etablissement"].'
	  	</div>
	  	<div class="col-md-6">
	  		<b>Spécialité:</b>
	  		 '.$detail["specialite"].'
	  	</div>
	  	
	  </div>
        	';
        }
        elseif ($detail['encours_de_poursuite']=="Employé d'un service") 
        {
         echo '
        <div class="row">
        <div class="col-md-6">
	  		<b>Situation actuelle:</b>
	     '.$detail["encours_de_poursuite"].'
	  	</div>
	  	<div class="col-md-6">
	  		<b>Société ou Entreprise:</b>
	  		 '.$detail["societe"].'
	  	</div>
	  	
	  </div>
	  <div class="row">
        <div class="col-md-6">
	  		<b>Type de contrat:</b>
	     '.$detail["contrat"].'
	  	</div>
	  	<div class="col-md-6">
	  		<b>Salaire:</b>
	  		 '.$detail["fourchette"].'
	  	</div>
	  	
	  </div>
        	';
        }
        elseif ($detail['encours_de_poursuite']=="Employé indépendant") 
        {
         echo '
        <div class="row">
        <div class="col-md-6">
	  		<b>Situation actuelle:</b>
	     '.$detail["encours_de_poursuite"].'
	  	</div>
	  	<div class="col-md-6">
	  		<b>Type de travail:</b>
	  		 '.$detail["type_travail"].'
	  	</div>
	  	
	  </div>
	  <div class="row">
        <div class="col-md-6">
	  		<b>Lieu de travail:</b>
	     '.$detail["lieu"].'
	  	</div>
	  	<div class="col-md-6">
	  		<b>Salaire:</b>
	  		 '.$detail["salaire"].'
	  	</div>
	  	
	  </div>
        	';
        }
        elseif ($detail['encours_de_poursuite']=="Chômeur")
        	
         {
        	echo '
        <div class="row">
        <div class="col-md-12">
	  		<b>Lieu de travail:</b>
	     '.$detail["encours_de_poursuite"].'
	  	</div>
	  </div>

        	';
        }
       
	     ?>
	    <br>
	   <div class="row">
	   	<div class="col-md-3"></div>
	    <div class="col-md-6">
	     <img src="../album/<?php echo $detail['avatar']; ?>" style="width: 400px;height: 300px">
	  	</div>
	  	<div class="col-md-3"></div>
	  </div>

	</div>
</div>