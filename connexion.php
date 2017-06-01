<?php
 try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }




$droitconnexion="erreurconnexion.php";
//verification de l'adress mail :
if(!empty($_POST['ID'])){
    $mail=$_POST['ID'];
    $requete='Select email From profil Where email="'.$mail.'"';
    $reponse=$bdd->prepare('Select email From profil Where email="'.$mail.'"');
    $mail=htmlentities($_POST['ID']);
    $reponse->execute(array('.$mail.'=>$_POST['ID']));
    
    $reponse2=$reponse->fetch();
    //$reponse->binValue('mail',$mail,PDO::PPARM_STR);
   // $reponse->execute();
    //$reponse2=$reponse->rowCount();
   // echo($reponse2);
    if($reponse2){
        //echo("salut2");
   




//verification du mot de passe ici :
//$motDePass = /*  */;
//$sel = /*  */;
//$testMotDePass = password_verify($motDePass, $sel);
//if($testMotDePass == 0) {
    // Mauvais mot de passe
    //renvoyer sur page de connexion avec message d'erreur;
//}
//else {
        //test
        
        session_start();
        $_SESSION['ID']=$_POST['ID'];//s="rachel.noireau@uha.fr";
        echo $_SESSION['ID'];
       // <a href="./profil.php">mon compte</a>
        $droitconnexion="./profil.php";
//}   // pas sur si on doit d'arreter ici ou plus loin (doute de mon niveau de php)

    }
}
?>
        <!DOCTYPE html>
       <a href="<?php echo $droitconnexion ?>">mon compte</a>
    <!--peut etre inserer ailleur/autrement pour pas avoir de page en plus


