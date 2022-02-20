<?php require_once  '../setting/config.php'; ?>
<div class="outter-wp">
<!--/tabs-->
<div class="tab-main">
<!--/tabs-inner-->
<div class="tab-inner">
	<div id="tabs" class="tabs">
		<h2 class="inner-tittle">Bonjour,<strong tyle="color: blue;"><?php echo $data['prenom']."".$data['nom']; ?></strong>
			</h2>
		<div class="graph">
			<nav>
				<ul>
					<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-user"></i> <span>Information</span></a></li>
					<li><a href="#section-2" class="icon-cup"><i class="fa fa-lock"></i> <span>Changer mot de passe</span></a></li>
					<li><a href="#section-4" class="icon-lab"><i class="fa fa-globe"></i> <span>Evènements</span></a></li>
					<li><a href="#section-5" class="fa fa-plane"> <span>Offre d'emploi</span></a></li>
				</ul>
			</nav>
			<div class="content tab">
				<section id="section-1">
					<div class="mediabox">
						<strong>Information Personnelle</strong>
						<p> <strong>Prenon</strong>,
							<?php echo $data['prenom']; ?>
						</p>
						<p> <strong>Nom:</strong>
						   <?php echo $data['nom']; ?>	
						</p>
						<p><strong>Date de Naissance: </strong>
							<?php echo $data['naissance'] ?>
						</p>
						<p><strong>Genre: </strong>
							<?php echo $data['genre'] ?>
						</p>
						<p> <strong>Promotion:</strong>
						 <?php echo $data['promo']; ?>	
						</p>
						<p> <strong>Filière:</strong>
						    <?php echo $data['filiere']; ?>	
						</p>

					</div>
					<div class="mediabox">
						<strong>Details contact</strong>

						<p> <strong>Addresse:</strong>
						  <?php echo $data['adresse']; ?>
						</p>
						<p> <strong>Téléphone:</strong>
							<?php echo $data['telephone']; ?>
						</p>
						<p> <strong>Adresse email:</strong>
						    <?php echo $data['mail']; ?>	
						</p>
						<p> <strong>Université:</strong>
						    <?php echo $data['universite']; ?>	
						</p>
					</div>
					<div class="mediabox">
						<strong>Situation Actuelle</strong>
						<p><strong>Situation Actuelle: </strong>
						<?php echo $data['encours_de_poursuite']; ?>	
						</p>
						<?php if ($data['encours_de_poursuite']=="Etudiant(e)") {
						  echo "<p><strong>Etablissement Actuel: </strong>".$data['etablissement']."<p>";
						  echo "<p><strong>Lieu: </strong>".$data['adresse_etablissement']."<p>";
						  echo "<p><strong>Formation: </strong>".$data['specialite']."<p>";

						} elseif ($data['encours_de_poursuite']=="Employé d'un service") {
						  echo "<p><strong>Société: </strong>".$data['societe']."<p>";
						  echo "<p><strong>Contrat et Poste: </strong>".$data['contrat']."<p>";
						  echo "<p><strong>Fourchette de salaire: </strong>".$data['fourchette']."<p>";	
						}elseif($data['encours_de_poursuite']=="Employé indépendant") {
						  echo "<p><strong>Type de Travail: </strong>".$data['type_travail']."<p>";
						  echo "<p><strong>Lieu: </strong>".$data['lieu']."<p>";
						  echo "<p><strong>Salaire: </strong>".$data['salaire']."<p>";
						}else{
							echo "Je suis à la recherche d'un emploi";
						}
						  ?>
						
						<p><strong>Temps: </strong>
						 <?php echo $data['temps'];?>	
						</p>
					</div>
				</section>
				<section id="section-2">
				
					
					<div class="col-md-12">
                        <?php 
						if(isset($_POST['change_password']))
						{
							
							$prev_password = $data['password'];
							$old_password = $_POST['old_password'];
							
							if($prev_password!=$old_password)
							{ 
								echo "<script>alert('Old Password Does not Matched');</script>";	
							}
							else
							{
								
							$st_password_update = $_POST['new_password'];
								$sql=$db->prepare("UPDATE membre set password=? where email='$user' ");
								$sql->execute(array($st_password_update));

								print_r($sql);
							
							if($sql==true)
							{
							echo "<script>window.location = 'accueil.php';</script>";
							}
								else
								{
									echo "<script>alert('cant update password');</script>";
								}
							}
							
						}
				
						?>
						<form method="post">
						<div class="input-group input-icon">
							<span class="input-group-addon">
						<i class="fa fa-key"></i>	</span>
							<input type="password" class="form-control1 icon" name="old_password" placeholder="Ancien mot de passe">
							
						</div>
						<div class="input-group input-icon">
							<span class="input-group-addon">
						<i class="fa fa-key"></i>	</span>
							<input type="password" class="form-control1 icon" placeholder="Nouveau mot de passe" name="new_password">
							
						</div>	
				
							<input type="submit" name="change_password" class="a_demo_four" value="Changer mot de passe">
							</form>
					</div>
				</section>
				<section id="section-4">
					<div class="graph">
					<div class="tables">
					 			
					 <table class="table table-hover"> 
					  <thead>
						<tr> 
						 <th>#</th>
					 	 <th>Titre</th> 
					 	 <th>Date</th> 
					 	 <th>Auteur</th>
					 	 <th>Description</th>  
					 	 <th><center>Action</center></th>
							
						</tr> 
					  </thead> 
					   <tbody>
							<?php $list_evenement_dis=$alumni->list_evenement(); 
                        $n=1;
                        while ($evenement_info=$list_evenement_dis->fetch_assoc()) 
                        {
                        	?>
                        <tr> 
					 		<th scope="row">
                             <?php echo $n; ?>
					 		</th>
					 		 <td><?php echo $evenement_info['titre']; ?></td> 
					 		 <td><?php echo $evenement_info['date']; ?></td>
					 		  <td><?php echo $evenement_info['auteur']; ?></td>
					 		  <td><?php echo $evenement_info['description']; ?></td>  
					 		  <td>
					 		  	
					<a href="../evenement.php?id=<?php echo $evenement_info['id']; ?>""><button class="orange">Détail</button></a>
                        </td>
						</tr>
                        <?php $n++; } ?>		
					  </tbody> 
					 </table>
					</div>
					</div>
				</section>
				<section id="section-5">
					<table class="table table-hover"> 
	  	<thead> 
	  		<tr> 
	  			<th>Id</th> 
	  			<th>Nom Entreprise</th> 
	  			<th>Titre Annonce</th> 
	  			<th>Mission</th> 
	  			<th>Profil recherché</th> 
	  			<th>Description</th> 
	  			<th>Type contrat</th> 
	  			<th>Date</th> 
	  			<th>Action</th> 

	  		</tr> 
	  	</thead> 
	  	<tbody> 
	  	<?php 
          $liste_offre=$alumni->liste_offre();
          foreach ($liste_offre as $key => $v) 
          {
           ?>
	  		<tr> 
	  			<th scope="row">
	  				<?php echo $v['id']; ?>
	  					
	  			</th> 
	  			<td><?php echo $v['entreprise']; ?></td> 
	  			<td><?php echo $v['titre']; ?></td> 
	  			<td><?php echo $v['mission']; ?></td> 
	  			<td><?php echo $v['profil']; ?></td> 
	  			<td><?php echo $v['description']; ?></td> 
	  			<td><?php echo $v['contrat']; ?></td>
	  			<td><?php echo $v['date']; ?></td>
	  			<td> 
              <a class="tooltips" href="../offre_detail.php?id=<?php echo $v['id'];?>"><span>Detail</span><i class="blue fa fa-info-circle"></i></a>
            </td>
	  		</tr> 

	  		<?php }; ?> 
	  	</tbody> 
	  </table>
				</section>
			</div>
			<!-- /content -->
		</div>
		<!-- /tabs -->

	</div>
		
	<script src="js/cbpFWTabs.js"></script>
	<script>
		new CBPFWTabs(document.getElementById('tabs'));
	</script>
	<div class="clearfix"> </div>
</div>
</div>
<!--//tabs-inner-->

<!--//outer-wp-->
</div>