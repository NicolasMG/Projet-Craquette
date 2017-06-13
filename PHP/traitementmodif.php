<?php
    
    include('header_accueil.php');
    $mail=$_SESSION['mail'];
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
 
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
    
      if(!$_FILES['imageprofil']['error']>0){
      if(!empty($_FILES['imageprofil'])){ 
          $imageprofil = $_FILES['imageprofil']['name']; 
        /*  $response =$bdd->query('Update profil set imageprofil="Images/'.$imageprofil.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          */
          
               // mkdir('fichier6',0777, true); //fichier cré               
                $nom1=md5(uniqid(rand(),true)); 
                $nom="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['imageprofil']['tmp_name'], $nom);
          
          $response =$bdd->query('Update profil set imageprofil="Images/'.$nom1.'" WHERE email="'.$mail.'"'); //ok
          $row = $response->fetch();
          echo($row['imageprofil']);
          $_SESSION['imageprofil']=$row['imageprofil'];          

                
            
      }}
    
    
    
      if(!empty($_POST['nom'])){ 
          $nom = htmlspecialchars($_POST['nom']); 
          $response =$bdd->query('Update profil set nom="'.$nom.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['nom']);
      }


      if(!empty($_POST['prenom'])){ 
          $prenom = htmlspecialchars($_POST['prenom']); 
          $response =$bdd->query('Update profil set prenom="'.$prenom.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['prenom']);
      }
    
    
     if(!empty($_POST['mail'])){ 
          $mail2 = htmlspecialchars($_POST['mail']); 
          $response =$bdd->query('Update profil set prenom="'.$mail2.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['prenom']);
         $_SESSION['mail']=$mail2;
      }
    
      if(!empty($_POST['filiere'])){ 
          if($_POST['filiere'] != "ne pas modifier"){
              $filiere = htmlspecialchars($_POST['filiere']); 
              $response =$bdd->query('Update profil set filiere="'.$filiere.'" WHERE  email="'.$mail.'"'); 
              $row = $response->fetch();
                echo($row['filiere']);
          }
      }
    
      if(!empty($_POST['promo'])){ 
          if($_POST['promo'] != "ne pas modifier"){
              $promo = htmlspecialchars($_POST['promo']); 
              $response =$bdd->query('Update profil set promo="'.$promo.'" WHERE email="'.$mail.'"'); 
              $row = $response->fetch();
              echo($row['promo']);
          }
      }
    
      if(!empty($_POST['datenaissance'])){ 
          $datenaissance = htmlspecialchars($_POST['datenaissance']); 
          $response =$bdd->query('Update profil set datenaissance="'.$datenaissance.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['datenaissance']);
      }
    
        if(!empty($_POST['tel'])){ 
          $tel = htmlspecialchars($_POST['tel']); 
          $response =$bdd->query('Update profil set telephone="'.$tel.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['telephone']);
      }
    
    
    
    
      if(!empty($_POST['commentaire'])){ 
          $commentaire = htmlspecialchars($_POST['commentaire']); 
          $response =$bdd->query('Update profil set commentaire="'.$commentaire.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['commentaire']);
      }
}   
?>
<section id="section_traitement_modif">
    <p>Les modifications ont bien été effectuées</p>
    <form  method="post" action="profil.php">
        <input class="form-control" value="Revenir à mon compte" type="submit" name="revenir"/>
    </form>
</section>
