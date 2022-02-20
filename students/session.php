<?php 
 session_start();

 include_once '../setting/dbconnection.php';

 if(isset($_POST['login']) and isset($_POST['password']))
		{
			$username=$_POST['email'];
			$password=$_POST['password'];

			
			$sql=$db->prepare("SELECT * FROM  membre where mail='$username' and password='$password'");
       		    $sql->setFetchMode(PDO::FETCH_ASSOC);
       		    $sql->execute();
       		    $data=$sql->fetch();
       		    if ($data>0 ) {
				
				// valid
       		    $_SESSION['email']=$data['mail'];


				header('location:accueil.php');
			}
			else
			{
				header("location:index.php?error");

			
			}
			
		}

 


 ?>