<?php
session_start();
try{
	$bdd = new PDO('mysql:host=localhost;dbname=siteweb2;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//le array permet d'afficher les ereurs
}
catch (Exception $e){
	die('connection failed : '.$e->getMessage());
}
$req1=$bdd->prepare('select liked from actualite where num_tweet= :num_tweet');
$req1->execute(array('num_tweet'=>$_GET['num_tweet']));
$data1=$req1->fetch();
if (isset($_GET['num_tweet'])  and   $data1['liked']=="false" and $data1['liked_by']!=$_SESSION['id']){
	$req2=$bdd->prepare('update actualite set compteur_like = compteur_like + 1, liked="true" where num_tweet= :num_tweet');
	$req2->execute(array('num_tweet'=>$_GET['num_tweet']));
	/*header ('Location : http://localhost/newsfeed/fil_actualite.php');*/

}
/*if ($_POST["button"]=="retweet"){
	$bdd->query("update actualite set compteur_retweet=compteur_retweet+1");
	$_SESSION["retweet"]="true";
}*/

echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="http://localhost/newsfeed/fil_actualite.php?num_tweet='.$_GET['num_tweet'].'"</SCRIPT>';


?>
