<?php 
if (isset($_GET['supid'])) {
     	
      	 $id= $_GET['supid'];
      	 $alumni->delete_alumni($id);

      	  echo "<script> alerte'Supprimé avec succés';</script>";

      }

 ?>
<div class="outter-wp">
  <!--sub-heard-part-->
	 <div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
	     <li><a href="index.php">Home</a></li>
	     <li class="active">Liste des alumni</li>
      </ol>
		 </div>
	  <!--//sub-heard-part-->
	<div class="graph-visual tables-main">

		<h2 class="inner-tittle"><center>Liste de tous les alumni</center></h2>
		<div class="graph">
		<div class="tables">
		<form action="#" method="GET">
		<div class="input-group input-group-in">
		<input type="text" name="search" class="form-control2 input-search" placeholder="Search...">
		<span class="input-group-btn">
		<button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
		</span>
		</div>
		</form>
		<!-- Input Group -->

				<table class="table">
					<thead>
						<tr>
						  <th>Numéro</th>
						 <th>Prénom</th>
						  <th>Nom</th>
						  <th>Date de Naissance</th>
						  <th>E-mail</th>
						  <th>Promotion</th>
		                  <th>Situation Actuelle</th>
		                  <th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

		                 $liste=$db->prepare("SELECT * FROM membre");
		                 $liste->execute();
						  $n=1;
						  while ($v=$liste->fetch()) 
						  {
						  if ($v['activation']=='oui') {
						  	
						   ?>
		               
						<tr>
						  <th scope="row"><?php echo $n ; ?></th>
						  
						  <td><?php echo $v['prenom'] ; ?></td>
						  <td><?php echo $v['nom'] ; ?></td>
						  <td><?php echo $v['naissance'] ; ?></td>
						  <td><?php echo $v['mail'] ; ?></td>
						  <td><?php echo $v['promo'] ; ?></td>
						  <td><?php echo $v['encours_de_poursuite'] ; ?></td>
						  <td>
					<a class="tooltips" href="index.php?page=liste_alumni&supid=<?php echo $v['id']; ?>" name="supprimer"><span>Supprimer</span><i class="red fa fa-trash-o"></i></a>
					 <a href="index.php?page=alumni_detail&statut=<?=$v['encours_de_poursuite']?>&id=<?=$v['id'];?>"><button>Détail</button></a>
						  </td>
						 
		                
						</tr>
						<?php } $n++; } ?>
					</tbody>
				</table>
			</div>

		</div>
												
													
													
													
		</div>
	  <!--//graph-visual-->
	</div>
  <!--//outer-wp-->
									