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
        $_SESSION['ID']=$_POST['ID'];//s="rachel.noireau@uha.fr";
        //echo $_SESSION['ID'];
       // <a href="./profil.php">mon compte</a>

}   // pas sur si on doit d'arreter ici ou plus loin (doute de mon niveau de php)
?>
        <!DOCTYPE html>
       <a href="./profil.php">mon compte</a>
    <!--peut etre inserer ailleur/autrement pour pas avoir de page en plus


