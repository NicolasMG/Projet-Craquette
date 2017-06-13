<?php
include('header_accueil.php');
        $nom=$_GET['nom'];
        echo $nom;  
        $insertion2 = $bdd->prepare('DELETE FROM evenement WHERE nomevenement="'.$nom.'"'); 
        $insertion2->execute();

        $insertion2 = $bdd->prepare('DELETE FROM vientevenemnet WHERE nomevenement="'.$nom.'"'); 
        $insertion2->execute();
  
    $page="accueil.php";
    echo "<script>window.location = "."'".$page."'"."</script>";

?>