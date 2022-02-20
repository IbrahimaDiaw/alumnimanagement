       <meta charset="utf-8">

		<!--outter-wp-->
		<div class="outter-wp">
		<!--sub-heard-part-->
		<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
		<li><a href="index.php">Home</a></li>
		<li class="active">Liste des offres d'emploi</li>
		</ol>
		</div>
		<!--//sub-heard-part-->
		<div class="graph-visual tables-main">

		<h2 class="inner-tittle"><center>Liste des offres d'emploi</center></h2>
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

			
<div class="graph">
	<div class="tables">
								
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
<a class="tooltips" href="index.php?page=edit_offre&id=<?php echo $v['id'];?>"><span>Editer</span><i class="blue fa fa-edit"></i></a>
<a class="tooltips" href="index.php?liste_offre&supid=<?php echo $v['id']; ?>" name="supprimer"><span>Supprimer</span><i class="red fa fa-trash-o"></i></a>
<a class="tooltips" href="../offre_detail.php?id=<?php echo $v['id'];?>"><span>Detail</span><i class="blue fa fa-info-circle"></i></a>
            </td>
	  		</tr> 

	  		<?php }; ?> 
	  	</tbody> 
	  </table>
	</div>
					
  </div>					
			
</section>