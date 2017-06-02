<!doctype html>
<?php
    //pour savoir a qui appartient la session et recuperer des donné
   // session_start();
   // $mail = $_SESSION['ID'];
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }


?>

<html lang="fr">

	<head> <!-- en tête du fichier -->
		<meta charset="utf-8"/>
		<title>Craquette - Connexion</title>
		<link rel="stylesheet" href="CSS/bootstrap.css"/>
        <script type="text/javascript" src="calendrier.js"></script>
	</head>
	<body>
		<header> <!-- header = en tête page -->

        <div style="height:50px;" class="topnav" id="myTopnav">
            <img style="padding-left:45%;" class="headerimg" src='Images/logo.png' />
            <a href='emploidutemps.php'><button style="left:10%;" type="submit" class="btn">Emploi du temps</button></a>  
        </div>



		</header>
		
		