
<?php 
require_once '../setting/config.php';


if (isset($_GET['supid'])) {

$id= $_GET['supid'];
$alumni->delete_evenement($id);

echo "<script> alerte'Supprimé avec succés';</script>";
# code...

}





?>
<!--outter-wp-->
<div class="outter-wp">
<!--sub-heard-part-->
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="index.php">Home</a></li>
<li class="active">Liste événement</li>
</ol>
</div>
<!--//sub-heard-part-->
<div class="graph-visual tables-main">
<h3 class="inner-tittle two"><center>Liste évènement</center> </h3>
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
				<table class="table table-bordered"> 
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
					 		  	
					<a  class="tooltips" href="index.php?page=event_edit&eventid=<?php echo $evenement_info['id']; ?>"><span>éditer</span><i class="blue fa fa-edit"></i></a>
					<a class="tooltips" href="index.php?page=listEvent&supid=<?php echo $evenement_info['id']; ?>" name="supprimer"><span>Supprimer</span><i class="red fa fa-trash-o"></i></a>
					<a href="index.php?page=detail_evenement&id=<?php echo $evenement_info['id']; ?>""><button class="orange">Détail</button></a>
                        </td>
						</tr>
		
						<?php $n++; } ?>
					
					</tbody> 
					</table>
			</div>

</div>

	
	
	
</div>
<!--//graph-visual-->
</div>
<!--//outer-wp-->
