<?php

 try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
?>
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
        <link rel="stylesheet" href="PHP//CSS/style_header_non_co.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<header> <!-- header = en tête page -->

        <div style="height:50px;" class="topnav" id="myTopnav">
            <img style="padding-left:48%;" class="headerimg" src='PHP/Images/logo.png' alt="logo"/>
        </div>
		</header>
		<section style="text-align:center;">
            
            
       <h2>Connexion</h2>
            <br>
            <form class="form-horizontal" method="post" action="PHP/connexion.php" >
                
                <div class="form-group" >
                    <label for="mail">Adresse Email :</label>
                    <div style="display:inline;">
                        <input class="form-control" style="width:250px; display:inline;"  type="email" name="mail" placeholder="exemple@exemple.com" />
                    </div>             
                </div>
                
                <div class="form-group">
                    <label for="MDP">Mot de passe :</label>
                    <div style="display:inline;">
                        <input class="form-control" style="width:250px; display:inline;" type="password" name="MDP" placeholder="Mot de passe" />
                    </div>
                </div>
                
                <p><a href="PHP/chgtmdp.php">Mot de passe oublié ?</a></p>                
                <p><a href="PHP/inscription.php">Pas de compte ? Inscrivez vous !</a></p>
                <div class="form-group">
                    <input type="submit" style="width:100px; display:inline;" class="form-control" name="Se connecter" />
                </div>
                
            </form>

    </section>
	</body>
</html>