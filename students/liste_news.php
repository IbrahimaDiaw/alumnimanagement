<?php 
require_once '../setting/config.php';


     if (isset($_GET['supid'])) {
     	
      	 $id= $_GET['supid'];
      	 $alumni->delete_actualites($id);

      }





 ?>
 <meta charset="utf-8">

	<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="accueil.php">Home</a></li>
											<li class="active">Actualités</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">

											 <h2 class="inner-tittle"><center style="font-family: algerian;">Informations sur les actualités</center></h2>
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
																		  <th>id</th>
																		  <th>Image</th>
																		  <th>Titre</th>
																		  <th>Auteur</th>
																		  <th>Description</th>
																		  <th>Date de publication</th>
																		  <th>Action</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php

																		 $liste_actualites_dis=$alumni->liste_actualites(); 
                                                                        
                                                                        foreach ($liste_actualites_dis as $k => $v)
                                                                         {
                                                                         
                                                                        	?>
                                                                       
																		<tr>
																		  <th scope="row"><?php echo $v['id'] ; ?></th>
																		  
																		  <td><img src="../album/<?php echo $v['image'] ; ?>" style="width:100px; height:100px;"></td>
																		  <td><?php echo $v['titre'] ; ?></td>
																		  <td><?php echo $v['auteur'] ; ?></td>
																		  <td><?php echo $v['description'] ; ?></td>
																		  <td><?php echo $v['date'] ; ?></td>
																		  
																		  <td>
																	<a class="tooltips" href="accueil.php?page=publienews"><span>Ajouter</span><i class="green fa fa-pencil"></i></a>
																	<a class="tooltips" href="accueil.php?page=edit_news&id=<?php echo $v['id'];?>"><span>Editer</span><i class="blue fa fa-edit"></i></a>
																	<a class="tooltips" href="accueil.php?page=liste_news&supid=<?php echo $v['id']; ?>" name="supprimer"><span>Supprimer</span><i class="red fa fa-trash-o"></i></a>
																	<a href="accueil.php?page=detail_news&id=<?=$v['id'];?>"><button>Plus infos</button></a>
																		  </td>
																		  </td>
																		 
                                                                        
																		</tr>
																		<?php } ?>
																	</tbody>
																</table>
															</div>
												
										        </div>
												
													
													
													
										</div>
										<!--//graph-visual-->
									</div>
									<!--//outer-wp-->
									