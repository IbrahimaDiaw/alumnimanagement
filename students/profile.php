
<!-- //header-ends -->
<!--outter-wp-->
<div class="outter-wp">
<!--sub-heard-part-->
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="index.php">Home</a></li>
<li class="active">Profile</li>
</ol>
</div>
<!--//sub-heard-part-->
<!--/profile-->
<h3 class="sub-tittle pro">Profile</h3>
<div class="profile-widget">
	<img class="avatar" src="../album/<?php echo $data['avatar']?>" style="width:200px;height: 200px;text-align:center;">
	<h2><?php echo "".$data['prenom']." ".$data['nom']; ?></h2>
	<p>Alumni</p>
</div>
	<!--/profile-inner-->
	 <div class="profile-section-inner">
	       <div class="col-md-6 profile-info">
				<h3 class="inner-tittle">Information Personnelle </h3>
				<div class="main-grid3">
			     <div class="p-20">
					<div class="about-info-p">
						<strong>Nom complet</strong>
						<br>
						<p class="text-muted"><?php echo "".$data['prenom']." ".$data['nom']; ?></p>
					</div>
					<div class="about-info-p">
						<strong>Mobile</strong>
						<br>
						<p class="text-muted"><?php echo "".$data['telephone']; ?></p>
					</div>
					<div class="about-info-p">
						<strong>Email</strong>
						<br>
						<p class="text-muted"><a href="mailto:info@example.com"><?php echo $_SESSION['email']; ?></a></p>
					</div>
					<div class="about-info-p m-b-0">
						<strong>Location:</strong>
						<p class="text-muted"><?php echo " ".$data['adresse']; ?></p>
					</div>
					<div class="about-info-p m-b-0">
						<strong>Date de naissance:</strong>
						<p class="text-muted"><?php echo " ".$data['naissance']; ?></p>
					</div>
				</div>
			 </div>
			</div>
		   <div class="col-md-6 profile-info two">
		   <h3 class="inner-tittle">Parcours </h3>
			<div class="main-grid3 p-skill">
	
	            <div class="p-20">
					<div class="about-info-p">
						<strong>Struture</strong>
						<br>
						<p class="text-muted"><?php echo $data['universite']; ?></p>
					</div>
					<div class="about-info-p">
						<strong>Filière</strong>
						<br>
						<p class="text-muted"><?php echo $data['filiere']; ?></p>
					</div>
					<div class="about-info-p">
						<strong>Promotion</strong>
						<br>
						<p class="text-muted"><?php echo $data['promo'];?></p>
					</div>
					<div class="about-info-p">
						<strong>Situation Actuelle</strong>
						<br>
						<p class="text-muted"><?php echo $data['encours_de_poursuite'];?></p>
					</div>
					<div class="about-info-p m-b-0">
						<strong>Genre</strong>
						<br>
						<p class="text-muted"><?php echo $data['genre'];?> </p>
					<div class="clearfix"></div>		
				</div>
			</div>
			<!--/map-->
		
			<div class="clearfix"></div>
		</div>
		
<!--//profile-inner-->
<!--//profile-->
</div>
<!--//outer-wp-->
