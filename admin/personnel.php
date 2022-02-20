<?php  

require_once  '../setting/config.php';
       $msg="";

    if (isset($_POST['soumettre'])) {
    	# code...

         $prenom=$_POST['prenom'];
         $nom  =$_POST['nom'];
         $email =$_POST['email'];
          $adresse = $_POST['adresse'];
          $password = $_POST['password'];
          $cpassword = $_POST['cpassword'];
          $genre=$_POST['add_t_gender'];
          $tel =$_POST['tel'];
          $fonction = $_POST['fonction'];

          $img_name = $_FILES['imglink']['name'];
          $img_size =$_FILES['imglink']['size'];
	      $img_tmp =$_FILES['imglink']['tmp_name'];
				
		  $destination = '../album/';
		  $target_file = $destination.$img_name;



         	  $repetition = $alumni->repetition_admin($email,$tel);
         	 if (($repetition)>0) {

         	   $msg= '<label class="alert alert-info">Cet utilisateur existe déjà veuillez essayer un autre</label>';
         	 }

         	elseif ($password == $cpassword) {
         	move_uploaded_file($img_tmp,$target_file);
         	$ajou_fait= $alumni->inscrit_admin($img_name,$prenom,$nom,$email,$adresse,$tel,$password,$cpassword,$genre,$fonction);
         	if ($ajou_fait==true) {

         		$msg='<label class="alert alert-success">Enrégistré avec succès</label>';
         	}
         	else{

         		$msg='<label class="alert alert-danger">Opération échouée</label>';
         	}
         	
         }
    }











?>

				<div class="outter-wp">
				<!--/sub-heard-part-->
				<div class="sub-heard-part">
				<ol class="breadcrumb m-b-0">
				<li><a href="index.php">Home</a></li>
				<li class="active">Personnel</li>
				</ol>
				</div>	
				<!--/sub-heard-part-->	
				<!--/forms-->
				<div class="forms-main">
				<h2 class="inner-tittle"><center>Formulaire Admin</center></h2>
				<div class="graph-form">
				<div class="validation-form">
				<!---->
				<p><?php echo $msg; ?></p>
				<form method="post" enctype="multipart/form-data" >
				<div class="form-group col-md-12">
					<input type="file" name="imglink" accept=".jpg,.png,.jpeg"/ >
				</div>
				<div class="vali-form">
				<div class="col-md-6 form-group1">
				  <label class="control-label">Prénom</label>
				  <input type="text" placeholder="Prénom" required="" name="prenom">
				</div>
				<div class="col-md-6 form-group1 form-last">
				  <label class="control-label">Nom de famille</label>
				  <input type="text" placeholder="Nom de famille" required="" name="nom">
				</div>
				<div class="clearfix"> </div>
				</div>
				<div class="vali-form">
				<div class="col-md-6 form-group1 group-mail">
				  <label class="control-label">Email</label>
				  <input type="text" placeholder="Adresse email" required="" name="email">
				</div>

				<div class="col-md-6 form-group1 ">
				  <label class="control-label">Adresse</label>
				  <textarea placeholder="Adresse" required="" name="adresse"></textarea>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="vali-form">
				 <div class="col-md-6 form-group1 group-mail">
				  <label class="control-label">Mot de passe</label>
				  <input type="password" placeholder="Mot de passe" required="" name="password">
				</div>
				<div class="col-md-6 form-group1 group-mail">
				  <label class="control-label">Confirmer mot de passe</label>
				  <input type="password" placeholder="Confirmer mot de passe" required="" name="cpassword">
				</div>
					
				</div>
				<div class="clearfix"> </div><br>
				 <div class="form-group col-md-12">
				<select id="selector1" class="form-control1" name="add_t_gender" >
				   <option>Selectionner le genre</option>
				    <option value="Masculin">Masculin</option>
				   <option value="Féminin">Féminin</option>
				    </select>
				</div>


				 <div class="clearfix"> </div>

				 <div class="clearfix"> </div>
				 <div class="vali-form vali-form1">
				<div class="col-md-6 form-group1">
				  <label class="control-label">Contact</label>
				  <input type="text" placeholder="Numéro de téléphone" required="" name="tel">
				</div>
				<div class="col-md-6 form-group1 form-last">
				  <label class="control-label">Fonction</label>
				  <input type="text" placeholder="fonction administrative" required="" name="fonction">
				</div>
				<div class="clearfix"> </div>
				</div>
				<div class="col-md-12 form-group button-2">
				  <input name="soumettre" type="submit" class="btn btn-primary" value="Soumettre">
				  <button type="reset" class="btn btn-default">Annuler</button>
				</div>
				<div class="clearfix"> </div>
				</form>

				<!---->
				</div>

				</div>
				</div> 
				<!--//forms-->											   
				</div>
				<!--//outer-wp-->