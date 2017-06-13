<br><br><br><br>
<?php
$DBhost = "localhost";
	$DBuser = "root";
	$DBpass = "";
	$DBname = "codingcage";
	
	try {
		$DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
		$DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $ex){
		die($ex->getMessage());
	}
//session_start();
include('header_accueil.php');


if(isset($_POST['creegroupe'])){ 
	if(!empty($_POST['nomgroupe'])){ 
		$nom = htmlspecialchars($_POST['nomgroupe']);
        $id=$_SESSION['ID'];
        $insertion = $bdd->prepare('insert into groupe values("'.$id.'","'.$nom.'","administrateur","NULL","NULL")'); 
        $insertion->execute(); 

		$DBhost = "localhost";
	$DBuser = "root";
	$DBpass = "";
	$DBname = "codingcage";
	
	
			$address="http://127.0.0.1/Projet-Craquette-master/PHP/profilgroupe.php?nom=";
			$address.=$nom;
			$insertion2 = $DBcon->prepare('INSERT INTO tbl_posts VALUES("'.$id.'","'.$nom.'","'.$address.'")');
			$insertion2->execute();					
        //peut etre photo par defaut
    }
}



?>
<section>
<p>Votre groupe a bien été crée.</p>
    <br>

<a href='groupe.php?nom=<?php echo $nom ; ?>'><button type="submit" class="btn">Voir mon groupe.</button></a>

</section>
