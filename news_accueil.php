<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=profil_newsfeed;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e){
	die('connection failed : '.$e->getMessage());
}

if(!isset($_GET['id']))
    $req = "SELECT id,poste FROM actualite ORDER BY id DESC";
else
    $req = "SELECT id,poste FROM actualite WHERE id>'".addslashes($_GET['id'])."' ORDER BY id LIMIT 1";



$req=$bdd->query($req) or die(print_r($bdd->errorInfo()));
$first = true;
while($res = $req->fetch()){
    if($first){
        print '<script>setId('.$res['id'].');</script>';
        $first = false;
    }
    print '<div id="conteneur_newsfeed">
				<img src="profil.png"/>
					<div id="contenu_droit">
						<p id="nom_profil"> Prénom NOM </p>
							<p id="contenu_int">'.$res['poste'].'</p>
						
					</div>
			</div>';
}
?>
