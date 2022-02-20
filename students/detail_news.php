<?php 
require_once '../setting/config.php';
$id = $_GET['id'];
$detail = $alumni->detail_actualite($id);






   ?>	
<div id="wrapper">

      <div id="page-wrapper">

            <div class="container-fluid">
               <?php 
                 foreach ($detail as $key => $v) 
                 {
                
                ?>
                <!-- Page Heading -->
                <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="index.php">Home</a></li>
											<li class="active">Actualités</li>
										</ol>
									   </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <center>PUBLICATION ACTUALITES</center> 
                        </h1>
                    </div>
                </div>
                <div class="panel panel-primary">
                	<div class="panel panel-header"><center><strong>Titre actualité :</strong><?php echo $v['titre']; ?></center></div>
                	<div class="panel panel-body">
                	<p>
                		<div class="col-lg-6"><strong>Auteur de la publication :</strong> <?php echo $v['auteur']; ?></div>
                		<div class="col-lg-6"><strong>Date de publication : </strong><?php echo $v['date']; ?></div>
                	</p>
                	<p>
                			<div class="col-lg-3">
                			<img src="../album/<?php echo $v['image']; ?>" style="width: 300px;">
                		</div>
                		<div class="col-lg-9"><?php echo $v['contenu']; ?></div>	
                	</p>
                	
                	</div>
                </div>
           <?php  }; ?>
</div>
</div>
</div>