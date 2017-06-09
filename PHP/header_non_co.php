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
        <script type="text/javascript" src="JS/calendrier.js"></script>
		<link rel="stylesheet" href="CSS/bootstrap.css"/>

	</head>
	<body>
		<header> <!-- header = en tête page -->

        <div style="height:50px;" class="topnav" id="myTopnav">
            <img style="padding-left:48%;" alt="topNav" class="headerimg" src='Images/logo.png' />
        </div>



		</header>
		<section>