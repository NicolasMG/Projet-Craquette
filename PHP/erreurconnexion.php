
<?php include('header_non_co.php'); 


//PAS CE HEADER

 try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }



?>





		<section style="text-align:center;">
       <h2>Connexion</h2>


<br>
        <h4>Merci de bien remplir tous les champs requis</h4>


          <form class="form-horizontal" method="post" action="connexion.php" >
                
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
                
                <p><a href="chgtmdp.php">Mot de passe oublié ?</a></p>                
                <p><a href="inscription.php">Pas de compte ? Inscrivez vous !</a></p>
                <div class="form-group">
                    <input type="submit" style="width:100px; display:inline;" class="form-control" name="Se connecter" />
                </div>

<?php

?>

<?php include("footer.php"); ?>