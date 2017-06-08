<!doctype html>
<html lang="fr">
    <?php
        try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
    ?>  

	<head> <!-- en tête du fichier -->
        <link rel="shortcut icon" type="image/x-icon" href="Image/logo.png" /><!--icone-->
		<meta charset="utf-8"/>
		<title>Craquette - Connexion</title>
		<link rel="stylesheet" href="CSS/bootstrap.css"/>
        <link rel="stylesheet" href="CSS/syle_profil.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script type="text/javascript" src="JS/calendrier.js"></script>
	</head>
	<body id="body_profil">
		<header> <!-- header = en tête page -->

        <div style="height:50px;" class="topnav" id="myTopnav">
            <a href="accueil.php"><img style="padding-left:17%;" class="headerimg" src='Images/logo.png' /></a>
            <div class="contenu_entete">
                <a style="padding-top:0px;padding-bottom:0px;"href="#home">
                <form style="padding-left:200%; padding-top:10px;">
                    <input class="input-medium search-query" style="border-radius:8px; font-size:17px;" type="text" name="Search" placeholder="Recherche..">
                </form>
                </a>
                <a class="active" href="deconnexion.php"><span class="glyphicon glyphicon-off"></span></a>
                <a class="active" href="accueil.php"><span class="glyphicon glyphicon-bell"></span></a>
                <a class="active" href="accueil.php"><span class="glyphicon glyphicon-home"></span></a>
                <a class="active"  href="profil.php"><span class="glyphicon glyphicon-cog"></span></a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                
            </div>
        </div>

        <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>


		</header>
		<section id="section_profil">
