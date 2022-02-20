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
            $sql=$db->prepare("INSERT INTO actualite set titre=?,auteur=?,image=?,description=?,contenu=? ");
            $sql->execute(array($titre,$auteur,$img_name,$description,$contenu));
            if ($sql==true) 
            {
                echo "<script>window.location='index.php?page=liste_news';</script>";
            }
            else
            {
                $msg='<label class="alert alert-danger">Impossible de publier</label>';
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
                                            <li class="active">Publication actualités</li>
                                        </ol>
                                       </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" align="center">
                            Publication actualité
                        </h1>
<form role="form" action="" method="POST" enctype="multipart/form-data">
    <div><?php  echo $msg ; ?></div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
        <label for="post_title">Titre Actualité</label>
        <input type="text" name="titre" placeholder = "Entrer le titre de l'actualité " value= ""  class="form-control" required>
    </div>
     </div>
    <div class="col-lg-6">
    <div class="form-group">
        <label for="post_title">Auteur Actualité</label>
        <input type="text" name="auteur" placeholder = "Entrer l'auteur de l'actualité " value= ""  class="form-control" required>
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
    <div class="row">
    <div class="form-group">
        <label for="post_content">Contenu Actualité</label>
        <textarea class="form-control" name="contenu"  id="" cols="30" rows="8" ></textarea>
    </div>
   </div>
    <div class="form-group">
      <button type="submit" name="publier" class="btn btn-primary" value="Publier actualité">Publier actualité</button>
     </div><br><br>

</form>
</div>
</div>
</div>
</div>
</div>
