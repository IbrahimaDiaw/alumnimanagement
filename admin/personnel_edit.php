<?php  

require_once  '../setting/config.php';
$id = $_GET['personnelid'];
$edit_admin_info = $alumni->edit_adminid($id);
$edit_admin_display = $edit_admin_info->fetch_assoc();



$msg="";

if (isset($_POST['soumettre'])) {


$prenom=$_POST['prenom'];
$nom  =$_POST['nom'];
$email =$_POST['email'];
$adresse = $_POST['adresse'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$genre=$_POST['add_t_gender'];
$tel =$_POST['tel'];
$fonction = $_POST['fonction'];

$ajour_fait=$alumni->update_personnel($prenom,$nom,$email,$adresse,$tel,$password,$cpassword,$genre,$fonction,$id);
if ($ajour_fait==true) {
# code...
echo "<script>window.location='index.php?page=listPersonnel';</script>";
}
else{
$msg="Mis à jour impossible";
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
<p style="color: red;"><?php echo $msg; ?></p>
	<form method="post">
		<div class="form-group col-md-12">
			<input type="file" name="imglink" accept=".jpg,.png,.jpeg"/ >
		</div>
		<div class="vali-form">
		<div class="col-md-6 form-group1">
		  <label class="control-label">Prénom</label>
		  <input type="text" placeholder="Prénom" required="" name="prenom" value="<?php echo $edit_admin_display['prenom']; ?>" >
		</div>
		<div class="col-md-6 form-group1 form-last">
		  <label class="control-label">Nom de famille</label>
		  <input type="text" placeholder="Nom de famille" required="" name="nom" value="<?php echo $edit_admin_display['nom'];  ?>" >
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="vali-form">
		<div class="col-md-6 form-group1 group-mail">
		  <label class="control-label">Email</label>
		  <input type="text" placeholder="Adresse email" required="" name="email" value="<?php echo $edit_admin_display['username'];  ?>" >
		</div>
		
		<div class="col-md-6 form-group1 ">
		  <label class="control-label">Adresse</label>
		  <input type="text" required="" name="adresse" placeholder="Adresse de domicile" value="<?php echo $edit_admin_display['adresse']; ?>" > 
		</div>
		 <div class="clearfix"> </div>
		</div>
		<div class="vali-form">
		 <div class="col-md-6 form-group1 group-mail">
		  <label class="control-label">Mot de passe</label>
		  <input type="password" placeholder="Mot de passe" required="" name="password" value="<?php echo $edit_admin_display['password']; ?>">
		</div>
		<div class="col-md-6 form-group1 group-mail">
		  <label class="control-label">Confirmer mot de passe</label>
		  <input type="password" placeholder="Confirmer mot de passe" required="" name="cpassword" value="<?php echo $edit_admin_display['cpassword']; ?>">
		</div>
			<div class="clearfix"> </div>
		</div><br>
        <div class="col-md-12 form-group1">
        <select id="selector1" class="form-control1" name="add_t_gender" value="<?php echo $edit_admin_display['genre'];  ?>" >
           <option>Selectionner le Genre</option>
            <option <?php if ($edit_admin_display['genre']=="Masculin"):echo "selected"; ?>
            	
            <?php endif ?>>Masculin</option>
           <option <?php if ($edit_admin_display['genre']=="Féminin"):echo "selected"; ?>
            	
            <?php endif ?>>Féminin</option>
            </select>
        </div>


		 <div class="clearfix"> </div>

		 <div class="clearfix"> </div>
		 <div class="vali-form vali-form1">
		<div class="col-md-6 form-group1">
		  <label class="control-label">Contact</label>
		  <input type="text" placeholder="Numéro de téléphone" required="" name="tel" value="<?php echo $edit_admin_display['contact'];  ?>" >
		</div>
		<div class="col-md-6 form-group1 form-last">
		  <label class="control-label">Fonction</label>
		  <input type="text" placeholder="fonction administrative" required="" name="fonction" value="<?php echo $edit_admin_display['fonction']; ?>" >
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="col-md-12 form-group button-2">
		  <center><input name="soumettre" type="submit" class="btn btn-primary" value="Mis à jour"></center>
		  
	  <div class="clearfix"> </div>
	</form>

<!---->
</div>

</div>
</div> 
<!--//forms-->											   
</div>
<!--//outer-wp-->