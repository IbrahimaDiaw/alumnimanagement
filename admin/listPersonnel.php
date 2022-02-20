<?php 
if (isset($_GET['supid'])) {

$id= $_GET['supid'];
$alumni->delete_admin($id);

echo "<script> alert'Supprimé avec succés';</script>";
# code...

}



?>
<!--outter-wp-->
<div class="outter-wp">
<!--sub-heard-part-->
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="index.php">Home</a></li>
<li class="active">liste des administrateurs</li>
</ol>
</div>
<!--//sub-heard-part-->
<div class="graph-visual tables-main">
<h2 class="inner-tittle"><center>Liste des administrateurs</center></h2>
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
<table class="table">
		<thead>
			<tr>
			  <th>#</th>
			  <th>Prénom</th>
			  <th>Nom</th>
			  <th>Nom utilisateur</th>
			  <th>Adresse</th>
			  <th>Contact</th>
			  <th>Genre</th>
			  <th>Fonction</th>
			  <th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $list_admin_dis=$alumni->list_admin(); 
            $n=1;
            while ($admin_info=$list_admin_dis->fetch_assoc()) 
            {
            	?>
			<tr>
			  <th scope="row">
			  	<?php echo $n; ?>
			  </th>
			  <td><?php echo $admin_info['prenom']; ?></td>
			  <td><?php echo $admin_info['nom']; ?></td>
			  <td><?php echo $admin_info['username']; ?></td>
			  <td><?php echo $admin_info['adresse']; ?></td>
			  <td><?php echo $admin_info['contact']; ?></td>
			  <td><?php echo $admin_info['genre']; ?></td>
			  <td><?php echo $admin_info['fonction']; ?></td>
			  <td>
			  	<a class="tooltips" href="index.php?page=personnel_edit&personnelid=<?php echo $admin_info['id']; ?>" name="supprimer"><span>Editer</span><i class="blue fa fa-edit"></i></a>
		        <a class="tooltips" href="index.php?page=listPersonnel&supid=<?php echo $admin_info['id']; ?>" name="supprimer"><span>supprimer</span><i class="red fa fa-trash-o"></i></a>
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
