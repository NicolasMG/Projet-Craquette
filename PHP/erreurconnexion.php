<?php
include('header.php'); 
//PAS CE HEADER

 try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }



?>





    <section> <!-- Contenu principal de la page -->
       <h2>Connexion</h2>



        <h4>Merci de bien remplir tous les champs requis</h4>


            <form class="form-horizontal" method="post" action="connexion.php" >
                
                <div>
                    
                    <label for="mail">Adresse Email :</label>
                    <input class="input-medium search-query" type="Email" name="mail" placeholder="prenom.nom@uha.fr" />
                    
                </div>
                <div>
                    
                    <label for="MDP">Mot de passe :</label>
                    <input class="input-medium search-query" type="password" name="MDP" 
                    placeholder="Mot de passe" />
                    
                </div>
                <p><a href="inscription.php">Pas de compte ? Inscrivez vous !</a></p>
                <a href='connexion.php'><button type="submit" class="btn">Se connecter</button></a>
                
            </form>
    </section>

<?php

?>

<?php include("footer.php"); ?>