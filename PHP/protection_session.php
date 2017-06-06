<?php
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root','');
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    session_start();
    if(isset($_SESSION['mail']) && isset($_SESSION['ID'])){
        $mail=$_SESSION['mail'];
        $idef=$_SESSION['ID'];
    }
    else {
        session_unset();
        session_destroy();
        $droitconnexion="../index.php";
        echo "<script>window.location = "."'".$droitconnexion."'"."</script>";
    }   
        
    $sql=$bdd->prepare('SELECT email,Id FROM profil WHERE email="'.$mail.'"');
    $sql->execute();
    $basePerso = $sql->fetch();

    if(!$basePerso["email"] == $mail || !$basePerso["Id"] == $idef) {
        session_unset();
        session_destroy();
        $droitconnexion="../index.php";
        echo "<script>window.location = "."'".$droitconnexion."'"."</script>";
    }
?>

