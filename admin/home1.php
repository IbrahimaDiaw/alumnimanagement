<?php
    require_once '../setting/dbconnection.php';
       /// Nombre evenement/////////////

     $q = $db->query('SELECT id FROM ajout_evenement');
     $nb_event = 0;
     $list = array();
     while($data = $q->fetch(PDO::FETCH_ASSOC)){    
         $list[] = $data;
     };
     
     $nb_event = count($list);

     ////////////// Actualités//////////////////

     $actu = $db->query('SELECT id FROM actualite');
     $nb_actu = 0;
     $list_actu = array();
     while($data = $actu->fetch(PDO::FETCH_ASSOC)){    
         $list_actu[] = $data;
     };
     
     $nb_actu = count($list_actu);

     ////////////Offre/////////////////////////

      $offre = $db->query('SELECT id FROM offre');
     $nb_offre = 0;
     $list_offre = array();
     while($data = $offre->fetch(PDO::FETCH_ASSOC)){    
         $list_offre[] = $data;
     };
     
     $nb_offre = count($list_offre);
    ///////////////nombre admin////////////////

     $sql=$db->query("SELECT id from admin_info");
     $nb_admin=0;
     $nb =array();
     while ($data=$sql->fetch(PDO::FETCH_ASSOC)) {

     	 $nb[]=$data;
     	 $nb_admin=count($nb);
     }

      ////////////////nombre alumni etudiant//////////////

     $sql=$db->query("SELECT id,encours_de_poursuite from membre where encours_de_poursuite='Etudiant(e)' ");
     $nb_alumniEtudiant=0;
     $nb =array();
     while ($data=$sql->fetch(PDO::FETCH_ASSOC)) {

     	 $nb[]=$data;
     	 $nb_alumniEtudiant=count($nb);
     }

     ////////////////nombre alumni employeur d'un service//////////////

     $er = "Employé d\'un service";
     $sql=$db->query("SELECT id,encours_de_poursuite from membre where encours_de_poursuite='$er'");
     $nb_alumniEmployé=0;
     $nb =array();
     while ($data=$sql->fetch(PDO::FETCH_ASSOC)) {

     	 $nb[]=$data;
     	 $nb_alumniEmployé=count($nb);
     }

     ////////////////nombre alumni employeur independant//////////////

     $sql=$db->query("SELECT id,encours_de_poursuite from membre where encours_de_poursuite='Employé indépendant'");
     $nb_alumniIndependant=0;
     $nb =array();
     while ($data=$sql->fetch(PDO::FETCH_ASSOC)) {

     	 $nb[]=$data;
     	 $nb_alumniIndependant=count($nb);
     }

     ////////////////total alumni //////////////
    
    $sommeAlumni= $nb_alumniIndependant + $nb_alumniEmployé + $nb_alumniEtudiant;
    
  ?>
<style type="text/css">
	#chart_div{
		transform: rotate(-90deg);
	}
</style>
<div class="outter-wp">
	<!--custom-widgets-->
	<div class="custom-widgets">
	   <div class="row-one">
			<div class="col-md-3 widget">
				<div class="stats-left ">
					<h5>Nombre total alumni</h5>
					<h4>inscrits</h4>
				</div>
				<div class="stats-right">
					<label><?php echo $sommeAlumni; ?></label>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="col-md-3 widget states-mdl">
				<div class="stats-left">
					<h5>Alumni employé</h5>
					<h4>Inscrits</h4>
				</div>
				<div class="stats-right">
					<label><?php echo $nb_alumniEmployé; ?></label>
				</div>
				<div class="clearfix"> </div>	
			</div>
			
			<div class="col-md-3 widget states-thrd">
				<div class="stats-left">
					<h5>Alumni étudiants</h5>
					<h4>inscrits</h4>
				</div>
				<div class="stats-right">
					<label><?php echo $nb_alumniEtudiant; ?></label>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="col-md-3 widget states-last">
				<div class="stats-left">
					<h5>Alumni indépendants </h5>
					<h4>inscrits</h4>
				</div>
				<div class="stats-right">
					<label><?php echo $nb_alumniIndependant; ?></label>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div><br>
		<div class="row-one">
			<div class="col-md-3 widget">
				<div class="stats-left ">
					<h5>Nombre événements</h5>
					<h4>postés</h4>
				</div>
				<div class="stats-right">
					<label><?php echo $nb_event; ?></label>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="col-md-3 widget states-mdl">
				<div class="stats-left">
					<h5>Nombre administrateurs</h5>
					<h4>inscrits</h4>
				</div>
				<div class="stats-right">
					<label><?php echo $nb_admin; ?></label>
				</div>
		<div class="clearfix"> </div>	
			</div>
			<div class="col-md-3 widget states-thrd">
				<div class="stats-left">
					<h5>Actualités</h5>
					<h4>postées</h4>
				</div>
				<div class="stats-right">
					<label><?php echo $nb_actu; ?></label>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="col-md-3 widget states-last">
				<div class="stats-left">
					<h5>Offre </h5>
					<h4>publiées</h4>
				</div>
				<div class="stats-right">
					<label><?php echo $nb_offre; ?></label>
				</div>
				<div class="clearfix"> </div>	
			</div>

		</div>
	</div>
	<div class="clearfix"> </div>
	<!--//custom-widgets-->
	<!--/inner-charts-->
	<div class="inner-charts">
	 <h2 class="inner-tittle">Diagramme en Secteur </h2>

	
	<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['situation', 'Nombre'],
          <?php 
            $requete=$db->prepare("SELECT distinct encours_de_poursuite as situation, count(id) as nombre from membre where encours_de_poursuite='Etudiant(e)'");
          $requete->execute();
          $er = "Employé d\'un service";
          $requete1=$db->prepare("SELECT distinct encours_de_poursuite as situation, count(id) as nombre from membre where encours_de_poursuite='$er'");
          $requete1->execute();

          $requete2=$db->prepare("SELECT distinct encours_de_poursuite as situation, count(id) as nombre from membre where encours_de_poursuite='Employé indépendant'");
          $requete2->execute();

          $requete3=$db->prepare("SELECT distinct encours_de_poursuite as situation, count(id) as nombre from membre where encours_de_poursuite='Chômeur'");
          $requete3->execute();

          $secteur=$requete->fetch();
          $secteur1=$requete1->fetch();
          $secteur2=$requete2->fetch();
          $secteur3=$requete3->fetch();
    
          ?>
		['<?= $secteur['situation']?>', <?= $secteur['nombre']?>],
		["<?= $secteur1['situation']?>", <?= $secteur1['nombre']?>],
		['<?= $secteur2['situation']?>', <?= $secteur2['nombre']?>],
		['<?= $secteur3['situation']?>', <?= $secteur3['nombre']?>],

        ]);

        var options = {
        width: '1000px', height: '700px',
         title: 'Le pourcentage de la situation actuelle des alumni ',
         is3D: true,
         pieStartAngle: 100,
        };
        var options1 = {
          title: 'Le Diagramme en barre de la situation actuelle des anciens étudiants ',
          legend: { position: 'relative' },
          bar: {groupWidth: "50%"},
        };

        var chart = new google.visualization.PieChart(document.getElementById('chartdiv1'));
        chart.draw(data, options);
        var chart1 = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart1.draw(data, options1);
      }
    </script>
    <div class="graph">
	<div id="chartdiv1" style="width: 100%; height: 700px;"></div>
   </div><br>
    <div class="graph">
	<h2 class="inner-tittle">Diagramme <br>en barre </h2>

	<div id="chart_div" style="width: 100%; height: 700px;"></div>																

	</div>

				  </div>

				</div><br><br><br><br><br><br><br>