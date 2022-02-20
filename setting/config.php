<?php 


class projet
	
{
	public $server = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "gestion_alumni";
	public $connectdb;
	
	function __construct()
	{
		$this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
		if($this->connectdb->connect_error)
		{
			die("connection failed");
		}
	}
	
    public function hackme()
    {
        $this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
        return $this->connectdb;
    }

      ///////// ALUMNI ///////////////////////////////////////
    
        /////////// La liste des alumni /////////////////////////////////////

	public function liste_alumni_etudiant()
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->query("select id, prenom,nom,naissance,adresse,telephone,email,promo,filiere,encours_de_poursuite from alumni_etudiant");
		while ($data=$query->fetch()) {
			$datalist[]=$data;
		}
		return $datalist;
	}
	public function detailAlumni($id)
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->prepare("select * from alumni_etudiant where id=:id");
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();

		while ($data=$query->fetch()) {
			$datalist[] = $data;
		}
		return $datalist;
	}
	public function detailAlumniEmployeur($id)
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");

		$query=$db->prepare("select * from alumni_employeur where id=:id");
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();

		while ($data=$query->fetch()) {
			$datalist[] = $data;
		}
		return $datalist;
	}
	public function detailAlumniIndependant($id)
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");

		$query=$db->prepare("select * from alumni_independant where id=:id");
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();

		while ($data=$query->fetch()) {
			$datalist[] = $data;
		}
		return $datalist;
	}



     public function liste_alumni_independant()
     {
     	 $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->query("select id, prenom,nom,naissance,adresse,telephone,email,promo,encours_de_poursuite from alumni_independant");
		while ($data=$query->fetch()) {
			$datalist[]=$data;
		}
		return $datalist;
     }


     public function liste_alumni_employeur ()
     {
     
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->query("select id, prenom,nom,naissance,adresse,telephone,email,promo,encours_de_poursuite from alumni_employeur");
		while ($data=$query->fetch()) {
			$datalist[]=$data;
		}
		return $datalist;
	}     
       
      ////////////////////////// Fin Liste alumni /////////////////////////////////////////////


	////////////////// Mis à jour de l'alumnus étudiant /////////////////////////////////////////


    //////////////// Suppression d'alumni /////////////////////////////////////////////////////
	 public function delete_alumni($id)
	{
	$delete_alumni_info = " delete  from membre where id='$id'";
     $this->connectdb->query($delete_alumni_info);
	
	}
	public function delete_alumni_independant($id)
	{
		$delete_alumni_independant="delete from alumni_independant where id=$id";
		$this->connectdb->query($delete_alumni_independant);
	}
	public function delete_alumni_employeur($id)
	{
		$delete_alumni_employeur="delete from alumni_employeur where id=$id";
		$this->connectdb->query($delete_alumni_employeur);
	}

    
	//////////////////// Fin suppression alumni  /////////////////////////

	/////////////////////////////// ADMINNNNNNNNNNNNNNNNN- DEBUT------------

         ////////////////////// INCRIPTION ADMIN----------------------------------
	public function inscrit_admin($avatar,$prenom,$nom,$username,$adresse, $contact,$password,$cpassword,$genre,$fonction)
	{
	$ajout_admin = "insert into admin_info (avatar,prenom,nom,username,adresse,contact,password,cpassword,genre,fonction)  values('$avatar','$prenom','$nom','$username','$adresse', '$contact','$password','$cpassword','$genre','$fonction')";
	$ajout_admin_run = $this->connectdb->query($ajout_admin);
		return $ajout_admin_run;
	}

    public function list_admin()
	{
		$list_admin = "select * from admin_info ";
		$list_admin_run = $this->connectdb->query($list_admin);
		return $list_admin_run;
	}
    public function delete_admin($id)
	{
	$delete_admin_info = " delete  from admin_info where id='$id'";
	  $this->connectdb->query($delete_admin_info);
	
	}
	// REcuperation de id/////////////////////
	public function edit_adminid($id)
	{
		$edit_adminid = "select * from admin_info where id='$id'";
		$edit_adminid_run = $this->connectdb->query($edit_adminid);
		return $edit_adminid_run;
	}
        // Mise à jour du personnel////////////////////

     public function update_personnel($prenom,$nom,$username,$adresse, $contact,$password,$cpassword,$genre,$fonction,$id)
     {
     	$update_personnel="update admin_info set prenom='$prenom',nom='$nom', username='$username',adresse='$adresse',contact='$contact',password='$password',cpassword='$cpassword', genre='$genre', fonction='$fonction' where id='$id' ";
     	$update_personnel_run = $this->connectdb->query($update_personnel);
		return $update_personnel_run;
    	
    }
    public function repetition_admin($username,$tel)
    {
        $repetition_admin_select="select * from admin_info  where username='$username' AND contact='$tel'";
        $repetition_admin_run=$this->connectdb->query($repetition_admin_select);
       $repetition_admin_num=$repetition_admin_run->num_rows;
        return $repetition_admin_num;
    }
	//////////////////////// ADMIN LOGIN ------------------------------------------
	
	public function admin_login($admin_username,$admin_password)
	{
		$admin_login_select = "select * from admin where username='$admin_username' AND password='$admin_password'";
		$admin_login_run = $this->connectdb->query($admin_login_select);
		$admin_login_num = $admin_login_run->num_rows;
		return $admin_login_num;
	}
	public function admin_username($adminname)
	{
		$admin_username_select = "select * from  admin where nomComplet='$adminname'";
		$admin_username_run = $this->connectdb->query($admin_username_select);
		return $admin_username_run;
	}

	//////////////////////// ADMIN FIN --------------------------------------------------

	
	////////////////////////////////// EVENEMENT ////////////////////////////////

     public function ajout_evenement($auteur,$titre,$date, $text)
	 {
	$ajout_evenement = "insert into ajout_evenement (auteur,titre,date,texte)  values('$auteur','$titre','$date','$text')";
	$ajout_evenement_run = $this->connectdb->query($ajout_evenement);
		return $ajout_evenement_run;
	}

	/////////// Eviter la saisie d'un évement plusieurs fois//////////////////

	public function repetition_evenement($auteur,$titre,$date,$texte)
	{
         
        $repetition_evenement_select= "select * from ajout_evenement where auteur='$auteur' AND titre='$titre' AND date='$date'  AND texte='$texte'";
        $repetition_evenement_run=$this->connectdb->query($repetition_evenement_select);
        $repetition_evenement_num=$repetition_evenement_run->num_rows;
        return $repetition_evenement_num;
	}
         

        ////////////// Liste evenement//////////////////////
	public function list_evenement()
	{
		$list_evenment = "select * from ajout_evenement ";
		$list_evenment_run = $this->connectdb->query($list_evenment);
		return $list_evenment_run;
	}

	public function edit_evenementid($id)
	{
		$edit_evenementid = "select * from ajout_evenement where id='$id'";
		$edit_evenementid_run = $this->connectdb->query($edit_evenementid);
		return $edit_evenementid_run;
	}
   
	////////////////// Suppréssion évenement////////////////////////
    public function delete_evenement($id)
	{
	$delete_evenement_info = " delete  from ajout_evenement where id='$id'";
     $this->connectdb->query($delete_evenement_info);
	
	}

	 public function detail_evenement($id)
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->prepare("select * from ajout_evenement where id=:id");
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();

		while ($data=$query->fetch()) {
			$datalist[] = $data;
		}
		return $datalist;
	}

	public function evenement_du_jour()
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->prepare("select * from 	ajout_evenement ");
		$query->execute();

		while ($data=$query->fetch()) {
			$datalist[] = $data;
		}
		return $datalist;
	}
	
	
	/////////////////////// Actualités//////////////////////////////
       
    public function liste_actualites()
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->query("select id, titre,auteur,image,description, date from actualite");
		while ($data=$query->fetch()) {
			$datalist[]=$data;
		}
		return $datalist;
	}


	public function delete_actualites($id)
	{
	$delete_actualites_info = " delete  from actualite where id='$id'";
     $this->connectdb->query($delete_actualites_info);
	
	}
    public function detail_actualite($id)
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->prepare("select * from actualite where id=:id");
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();

		while ($data=$query->fetch()) {
			$datalist[] = $data;
		}
		return $datalist;
	}
	

public function actualite_du_jour()
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->prepare("select * from actualite ");
		$query->execute();

		while ($data=$query->fetch()) {
			$datalist[] = $data;
		}
		return $datalist;
	}
	

public function liste_membre($email)
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->prepare("select * from membre where email=$email");
		$query->execute();

		while ($data=$query->fetch()) {
			$datalist[] = $data;
		}
		return $datalist;
	}
	//////////////// list des alumni/////////////////
public function liste_alumni()
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->prepare("select * from membre");
		$query->execute();

		while ($data=$query->fetch()) {
			$datalist[] = $data;
		}
		return $datalist;
	}
public function liste_offre()
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->prepare("select * from offre ");
		$query->execute();

		while ($data=$query->fetch()) {
			$datalist[] = $data;
		}
		return $datalist;
	}
	public function supprimer_offre($id)
	{
	$delete_actualites_info = " delete  from offre where id='$id'";
     $this->connectdb->query($delete_actualites_info);
	
	}
	public function detail_offre($id)
	{
        $datalist=array();
		$db= new PDO("mysql:host=localhost;dbname=gestion_alumni","root","");
		$query=$db->prepare("select * from offre where id=:id");
		$query->bindValue(':id',$id,PDO::PARAM_INT);
		$query->execute();

		while ($data=$query->fetch()) {
			$datalist[] = $data;
		}
		return $datalist;
	}



	}
$alumni = new projet();