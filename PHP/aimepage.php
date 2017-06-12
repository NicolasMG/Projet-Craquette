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
    if(isset($_POST['aime'])){    
        $reponse=$bdd->prepare('Select nompage From aimepage Where idutil="'.$id.'" AND nompage="'.$nom.'"');
        $nom=htmlentities($_GET['nom']);
        $reponse->execute(array('.$nom.'=>htmlspecialchars($_GET['nom'])));
        $reponse2=$reponse->fetch();                           
        if(!$reponse2){  
    
            $insertion = $bdd->prepare('insert into aimepage values("'.$nom.'","'.$id.'")'); 
            $insertion->execute(); 

        }
    }else{
        $reponse=$bdd->query('delete From aimepage Where idutil="'.$id.'" AND nompage="'.$nom.'"');
        
        
        
    }






    header('Location: ./page.php?nom='.$nom.'');

?>