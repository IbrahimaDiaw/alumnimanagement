<div id="wrapper">

      <div id="page-wrapper">

        <div class="container">

                <!-- Page Heading -->
           <div class="sub-heard-part">
            <ol class="breadcrumb m-b-0">
               <li><a href="index.php">Home</a></li>
               <li class="active">Demande d'adhésion</li>
           </ol>
          </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        <center>   Demande d'adhésion </center>
                        </h1>
<form role="form" action="" method="POST" enctype="multipart/form-data">
    <p><?php  ?></p>
    <div class="form-group">
        <label for="post_title">Pseudo Destinataire</label>
        <input type="text" name="pseudo" placeholder = "" value= ""  class="form-control" required>
    </div>
    <div class="form-group">
        <label for="post_title">Email Destinataire</label>
        <input type="email" name="email" placeholder = " " value= ""  class="form-control" required>
    </div>
     <div class="form-group">
        <label for="post_tag">Objet</label>
        <input type="text" name="objet" placeholder = "" value= "" class="form-control" >
    </div>
    <div class="form-group">
        <label for="post_content">Message</label>
        <textarea class="form-control" name="message"  id="" cols="50" rows="4" ></textarea>
    </div>
    <div class="form-group">
      <button type="submit" name="envoyer" class="btn btn-primary" value="Envoyer">Envoyer</button>
     </div>

</form>
<?php
if (isset($_POST['envoyer']) && !empty($_POST['pseudo']) && !empty($_POST['objet']) && !empty($_POST['message'])) {
 	extract($_POST);
 	$destinataire=$email;
 	$expediteur=$pseudo.' <'.$email.'>';
 	$mail=mail($destinataire,$objet, $message,$expediteur.':portailalumni.000webhostapp.com :Mail de test');

 	if ($mail) {
 		echo "email envoyé avec succés";
 	}else{
 		echo "echec d'envoi";
 	}

 }else{
 	echo "Fomulaire non soumis ou champs vides";
 }





 ?>
</div><br><br>
</div>
</div>
</div>
</div>