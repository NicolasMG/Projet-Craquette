<?php

    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
    session_start();
    $nom=$_GET['nom'];
    $id=$_SESSION['ID'];
    



    $nom = htmlspecialchars($_GET['nom']);
    $id=$_SESSION['ID'];
        
     $reponse=$bdd->prepare('Select nomevenement From vientevenement Where idutil="'.$id.'" AND nomevenement="'.$nom.'"');
    $nom=htmlentities($_GET['nom']);
    $reponse->execute(array('.$nom.'=>htmlspecialchars($_GET['nom'])));
    $reponse2=$reponse->fetch();                           
     if(!$reponse2){  
    
        $insertion = $bdd->prepare('insert into vientevenement values("'.$nom.'","'.$id.'")'); 
        $insertion->execute(); 

     }
    header('Location: ./evenement.php?nom='.$nom.'');

?>