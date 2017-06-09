<?php 
  include('protection_session.php');
?>

<!doctype html>
<html lang="fr">
	<head> <!-- en tête du fichier -->
		<meta charset="utf-8"/>
		<title>Craquette - Connexion</title>
        <link rel="stylesheet" href="CSS/style_accueil.css"/>
        <link rel="stylesheet" href="CSS/style_header_accueil.css"/>
        <link rel="stylesheet" href="CSS/style_fil_actualite.css"/>       
        <link rel="stylesheet" href="CSS/style_profil.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script type="text/javascript" src="JS/calendrier.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body id="body_accueil">
		<header> <!-- header = en tête page -->
        <div class="topnav" id="myTopnav">
            <div class="topnav_logo">
                <a href="accueil.php"><img src='Images/logo.png'/></a>
            </div>
            <div class="topnav_icons">
                <a class="active" href="deconnexion.php"><span class="glyphicon glyphicon-off"></span></a>
                <a class="active" href="accueil.php"><span class="glyphicon glyphicon-bell"></span></a>
                <a class="active" href="accueil.php"><span class="glyphicon glyphicon-home"></span></a>
                <a class="active"  href="profil.php"><span class="glyphicon glyphicon-cog"></span></a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
            <div class="topnav_search">
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                
                
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
