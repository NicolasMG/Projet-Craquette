
<?php
 include('header_groupe.php');
$nom=$_GET['nom']; ?>
    
    <section>
 <?php   
if(isset($_POST['modif'])){
      
    if(!$_FILES['imagecouverture']['error']>0){
    if(!empty($_FILES['imagecouverture'])){ 
          $imagecouverture = $_FILES['imagecouverture']; 
                   
                $nom1=md5(uniqid(rand(),true)); 
                $nomimage="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['imagecouverture']['tmp_name'], $nomimage);
          
          $response =$bdd->query('Update page set imagecouverture="Images/'.$nom1.'" WHERE nompage="'.$nom.'"'); 
          $row = $response->fetch();
          echo($row['imagecouverture']);
      }}
      if(!$_FILES['imageprofil']['error']>0){
      if(!empty($_FILES['imageprofil'])){ 
          $imageprofil = $_FILES['imageprofil']['name']; 
                        
                $nom1=md5(uniqid(rand(),true)); 
                $nomimage="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['imageprofil']['tmp_name'], $nomimage);
          
          $response =$bdd->query('Update page set imageprofil="Images/'.$nom1.'" WHERE nompage="'.$nom.'"'); //ok
          $row = $response->fetch();
          echo($row['imageprofil']);
          
                
            
      }}
    
    
    
      if(!empty($_POST['nom'])){ 
          $nom2 = htmlspecialchars($_POST['nom']); 
          $response =$bdd->query('Update page set nompage="'.$nom2.'" WHERE nompage="'.$nom.'"'); 
          $row = $response->fetch();
          echo($row['nompage']);
          $nom=$nom2;
      }
}
?>
<p><br><br><br></p>
<?php
    echo("Les modifications ont bien était effectués");
   

?>
<p><br></p>
<a href='page.php?nom=<?php echo $nom ;?>'><button type="submit" class="btn">revenir à ma page</button></a>
</section>
<br>