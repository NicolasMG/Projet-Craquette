<?php 
    include('header_accueil.php');
?>
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
               ?>" alt="image de votre ami " /></a>
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
