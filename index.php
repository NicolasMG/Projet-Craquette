<?php include('header.php'); ?>

    <section> <!-- Contenu principal de la page -->
       <h2>Connexion</h2>

            <form class="form-horizontal" method="post" action="accueil.php" >
                
                <div>
                    
                    <label for="ID">Adresse Email :</label>
                    <input class="input-medium search-query" type="Email" name="ID" placeholder="prenom.nom@uha.fr" />
                    
                </div>
                <div>
                    
                    <label for="MDP">Mot de passe :</label>
                    <input class="input-medium search-query" type="text" name="MDP" 
                    placeholder="Mot de passe" />
                    
                </div>
                <p><a href="inscription.php">Pas de compte ? Inscrivez vous !</a></p>
                <a href='accueil.php'><button type="submit" class="btn">Se connecter</button></a>
                
            </form>
    </section>

<?php

//verification de l'adress mail :



//verification du mot de passe ici :
$motDePass = /*  */;
$sel = /*  */;
$testMotDePass = password_verify($motDePass, $sel);
if($testMotDePass == 0) {
    // Mauvais mot de passe
    //renvoyer sur page de connexion avec message d'erreur;
}
else {

        session_start();
        $_SESSION['ID'];
       // <a href="./profil.php">mon compte</a>

}   // pas sur si on doit d'arreter ici ou plus loin (doute de mon niveau de php)
?>

<?php include("footer.php"); ?>