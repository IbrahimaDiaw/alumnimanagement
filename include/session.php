<?php 
 session_start();

include_once 'setting/dbconnection.php';
 if(isset($_POST['login']) and isset($_POST['password']))
		{
			$username=$_POST['email'];
			$password=$_POST['password'];

			
			$sql=$db->prepare("SELECT * FROM  login_membre where email='$username' and password='$password'");
       		    $sql->setFetchMode(PDO::FETCH_ASSOC);
       		    $sql->execute();
       		    
       		    while ($data=$sql->fetch()) 

       		    {
       		      $db_email=$data['email'];
       		      $db_nom=$data['nom'];
       		      $db_prenom=$data['prenom'];
       		      $db_password=$data['password'];
       		      $db_profile=$data['profile'];


       		       if ($username==$db_email && $password==$db_password) {
				
				
       		           $_SESSION['email']=$db_email;
       		           $_SESSION['profile']=$db_profile;

       		           if ($_SESSION['profile']=='admin') 
       		           {
       		            header('location:admin/index.php');

       		           }
       		           elseif ($_SESSION['profile']=='alumni') 
       		           {

       		            header('location:students/accueil.php');
       		           }
       		           elseif ($_SESSION['profile']=='recruteur') 
       		           {

       		           	header('location:Recruteur/accueil.php');
       		           }
       		           else
			          {
				     header("location:index.php?error");

			
			          }
       		          
			}
			


       	  }
       		   			
		}

 


 ?>