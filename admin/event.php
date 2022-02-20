<?php 

require_once '../setting/dbconnection.php';

 $msg="";

 if (isset($_POST['publier'])) {
        
        $titre= $_POST['titre'];
        $auteur= $_POST['auteur'];
        $description= $_POST['description'];
        $contenu= $_POST['contenu'];
        
        $img_name = $_FILES['image']['name'];
        $img_size =$_FILES['image']['size'];
        $img_tmp =$_FILES['image']['tmp_name'];       
        $url = '../album/';
        $target_file=$url.$img_name;

        
            move_uploaded_file($img_tmp,$target_file);  
            $sql=$db->prepare("INSERT INTO ajout_evenement set titre=?,auteur=?,image=?,description=?,contenu=? ");
            $sql->execute(array($titre,$auteur,$img_name,$description,$contenu));
            if ($sql==true) 
            {
                echo "<script>window.location='index.php?page=listEvent';</script>";
            }
            else
            {
                $msg="Impossible";
            }
        
 }


 ?>

							
		                   <div id="wrapper">

      <div id="page-wrapper">

            <div class="container">

                <!-- Page Heading -->
                <div class="sub-heard-part">
                                       <ol class="breadcrumb m-b-0">
                                            <li><a href="index.php">Home</a></li>
                                            <li class="active">Ajouter événements</li>
                                        </ol>
                                       </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <center> Publication évènements </center>
                        </h1>
<form role="form" action="" method="POST" enctype="multipart/form-data">
      <div><?php  echo $msg ; ?></div>
   <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
        <label for="post_title">Titre Evénement</label>
        <input type="text" name="titre" placeholder = "Entrer le titre de l'événement " value= ""  class="form-control" required>
    </div>
   </div>
   <div class="col-lg-6">
    <div class="form-group">
        <label for="post_title">Auteur Evénement</label>
        <input type="text" name="auteur" placeholder = "Entrer l'auteur de l'événement " value= ""  class="form-control" required>
    </div>
</div>
  </div>
   <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
        <label for="post_image">Selectionner image </label> <font color='brown' > &nbsp;&nbsp;(la taille maximale de l'image: 3024 KB) </font> 
        <input type="file" name="image" >
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
        <label for="post_tag">Description</label>
        <input type="text" name="description" placeholder = "Saisir une description" value= "" class="form-control" >
    </div>
</div>
</div>
    <div class="form-group">
        <label for="post_content">Contenu de l'événement</label>
        <textarea class="form-control" name="contenu"  id="" cols="30" rows="10" ></textarea>
    </div>
    <div class="form-group">
      <button type="submit" name="publier" class="btn btn-primary" value="Publier événement">Publier événement</button>
     </div><br><br>

</form>
</div>
</div>
</div>
</div>
</div>
