<?php
include('header_accueil.php');
        //$id=$_GET['id'];
        $nom=$_GET['nom'];
        //echo $nom;  
        $insertion2 = $bdd->prepare('DELETE FROM page WHERE nompage="'.$nom.'"'); 
        $insertion2->execute();

        $insertion2 = $bdd->prepare('DELETE FROM aimepage WHERE nompage="'.$nom.'"'); 
        $insertion2->execute();
  
    $page="accueil.php";
    //echo "<script>window.location = "."'".$page."'"."</script>";
    header('Location: ./accueil.php');
?>