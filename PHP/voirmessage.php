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
            $sql='SELECT idutil1 id1a,idutil2 FROM message Where idutil1="'.$id.'" OR idutil2="'.$id.'"';
            $req = $bdd->query($sql)  ; 
          
        ?>    
        
        
        <?php while($row=$req->fetch()){ 
                         
        ?>
        <tr>
        <td>
            <p>metre photo ici</p>
        </td>
            
        <td>
            <a href="profilgroupe.php?nom=<?php echo $row['message']; ?>">
                            <?php echo($row['message']); ?>
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
