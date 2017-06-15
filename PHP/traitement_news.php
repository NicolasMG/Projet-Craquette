<?php
session_start();


try{
	$bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//le array permet d'afficher les ereurs
if (isset($_POST['craquetter'])){
	if(!empty($_POST['message'])){
		$message=$_POST['message'];
		
		$req=$bdd->prepare('insert into actualite (id,poste,date_time) values (:id,:message,now())') or die(print_r($bdd->errorInfo()));
		$req->execute(array('id'=>$_SESSION['ID'],'message'=>$message));
		$req->closeCursor();
	}	
}
}
catch (Exception $e){
	die('connection failed : '.$e->getMessage());
}




/*header('Location: http://localhost/newsfeed/fil_actualite.php'); */


/*$req4='select imageprofil from profil2 where email=:mail';
$req4=$bdd->prepare($req4) or die(print_r($bdd->errorInfo()));
$req4->execute(array('mail'=>$mail));
$data4=$req4->fetch();*/



echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="accueil.php"
</SCRIPT>';
?>