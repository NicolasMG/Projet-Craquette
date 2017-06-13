<?php 
    include('header_accueil.php');
?>


<!--<form  method="post" action="aimepage.php?nom=<?php echo $nom;?>">
    <input class="form-control" style="display:block; position:absolute; width:200px; display:inline; left:480px; top:100px;" value="Démarer une conversation" type="submit" name="conversation"/>
</form>-->
  <form method="post">

    <p> 
    <label for="ami"> A qui voulez vous parler :</label>
    <br>
    <br>
    <input type="text" class="form-control" name="nouvelconversation" value="<?php if (isset($_POST['ami'])) echo htmlspecialchars($_POST['ami']);?>"placeholder= "ami" /> 
    
        <br>
        
    <?php  //if(isset($_POST['nouvelconversation'])){  ?>
   <input type="submit" name="new" value="Nouvel conversation" />
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
<table class="table table-bordered">
    <!--<thead>
        <tr>
            <th>Mes Conversation</th>
        </tr>
    </thead>-->
<tbody>
    <!--<tr>-->
                    
        <?php       
            $id=$_SESSION['ID'];
            $sql='SELECT distinct(idutil2) FROM message Where idutil1="'.$id.'" ORDER BY id';
            $req = $bdd->query($sql)  ; 
          
        ?>    
        
        
        <?php while($row=$req->fetch()){ 
                         
        ?>
        <tr>
        <td>
            <?php    
                $idutil=$row['idutil2'];?>
            
           <a href="message.php?idutil=<?php echo $idutil; ?>"> <img  src="<?php
                
                $response =$bdd->query('SELECT imageprofil FROM profil WHERE id="'.$idutil.'"'); 
                $row = $response->fetch();
                $image= ($row['imageprofil']);
                echo $image;
               ?>" alt="image de votre ami " height="150" /></a>
        </td>
            
        <td>
            <p>
            <?php
                $response =$bdd->query('SELECT prenom FROM profil WHERE id="'.$idutil.'"'); 
                $row = $response->fetch();
                $prenom=($row['prenom']);
            ?>
            
            
            <?php
                $response =$bdd->query('SELECT nom FROM profil WHERE id="'.$idutil.'"'); 
                $row = $response->fetch();
                $nom=($row['nom']);
            ?>
            
            <a href="message.php?idutil=<?php echo $idutil; ?>">
                            <?php echo($prenom); echo " "; echo $nom; ?>
            </a>
            
        </td>
    </tr>            
        <?php 
            }
            $req->closeCursor();
        ?>
            
    <!--</tr>-->
</tbody>
</table>
