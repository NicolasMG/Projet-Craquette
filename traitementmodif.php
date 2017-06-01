<!DOCTYPE html>
<section>
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
      
    
    if(!empty($_POST['imagecouverture'])){ 
          $imagecouverture = $_POST['imagecouverture']; 
          $response =$bdd->query('Update profil set imagecouverture="'.$imagecouverture.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['imagecouverture']);
      }
    
      if(!empty($_POST['imageprofil'])){ 
          $imageprofil = $_POST['imageprofil']; 
          $response =$bdd->query('Update profil set imageprofil="'.$imageprofil.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['imageprofil']);
      }
    
    
    
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
    
      if(!empty($_POST['filiere'])){ 
          if($_POST['filiere'] != "ne pas modifier"){
              $filiere = $_POST['filiere']; 
              $response =$bdd->query('Update profil set filiere="'.$filiere.'" WHERE           email="'.$mail.'"'); 
              $row = $response->fetch();
                echo($row['filiere']);
          }
      }
    
      if(!empty($_POST['promo'])){ 
          if($_POST['filiere'] != "ne pas modifier"){
              $promo = $_POST['promo']; 
              $response =$bdd->query('Update profil set promo="'.$promo.'" WHERE email="'.$mail.'"'); 
              $row = $response->fetch();
              echo($row['promo']);
          }
      }
    
      if(!empty($_POST['datenaissance'])){ 
          $datenaissance = $_POST['datenaissance']; 
          $response =$bdd->query('Update profil set datenaissance="'.$datenaissance.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['prenom']);
      }
}
?>
<p><br><br><br></p>
<?php
    echo("Les modifications ont bien était effectués");
   

?>
<p><br></p>
<a href='profil.php'><button type="submit" class="btn">revenir à mon compte</button></a>
</section>
