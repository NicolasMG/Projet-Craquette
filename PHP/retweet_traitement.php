<?php
session_start();
try{
	$bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//le array permet d'afficher les ereurs
}
catch (Exception $e){
	die('connection failed : '.$e->getMessage());
}
$req1=$bdd->prepare('select retweeted,id,poste,retweeted_by from actualite where num_tweet=:num_tweet');
				$req1->execute(array('num_tweet'=>$_GET['num_tweet']));
				$data1=$req1->fetch();

 if (isset($_GET['num_tweet'])  and   $data1['retweeted']=="false" and $data1['retweeted_by']!=$_SESSION['id']){

	$req3=$bdd->prepare('update actualite set compteur_retweet = compteur_retweet + 1, retweeted="true" where num_tweet= :num_tweet');
	$req3->execute(array('num_tweet'=>$_GET['num_tweet']));
	
	$req5=$bdd->prepare('update actualite set retweeted_by=:id where num_tweet');
	$req5->execute(array('id'=>$_SESSION['id']));
				}	
				echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="http://localhost/newsfeed/fil_actualite.php?num_tweet='.$_GET['num_tweet'].'"</SCRIPT>';
?>
