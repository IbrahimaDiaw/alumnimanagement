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
$id=$_GET['id'];
$requete=$db->prepare("SELECT * FROM  membre where id='$id' ");
		    $requete->setFetchMode(PDO::FETCH_ASSOC);
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
$genre=htmlentities($_POST['genre']);
$promo=htmlentities($_POST['promo']);
$universite=htmlentities($_POST['universite']);
$filiere=htmlentities($_POST['filiere']);
$alumni=htmlentities($_POST['alumni']);
if ($alumni=="Etudiant(e)") 
{
	
$question1=htmlentities($_POST['q1']);
$question2=htmlentities($_POST['q2']);	
$question3=htmlentities($_POST['q3']);	
$question4=htmlentities($_POST['q4']);
}
elseif ($alumni=="Employé d'un service")
 {
	
  $question1=htmlentities($_POST['q5']);
  $question2=htmlentities($_POST['q6']);	
  $question3=htmlentities($_POST['q7']);	
  $question4=htmlentities($_POST['q8']);
}
else
{
  $question1=htmlentities($_POST['q9']);
  $question2=htmlentities($_POST['q10']);	
  $question3=htmlentities($_POST['q11']);	
  $question4=htmlentities($_POST['q12']);

}


$img_name = $_FILES['imglink']['name'];
$img_size =$_FILES['imglink']['size'];
$img_tmp =$_FILES['imglink']['tmp_name'];		
$url = '../album/';
$target_file=$url.$img_name;

     
  
		
			switch ($alumni) {
			 case 'Etudiant(e)':
         
        

      
			move_uploaded_file($img_tmp,$target_file);	

        $requete=$db->prepare("UPDATE membre SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,mail=? ,genre=?, promo=?,universite=?,filiere=?,encours_de_poursuite=? ,etablissement=? ,adresse_etablissement=? ,specialite=? ,temps=?,activation=?, where id='$id' ");
        $requete->execute(array($img_name,$prenom,$nom,$naissance,$adresse,$phone,$email,$genre,$promo,$universite,$filiere,$alumni,$question1,$question2,$question3,$question4,"oui"));



			echo "<script>alert('Mise à jour effectué avec succés');</script>";
			echo "<script>window.location='accueil.php';</script>";
           
           break;

			  case "Employé d'un service":

       

			move_uploaded_file($img_tmp,$target_file);
        
        $requete=$db->prepare("UPDATE membre SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,mail=? ,genre=?, promo=?,universite=?,filiere=?,encours_de_poursuite=? ,temps=? ,societe=? ,contrat=? ,fourchette=?, activation=?, where id='$id' ");
			$requete->execute(array($img_name,$prenom,$nom,$naissance,$adresse,$phone,$email,$genre,$promo,$universite,$filiere,$alumni,$question1,$question2,$question3,$question4,"oui"));

        

        echo "<script>alert('Mise à jour effectué avec succés');</script>";
        echo "<script>window.location='accueil.php';</script>";
     

                 break;
     
     case "Employé indépendant":

       

			move_uploaded_file($img_tmp,$target_file);
        
        $requete=$db->prepare("UPDATE membre SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,mail=? ,genre=?, promo=?,universite=?,filiere=?,encours_de_poursuite=? ,temps=? ,societe=? ,contrat=? ,fourchette=?, activation=? where id='$id' ");
			$requete->execute(array($img_name,$prenom,$nom,$naissance,$adresse,$phone,$email,$genre,$promo,$universite,$filiere,$alumni,$question1,$question2,$question3,$question4,"oui"));


        echo "<script>alert('Mise à jour effectué avec succés');</script>";
        echo "<script>window.location='accueil.php';</script>";
     

                 break;
     
			default:

        move_uploaded_file($img_tmp,$target_file);

        $requete=$db->prepare("UPDATE membre SET avatar=?,prenom=? ,nom=? ,naissance=? ,adresse=? ,telephone=? ,mail=? ,genre=?, promo=?,universite=?,filiere=?,encours_de_poursuite=? ,activation=? where id='$id' ");
			$requete->execute(array($img_name,$prenom,$nom,$naissance,$adresse,$phone,$email,$genre,$promo,$universite,$filiere,$alumni,"oui"));

        
           echo "<script>alert('Mise à jour effectué avec succés');</script>";
           echo "<script>window.location='accueil.php';</script>";
      
					break;
			}

		



}
?>

							<div class="graph-visual">
									<h2 class="inner-tittle"><center>Modification profil</center></h2>
										<div class="graph">

											<p style="color: red;" ><?php echo $msg; ?></p>
											<form method="post" action="" enctype="multipart/form-data">
										    <div class="form-group">
												<div class="row">
													<div class="col-md-12">
											<center>
	                                             <img id="uploadPreview" src="../album/<?php echo $data['avatar']; ?>" class="avatar"/ style="width:150px;text-align:center;"><br>
	                                             <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();" value="<?php echo $data['avatar']; ?>" />
                                             </center>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-md-6">
													<label>Prénom</label>	
												     <input type="text" class="form-control1" placeholder="Prénom" name="prenom" required="" value=" <?php echo $data['prenom'];?>">
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
													<input type="text" class="form-control1" placeholder="adresse email" name="email" required="" value="<?php echo $data['mail'];?>">
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
														 }?>>2009</option>
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
													<input type="text" class="form-control1" placeholder="nom de l'établissement" name="universite" value="<?php echo $data['universite']; ?>">
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>	
										<div class="form-group">
											<div class="row">
												<div class="col-md-12 grid_box1">
													<label>Filière </label>
													<input type="text" class="form-control1" placeholder="la Filière d'obtention de la licence" name="filiere" value="<?php echo $data['filiere']; ?>">
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
													<input type="radio"   name="genre" value="Masculin" <?php 
														if ($data['genre']=="Masculin") 
														 {
														 	
														 	 echo "checked";
														 }  ?> >
												</div>
												<div class="col-md-4">
													<label>Féminin</label>
													<input type="radio"    name="genre" value="Féminin" <?php 
														if ($data['genre']=="F&eacute;minin") 
														 {
														 	
														 	 echo "checked";
														 }  ?> >
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>	
										<div class="form-group">
											<div class="row">
												<div class="col-md-2 grid_box1">
													<label>Encours de poursuite</label>
												</div>
												<div class="col-md-2">
													<label>Etudiant(e)</label>
													<input type="checkbox"  name="alumni" id="choix" value="Etudiant(e)" class="check" <?php 
														if ($data["encours_de_poursuite"]=="Etudiant(e)") 
														 {
														 	 echo "checked";
														 }  ?>>
												</div>
												<div class="col-md-3">
													<label>Employé d'un service</label>
													<input type="checkbox"   name="alumni" id="choix" value="Employé d'un service" class="check" <?php 
														if ($data["encours_de_poursuite"]=="Employé d'un service") 
														 {
														 	 echo "checked";
														 }  ?>>
												</div>
												<div class="col-md-3">
													<label>Employé indépendant</label>
													<input type="checkbox"   name="alumni" id="choix" value="Employé indépendant"  class="check" <?php 
														if ($data["encours_de_poursuite"]=="Employé indépendant") 
														 {
														 	 echo "checked";
														 }  ?>>
												</div>
												 <div class="col-md-2">
                                                    <label>Chômeur</label>
                                                     <input type="checkbox"   name="alumni" id="choix" value="Chômeur"  class="check" <?php 
                                                     if ($data['encours_de_poursuite']=="Chômeur") {
                                                          echo "checked";
                                                           }
                                                        ?>>
              </div>

												<div class="clearfix"> </div>
											</div>
										</div>
							           <div id="monstatus">
										<div class="row hide" id="el1"  >
											<div class="col-md-6 grid_box1">
												<label>Dans quel établissement avez-vous poursuivi un master ?</label>
												<input type="text" class="form-control1" placeholder="Votre réponse" name="q1" value="<?php echo $data['etablissement']; ?>"  >
											</div>
											<div class="col-md-6 grid_box1">
												<label>Où se trouve votre établissement actuel ?</label>
												<input type="text" class="form-control1" placeholder="Votre réponse" name="q2" value="<?php echo $data['adresse_etablissement']; ?>" >
											</div>
											<div class="col-md-6 grid_box1">
												<label>Quelle est votre spécialité ou domaine </label>
												<input type="text" class="form-control1" placeholder="Votre réponse" name="q3" value="<?php echo $data['specialite']; ?>">
											</div>
											<div class="col-md-6 grid_box1">
												<label>Combien de temps avez-vous mis pour trouver un master ?</label>
												<input type="text" class="form-control1" placeholder="Votre réponse" name="q4" value="<?php echo $data['temps']; ?>">
											</div>
									</div>
									<div class="row hide" id="el2" >
										<div class="col-md-6 grid_box1">
											<label>Combien de temps avez-vous mis pour trouver un travail ?</label>
											<input type="text" class="form-control1" placeholder="Votre réponse" name="q5" value="<?php echo $data['temps']; ?>">
										</div>
										<div class="col-md-6 grid_box1">
											<label>Où travaillez-vous et quel est le nom de la société ?</label>
											<input type="text" class="form-control1" placeholder="Votre réponse " name="q6" value="<?php echo $data['societe']; ?>">
										</div>
										<div class="col-md-6 grid_box1">
											<label>Quel type de contrat avez vous signé et le poste que vous occupez ?</label>
											<input type="text" class="form-control1" placeholder="Votre réponse" name="q7" value="<?php echo $data['contrat']; ?>">
										</div>
										<div class="col-md-6 grid_box1">
											<label>Quelle est la fourchette de votre salaire ?</label>
											<input type="text" class="form-control1" placeholder="Votre réponse" name="q8" value="<?php echo $data['fourchette']; ?>">
										</div>
								</div>
								<div class="row hide" id="el3"  >
									<div class="col-md-6 grid_box1">
										<label>Quel genre de travail faites-vous ?</label>
										<input type="text" class="form-control1" placeholder="Votre réponse" name="q9"  value="<?php echo $data['type_travail']; ?>">
									</div>
									<div class="col-md-6 grid_box1">
										<label>Quel est le lieu de votre travail ?</label>
										<input type="text" class="form-control1" placeholder="Votre réponse " name="q10" value="<?php echo $data['lieu']; ?>">
									</div>
									<div class="col-md-6 grid_box1">
										<label>Combien de temps avez-vous mis pour trouver ce travail ?</label>
										<input type="text" class="form-control1" placeholder="Votre réponse" name="q11" value="<?php echo $data['temps']; ?>">
									</div>
									<div class="col-md-6 grid_box1">
										<label>Combien gagnez vous par mois ?</label>
										<input type="text" class="form-control1" placeholder="Votre réponse" name="q12" value="<?php echo $data['salaire']; ?>">
									</div>
							  </div>
							   	
							 </div>
										<div class="form-group" >
											<div class="row" id="status">
												
												<div class="clearfix"> </div>
											</div>
										</div>	
                                     <div class="col-md-12 form-group button-2">
								    <center>  <button type="submit" class="btn btn-primary" name="Soumettre">Soumettre</button>
								     <button type="reset" class="btn btn-default">Annuler</button>
									<p class="sign">Vous avez dèjà un compte ? <a href="index.php">Se connecter</a></p>
								    </center>
								    </div>
								   <div class="clearfix"> </div>
								   </form>
								</div>
							
						
							</div>	
								
<script type="text/javascript" src="js/jquery.min.js"></script>
<script >
var els = document.querySelectorAll('#choix');
var status = document.querySelector('#monstatus');
var div1 = document.querySelector('#el1');
var div2 = document.querySelector('#el2');
var div3 = document.querySelector('#el3');

for (var i = 0; i < els.length; i++) {
els[i].addEventListener('click',(e)=>{
	if(e.target.value == "Etudiant(e)"){
		div2.classList.add('hide')
		div3.classList.add('hide')
		div1.classList.remove('hide')
	}else if (e.target.value == "Employé d'un service"){
		div1.classList.add('hide')
		div3.classList.add('hide')
		div2.classList.remove('hide')
	}else if(e.target.value == "Employé indépendant") {
		div2.classList.add('hide')
		div1.classList.add('hide')
		div3.classList.remove('hide')
	}
	else{
		div2.classList.add('hide')
		div1.classList.add('hide')
		div3.classList.add('hide')
	}
})
}


</script>
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
			<!--//outer-wp-->