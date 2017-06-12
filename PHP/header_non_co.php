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
<link rel="shortcut icon" href="./Images/favicon.ico">

	<head> <!-- en tête du fichier -->
		<meta charset="utf-8"/>
		<title>Craquette - Connexion</title>
        <script type="text/javascript" src="JS/calendrier.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/style_header_non_co.css"/>

	</head>
	<body>
		<header> <!-- header = en tête page -->
            <div style="height:50px;" class="topnav" id="myTopnav">
                <img style="padding-left:48%;" class="headerimg" src='Images/logo.png' alt="Logo" />
            </div>
        </header>