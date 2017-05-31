<?php
     session_start();
    
    $mail=$_SESSION['ID'];
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
    
    //include('header2.php');

 
if(isset($_POST['modif'])){
      if(!empty($_POST['adresse'])){ 
            $adresse = $_POST['adresse']; 
      }
}
    $response =$bdd->query('Update profil set adresse="'.$adresse.'" WHERE email="'.$mail.'"'); 
    $row = $response->fetch();
    echo($row['adresse']);
    //le pb c'est uniquement qu'il voit pas ce qu'est adresse
?>
