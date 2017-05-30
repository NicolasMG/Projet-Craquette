<!doctype html>
<html lang="fr">

	<head> <!-- en tête du fichier -->
		<meta charset="utf-8"/>
		<title>Craquette - Connexion</title>
		<link rel="stylesheet" href="bootstrap.css"/>
	</head>
	<body>
		<header> <!-- header = en tête page -->
            <p>
                <img src="Images/logo.jpg" alt="logo" title="Logo de Craquette" height=100px width=100px/>
            </p>
            <p>Craquette</p>
		</header>
		
		<section id="contenu"> <!-- Contenu principal de la page -->


       <h2>Connexion</h2>

            <form class="form-horizontal" method="post" action="accueil.php" >
                
                <div class="form-group">
                    
                    <label for="ID">Adresse Email :</label>
                    <input class="input-medium search-query" type="Email" name="ID" placeholder="prenom.nom@uha.fr" />
                    
                </div>
                <div class="form-group">
                    
                    <label for="MDP">Mot de passe :</label>
                    <input class="input-medium search-query" type="text" name="MDP" 
                    placeholder="Mot de passe" />
                    
                </div>
                <p><a href="inscription.php">Pas de compte ? Inscrivez vous !</a></p>
                <a href='accueil.php'><button type="submit" class="btn">Se connecter</button></a>
                
            </form>
     
<?php include("footer.php"); ?>