<?php
     session_start();
    
    $mail=$_SESSION['ID'];
    include('header.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
    
    //include('header2.php');

 
if(isset($_POST['modif'])){
      if(!empty($_POST['nom'])){ 
          $nom = $_POST['nom']; 
          $response =$bdd->query('Update profil set nom="'.$nom.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['nom']);
      }


      if(!empty($_POST['prenom'])){ 
          $prenom = $_POST['prenom']; 
          $response =$bdd->query('Update profil set prenom="'.$prenom.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['prenom']);
      }
    
    
      if(!empty($_POST['datenaissance'])){ 
          $datenaissance = $_POST['datenaissance']; 
          $response =$bdd->query('Update profil set datenaissance="'.$datenaissance.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['prenom']);
      }
}

    echo("les modifications ont bien était effectués");
   

?>
<p><br></p>
<a href='profil.php'><button type="submit" class="btn">revenir à mon compte</button></a>
