<!DOCTYPE html>
<section>
    <br><br>
<?php
     session_start();
    
    $mail=$_SESSION['mail'];
    include('header.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
    
    //include('header2.php');

 
if(isset($_POST['modif'])){
      
    if(!$_FILES['imagecouverture']['error']>0){
    if(!empty($_FILES['imagecouverture'])){ 
          $imagecouverture = $_FILES['imagecouverture']; 
          //if($imagecouverture==NULL){echo "c'est null";} ;
        /*  $response =$bdd->query('Update profil set imagecouverture="'.$imagecouverture.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['imagecouverture']);*/
                   
                $nom1=md5(uniqid(rand(),true)); 
                $nom="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['imagecouverture']['tmp_name'], $nom);
                //if($resultat){echo "coucou";}
          
          $response =$bdd->query('Update profil set imagecouverture="Images/'.$nom1.'" WHERE email="'.$mail.'"'); //ok
          $row = $response->fetch();
          echo($row['imagecouverture']);
      }}
      if(!$_FILES['imagecouverture']['error']>0){
      if(!empty($_FILES['imageprofil'])){ 
          $imageprofil = $_FILES['imageprofil']['name']; 
        /*  $response =$bdd->query('Update profil set imageprofil="Images/'.$imageprofil.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['imageprofil']);
          echo("salut");*/
          
               // mkdir('fichier6',0777, true); //fichier cré               
                $nom1=md5(uniqid(rand(),true)); 
                $nom="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['imageprofil']['tmp_name'], $nom);
                //if($resultat){echo "coucou";}
          
          $response =$bdd->query('Update profil set imageprofil="Images/'.$nom1.'" WHERE email="'.$mail.'"'); //ok
          $row = $response->fetch();
          echo($row['imageprofil']);
          //echo("salut");
          //echo($row['imageprofil']);
                
            
      }}
    
    
    
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
    
    
     if(!empty($_POST['mail'])){ 
          $mail2 = $_POST['mail']; 
          $response =$bdd->query('Update profil set prenom="'.$mail2.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['prenom']);
         $_SESSION['mail']=$mail2;
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
