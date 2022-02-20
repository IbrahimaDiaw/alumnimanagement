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
require_once '../setting/dbconnection.php';

 $requete=$db->prepare("SELECT * FROM  membre where id=:id");
       		    $requete->setFetchMode(PDO::FETCH_ASSOC);
       		    $requete->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
       		    $requete->execute();
       		    $data=$requete->fetch();

      $msg="";
    if (isset($_POST['Soumettre'])) { 

        $prenom=htmlentities($_POST['prenom']);
    	$nom=htmlentities($_POST['nom']);
    	$naissance=htmlentities($_POST['naissance']);
    	$adresse=htmlentities($_POST['adresse']);
    	$phone=htmlentities($_POST['phone']);
     	$email=htmlentities($_POST['email']);
    	$genre=$_POST['genre'];
    	$promo=htmlentities($_POST['promo']);
    	$universite=htmlentities($_POST['universite']);
    	$filiere=htmlentities($_POST['filiere']);
    	$alumni=htmlentities($_POST['alumni']);
    	$img_name = $_FILES['imglink']['name'];
		$img_size =$_FILES['imglink']['size'];
	    $img_tmp =$_FILES['imglink']['tmp_name'];
	    $url = '../album/';
		$target_file=$url.$img_name;

       		    
       	              
       	            move_uploaded_file($img_tmp,$target_file);
    	
       		  $requete=$db->prepare("UPDATE membre SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,mail=? ,genre=?, promo=?,universite=?,filiere=?, situation_actuelle=?  where id=:id");
       			$requete->execute(array($img_name,$prenom,$nom,$naissance,$adresse,$phone,$email,$genre,$promo,$universite,$filiere,$alumni));
       			if ($requete==true)
            {
                $msg="Information mis à jour avec succès";
            }
            else
            {
                $msg="Impossible";
            }

       
    }
               

?>
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
			                                             <img id="uploadPreview" src="../album/<?php echo $data['avatar']; ?>" class="avatar" style="width:150px;text-align:center;"><br>
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
														     <input type="text" class="form-control1" placeholder="Prénom" name="prenom" required="" value="<?php echo $data['prenom']; ?>">
															</div>
															<div class="col-md-6">
															 <label>Nom</label>
														     <input type="text" class="form-control1" placeholder="Nom" name="nom"  required="" value="<?php echo $data['nom']; ?>">
															</div>
															<div class="clearfix"> </div>
														</div>
													</div>
													<div class="form-group">
													<div class="row">
														<div class="col-md-6 grid_box1">
															<label>Date de Naissance </label>
															<input type="date" class="form-control1" placeholder="" name="naissance" required="" value="<?php echo $data['naissance']; ?>">
														</div>
														<div class="col-md-6">
															<label>Adresse </label>
															<input type="text" class="form-control1" placeholder="Adresse" name="adresse" required="" value="<?php echo $data['adresse']; ?>">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-6 grid_box1">
															<label>Téléphone</label>
															<input type="number" class="form-control1" placeholder="numéro de téléphone" name="phone" required="" value="<?php echo $data['telephone']; ?>">
														</div>
														<div class="col-md-6 grid_box1">
															<label>Adresse email</label>
															<input type="text" class="form-control1" placeholder="adresse email" name="email" required="" value="<?php echo $data['mail']; ?>">
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
																<option <?php 
																if ($data['promo']=="2007") {
																 	echo "selected";
																 }  ?>>2007</option>
																
																<option <?php 
																if ($data['promo']=="2008") {
																 	echo "selected";
																 }  ?>>2008</option>
																
																<option <?php 
																if ($data['promo']=="2009") {
																 	echo "selected";
																 }  ?>>2009</option>
																
																<option <?php 
																if ($data['promo']=="2010") {
																 	echo "selected";
																 }  ?>>2010</option>
																
																<option <?php 
																if ($data['promo']=="2011") {
																 	echo "selected";
																 }  ?>>2011</option>
																
																<option <?php 
																if ($data['promo']=="2012") {
																 	echo "selected";
																 }  ?>>2012</option>
																
																<option <?php 
																if ($data['promo']=="2013") {
																 	echo "selected";
																 }  ?>>2013</option>
																
																<option <?php 
																if ($data['promo']=="2014") {
																 	echo "selected";
																 }  ?>>2014</option>
																
																<option <?php 
																if ($data['promo']=="2015") {
																 	echo "selected";
																 }  ?>>2015</option>
																
																<option <?php 
																if ($data['promo']== '2016') {
																 	echo "selected";
																 }  ?>>2016</option>
																
															</select>
														</div>
														<div class="col-md-6 grid_box1">
															<label>Dans quel établissement avez-vous eu votre licence ?</label>
															<input type="text" class="form-control1" placeholder="nom de l'établissement" name="universite" required="" value="<?php echo $data['universite']; ?>">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>	
												<div class="form-group">
													<div class="row">
														<div class="col-md-12 grid_box1">
															<label>Filière </label>
															<input type="text" class="form-control1" placeholder="la Filière d'obtention de la licence" name="filiere" required="" value="<?php echo $data['filiere']; ?>">
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
															<input type="checkbox"   name="genre" value="Masculin" 
															<?php 
																if ($data['genre']=="Masculin") 
																 {
																 	
																 	 echo "checked";
																 }  ?>

															>
															
														</div>
														<div class="col-md-4">
															<label>Féminin</label>
															<input type="checkbox"    name="genre" value="Féminin"
                                                              <?php 
																if ($data['genre']=="Féminin") 
																 {
																 	
																 	 echo "checked";
																 }  ?>
															>
															
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
															<input type="checkbox"  name="alumni" id="choix" value="Etudiant(e)" class="check" <?php 
																if ($data["situation_actuelle"]=="Etudiant(e)") 
																 {
																 	 echo "checked";
																 }  ?>>
														</div>
														<div class="col-md-3">
															<label>Employé d'un service</label>
															<input type="checkbox"   name="alumni" id="choix" value="Employé d'un service" class="check" <?php 
																if ($data["situation_actuelle"]=="Employé d'un service") 
																 {
																 	 echo "checked";
																 }  ?>>
														</div>
														<div class="col-md-3">
															<label>Employé indépendant</label>
															<input type="checkbox"   name="alumni" id="choix" value="Employé indépendant"  class="check" <?php 
																if ($data["situation_actuelle"]=="Employé indépendant") 
																 {
																 	 echo "checked";
																 }  ?>>
														</div>

														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="col-md-12 form-group button-2">
										    <center>  <button type="submit" class="btn btn-primary" name="Soumettre">Soumettre</button>
										     <button type="reset" class="btn btn-default">Annuler</button>
										 </center>
										</div>
										   </form>
										</div>
									
								
									</div>	
									</div>
									 <footer>
									 <p>© Copyright Alumni web of MO department 2018 . Tous les droits sont réservés et Dévéloppé par Ibrahima Diaw - Cheikh Ibrahima Gueye & Awa Pouye</p>
									</footer>
									
												
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