<!DOCTYPE html>
<section>
    <br><br>
<?php
     //session_start();
    
    include('header_profil.php');
    $mail=$_SESSION['mail'];
    $nom=$_GET['nom'];
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
    
    //include('header2.php');

 
if(isset($_POST['modif'])){
      
    if(!$_FILES['couvertureevenement']['error']>0){
    if(!empty($_FILES['couvertureevenement'])){ 
          $imagecouverture = $_FILES['couvertureevenement']; 
          //if($imagecouverture==NULL){echo "c'est null";} ;
        /*  $response =$bdd->query('Update profil set imagecouverture="'.$imagecouverture.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['imagecouverture']);*/
                   
                $nom1=md5(uniqid(rand(),true)); 
                $nom2="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['couvertureevenement']['tmp_name'], $nom2);
                //if($resultat){echo "coucou";}
          
          $response =$bdd->query('Update evenement set couvertureevenement="Images/'.$nom1.'" WHERE nomevenement="'.$nom.'"'); //ok
          $row = $response->fetch();
          echo($row['couvertureevenement']);
      }}
      if(!$_FILES['profilevenement']['error']>0){
      if(!empty($_FILES['profilevenement'])){ 
          $imageprofil = $_FILES['profilevenement']['name']; 
        /*  $response =$bdd->query('Update profil set imageprofil="Images/'.$imageprofil.'" WHERE email="'.$mail.'"'); 
          $row = $response->fetch();
          echo($row['imageprofil']);
          echo("salut");*/
          
               // mkdir('fichier6',0777, true); //fichier cré               
                $nom1=md5(uniqid(rand(),true)); 
                $nom2="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['profilevenement']['tmp_name'], $nom2);
                //if($resultat){echo "coucou";}
          
          $response =$bdd->query('Update evenement set profilevenement="Images/'.$nom1.'" WHERE nomevenement="'.$nom.'"'); //ok
          $row = $response->fetch();
          echo($row['imageprofil']);
          //echo("salut");
          //echo($row['imageprofil']);
                
            
      }}
    
    
    
      if(!empty($_POST['nom'])){ 
          $nom = htmlspecialchars($_POST['nom']); 
          $response =$bdd->query('Update evenement set nom="'.$nom.'" WHERE nomevenement="'.$nom.'"'); 
          $row = $response->fetch();
          echo($row['nom']);
      }


      if(!empty($_POST['lieu'])){ 
          $lieu = htmlspecialchars($_POST['lieu']); 
          $response =$bdd->query('Update evenement set lieu="'.$lieu.'" WHERE nomevenement="'.$nom.'"'); 
          $row = $response->fetch();
          echo($row['lieu']);
      }
    
    
      if(!empty($_POST['date'])){ 
          $datenaissance = htmlspecialchars($_POST['date']); 
          $response =$bdd->query('Update evenement set date="'.$datenaissance.'" WHERE email="'.$nom.'"'); 
          $row = $response->fetch();
          echo($row['datenaissance']);
      }
    
        if(!empty($_POST['heure'])){ 
          $heure = htmlspecialchars($_POST['heure']); 
          $response =$bdd->query('Update evenement set heure="'.$heure.'" WHERE nomevenement="'.$nom.'"'); 
          $row = $response->fetch();
          echo($row['heure']);
      }
    
    
    
    
      if(!empty($_POST['commentaire'])){ 
          $commentaire = htmlspecialchars($_POST['commentaire']); 
          $response =$bdd->query('Update evenement set commentaire="'.$commentaire.'" WHERE nomevenement="'.$nom.'"'); 
          $row = $response->fetch();
          echo($row['commentaire']);
      }
}
?>
<p><br><br><br></p>
<?php
    echo("Les modifications ont bien était effectués");
   

?>
<p><br></p>
<a href='evenement.php?nom=<?php echo $nom; ?>'><button type="submit" class="btn">revenir à mon compte</button></a>
<br><br>
</section>
<br>