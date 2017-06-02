<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=profils;charset=utf8','saad','muraillechine',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//le array permet d'afficher les ereurs
}
catch (Exception $e){
	die('connection failed : '.$e->getMessage());
}
?>
<!doctype html>
<html>
<head>
	<meta charset='utf-8'/>
	<link href='style3.css' rel="stylesheet"/>
	<title> Craquette </title>
	<!--<script src="jquery-1.5.min.js" type="text/javascript"></script> -->
    <script src="news.js" type="text/javascript"></script>
</head>
<body>
	
	<header>
		<div id="barre_principale">
			<nav>
				<ul>
					<li><a href="#"> Acceuil </a></li>
					<li><a href="#">Messages</a></li>
					<li><a href="#">Emploie du Temps</a></li>
				</ul>
			</nav>
			<div id="logo">
			<img src="craquette.png"/>
			</div>
			
			<form id="search_box">
				
				<input type="text" name="search" placeholder="cherchez un ami" >
				
			</form>
			
			<div id="se_deco">
				<a href="#">Se Déconnecter </a>
			</div>
		</div>
	</header>
	<section>
	
		<div id="acceuil_gauche">
		
		</div>	
		<div id="fil_actu">
			<div id="conteneur_du_post">
				
				<div id="conteneur_du_post_2">
					
					<img src="profil.png" />
					
					<!-- ?php 
					$rep=$bdd->query('select image from profiles_site where id=1') or die(print_r($bdd->errorInfo()));
					while($donnees = $rep->fetch()){
					
					echo "<img src="."'".$donnees[image]."'"."alt='image de profil' />"; 
					}
					?>-->
					<form method="post" action="traitement2.php">
						<textarea cols="46" row='8' name="message">Quoi de neuf ?</textarea>
						<input value="Craquetter" type="submit" name="craquetter"/>
					</form>
				</div>
			<?php include ('news.php') ; ?>
			</div>
		</div>
	
		<div id="acceuil_droit">
		
		</div>
	</section>
	
</body>
</html>
	
		
			
				
					
					
					
				
			