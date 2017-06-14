<?php 
    include('header_accueil.php');
?>


<!--<form  method="post" action="aimepage.php?nom=<?php echo $nom;?>">
    <input class="form-control" style="display:block; position:absolute; width:200px; display:inline; left:480px; top:100px;" value="Démarer une conversation" type="submit" name="conversation"/>
</form>-->
<section id="section_profil">
    <div class="marge">
  <form style="padding-top:20px; " class="form-group" method="post">
    <label for="ami"> A qui voulez vous parler :</label>
    <input type="text" style="width:300px;margin-top:10px; " class="form-control" name="nouvelconversation" value="<?php if (isset($_POST['ami'])) echo htmlspecialchars($_POST['ami']);?>"placeholder= "Adresse Email de votre ami" /> 
        
    <?php  //if(isset($_POST['nouvelconversation'])){  ?>
   <input class="form-control" style="width:170px; margin-top:20px;" type="submit" name="new" value="Nouvel conversation" />
    </form>
        <?php  if(isset($_POST['nouvelconversation'])){  ?>
        <?php  
                                                             
                                         
       if(isset($_POST['nouvelconversation'])){                                             
        $mail=$_POST['nouvelconversation'];
        $response =$bdd->query('SELECT id FROM profil WHERE email="'.$mail.'"'); 
        $row = $response->fetch();
        $idutil=$row['id'];          
        $pbnom="message.php?idutil=$idutil";
        echo "<script>window.location = "."'".$pbnom."'"."</script>";//pb là
        header('location:'.$pbnom.'');
        echo $mail;
        echo $idutil;
        } 
}?>

<h3> Mes conversations :</h3>     
        <?php       
            $id=$_SESSION['ID'];
            $sql='SELECT distinct(idutil1) FROM message Where idutil2="'.$id.'" ORDER BY id';
            $req = $bdd->query($sql)  ; 
          
        ?>    
        
        
        <?php 
      while($row=$req->fetch()){ 
          $idutil=$row['idutil1'];?>

      <p style="padding-left:200px;"> <a href="message.php?idutil=<?php echo $idutil; ?>">      <img style="width:150px; height:150px;" src="<?php
                $response =$bdd->query('SELECT imageprofil FROM profil WHERE id="'.$idutil.'"'); 
                $row = $response->fetch();
                $image= ($row['imageprofil']);
                echo $image;
               ?>" alt="image de votre ami " height="150" /></a>
 
    
            <?php
                $response =$bdd->query('SELECT prenom FROM profil WHERE id="'.$idutil.'"'); 
                $row = $response->fetch();
                $prenom=($row['prenom']);
           
                $response =$bdd->query('SELECT nom FROM profil WHERE id="'.$idutil.'"'); 
                $row = $response->fetch();
                $nom=($row['nom']);
            ?>
            
            <a href="message.php?idutil=<?php echo $idutil; ?>">
                            <?php echo($prenom); echo " "; echo $nom; ?>
            </a>  </p> 
        <?php 
            }
            $req->closeCursor();
        ?>
            
</div>

</section>