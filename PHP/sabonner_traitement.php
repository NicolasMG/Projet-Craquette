<?php 
session_start();
try{
	$bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//le array permet d'afficher les ereurs
	
}
catch (Exception $e){
	die('connection failed : '.$e->getMessage());
}
$req1=$bdd->prepare("select id from actualite where num_tweet=:num_tweet");
	$req1->execute(array('num_tweet'=>$_GET['num_tweet']));
	$data1=$req1->fetch();
			

if (isset($_POST['sabonner'])){
	$req2=$bdd->prepare("insert into abonnement(:id) values (:abo)");
$req2->execute(array('id'=>$_SESSION['id'],'abo'=>$data1['id']));



	
}
/*$req2=$bdd->query("SELECT count(*) as "numb_row" FROM INFORMATION_SCHEMA.columns WHERE table_schema = 'siteweb' AND table_name = 'profil2'");*/

?>