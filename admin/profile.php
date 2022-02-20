
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
	  <img src="../album/<?php echo $admi['avatar']; ?>" style="width:150px;text-align:center;" alt=" " />
	  <h2><?php echo $admi['prenom']." ".$admi['nom']; ?></h2>
	  <p>Admin</p>
	</div>
														<!--/profile-inner-->
	<div class="profile-section-inner">
	  <div class="col-md-6 profile-info">
		<h3 class="inner-tittle">Information personnelle </h3>
		<div class="main-grid3">
		 <div class="p-20">
		  <div class="about-info-p">
			 <strong>Nom complet </strong>
			<br>
			<p class="text-muted"><?php echo $admi['prenom']." ".$admi['nom']; ?></p>
		  </div>
		  <div class="about-info-p">
		  <strong>Mobile</strong>
		  <br>
		  <p class="text-muted"><?php echo $admi['contact']; ?></p>
		  </div>
		  <div class="about-info-p">
		    <strong>Email</strong>
			<br>
			<p class="text-muted"><a href="mailto:info@example.com"><?php echo $admi['username']; ?></a></p>
		  </div>
		  <div class="about-info-p m-b-0">
			<strong>Location</strong>
			<br>
			<p class="text-muted"><?php echo $admi['adresse']; ?></p>
		  </div>
		 </div>
		</div>
		<h3 class="inner-tittle two">Compétences </h3>
		<div class="main-grid3">
			<div class="bar">
			 <p>MYSQL</p>
			</div>
		    <div class="skills">
			 <div class="skill1" style="width:100%"> </div>							
			</div>
			<div class="bar">HTML/CSS</div>
               <div class="skills">
					<div class="skill2" style="width:90%"> </div>							
			</div>
			<div class="bar"></div>
			<div class="skills">
			 <div class="skill3" style="width:65%"> </div>							
			</div>
			<div class="bar"></div>
			  <div class="skills">
	            <div class="skill4" style="width:85%"> </div>							
			  </div>
		     </div>
	    </div>
	    <div class="col-md-6 profile-info two">
		<h3 class="inner-tittle">Activité </h3>
			<div class="main-grid3 p-skill">
														
					<ul class="timeline">
							<li>
						<div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
						<div class="timeline-panel">
						<div class="timeline-heading">
						</div>
						<div class="timeline-body">
						 <p><?php echo $admi['fonction']; ?></p>
						</div>
					   </div>
					</li>
																			
				<li>
				 <div class="timeline-badge primary"><i class="fa fa-star-o"></i></div>
		         <div class="timeline-panel">
				  <div class="timeline-heading">
				</div>
				<div class="timeline-body">
					<p><?php echo $admi['genre']; ?></p>
				</div>
			</div>
		   </li>
		  </ul>
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
													