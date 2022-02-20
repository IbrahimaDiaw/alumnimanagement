<?php 
try{
    
    $db=new PDO('mysql:host=localhost;dbname=gestion_alumni;charset=utf8','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);//on émet une alerte à chaque fois qu'une requète a échoué  

    

}catch(PDOException $ex)
{
       echo $ex;
}