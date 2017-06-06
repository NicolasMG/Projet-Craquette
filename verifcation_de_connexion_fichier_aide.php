<?php
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root','');
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    session_start();
    $mail=$_SESSION['mail'];
    $idef=$_SESSION['ID'];
    $sel=S_SESSION['MDPS'];
    
    $sql=$bdd->prepare('SELECT email, motDePasse, Id FROM profil WHERE email="'.$mail.'"');
    $sql->execute();
    $basePerso = $sql->fetch();

    if($basePerso["email"] == $mail && $basePerso["motDePasse"] == $sel && $basePerso["Id"] == $idef) {
        //AUTORISATION D'ETRE SUR LA PAGE
    }
    else {
        //SORTIR DE LA PAGE : genre peut etre vider $_SESSION et renvoyer sur la page de connexion
        session_unset();
        $droitconnexion="./connexion.php";
        echo "<script>window.location = "."'".$droitconnexion."'"."</script>";
    }


    //REMARQUE: Header non inclu
?>

