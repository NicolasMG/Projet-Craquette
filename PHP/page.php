<?php
   
    include('header_accueil.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
  
    //session_start();
    $mail=$_SESSION['mail'];
    $id=$_SESSION['ID'];
?>
<?php

//CREATION DU PAGE
if(isset($_POST['creepage'])){ 
	if(!empty($_POST['nompage'])){
        
        $nom = htmlspecialchars($_POST['nompage']);
        $id=$_SESSION['ID'];
        
        $reponse=$bdd->prepare('Select nompage From page Where nompage="'.$nom.'"');
        $nom=htmlspecialchars($_POST['nompage']);
        $reponse->execute(array('.$nom.'=>htmlspecialchars($_POST['nompage'])));
        $reponse2=$reponse->fetch();
        $_GET['nom'] =htmlspecialchars($_POST['nompage']);                           
        if($reponse2){
            echo "Se nom est deja prit il faut en choisir un autre";
            $pbnom="creegroup.php";
            echo "<script>window.location = "."'".$pbnom."'"."</script>";
        }else{
            
        
            $couverture="Images/imagesgroupecouverture.jpg";
            if(!$_FILES['imagecouverture']['error']>0){
                if(!empty($_FILES['imagecouverture'])){ 
                     $imagecouverture = $_FILES['imagecouverture']; 
                   
                    $nom1=md5(uniqid(rand(),true)); 
                    $couverture="Images/$nom1";
                    $resultat=move_uploaded_file($_FILES['imagecouverture']['tmp_name'], $couverture);
                }
            }
        
            $profil="Images/imagegroupeprofil.jpg";
             if(!$_FILES['imageprofil']['error']>0){
                 if(!empty($_FILES['imageprofil'])){ 
                    $imagecouverture = $_FILES['imageprofil']; 
                   
                     $nom1=md5(uniqid(rand(),true)); 
                    $profil="Images/$nom1";
                    $resultat=move_uploaded_file($_FILES['imageprofil']['tmp_name'], $profil);
                }
             }
        
  
            $insertion = $bdd->prepare('insert into page values("'.$nom.'","'.$id.'","'.$profil.'","'.$couverture.'")'); 
            $insertion->execute(); 
      
            
            
        }
                  
    
    }else{
        echo "il faut choisir un nom";
        $pbnom="creepage.php";
        echo "<script>window.location = "."'".$pbnom."'"."</script>";
        
    }
}

?>
    <?php $nom= htmlspecialchars($_GET['nom']);  ?>
<section id="section_profil">
    <div id="Page">
        <div id="photosduprofil">
                <img style="height:270px; width:851px;"id="PhotoDeCouverture" src="<?php 
                        $response =$bdd->query('SELECT imagecouverture FROM page WHERE nompage="'.$nom.'"'); 
                        $row = $response->fetch();
                        echo($row['imagecouverture']);                                              
                                                 ?>">

                <img id="PhotoDeProfil" src="<?php 
                        $response =$bdd->query('SELECT imageprofil FROM page WHERE nompage="'.$nom.'"'); 
                        $row = $response->fetch();
                        echo($row['imageprofil']);               
                                             ?>" >  
                <form  method="post" action="modifpage.php?nom=<?php echo $nom;?>">
                    <input class="form-control" style="display:block; position:absolute; width:170px; display:inline; left:680px; top:280px;" value="Modifier la page" type="submit" name="modif"/>
                </form>
                <p style="display:block; position:absolute; left:3%; top:35%;font-weight: bold; color:white; font-size:20px;"><?php echo htmlspecialchars($_GET['nom']);
                        ?>  
        </div>
        <div style="display:inline-block;" id="PanneauGauche">
                <div id="Information">
                    <div id="Infogenerale">
                        <!--<p><h2 style="font-size:20px;" >Membres du page :</h2></p>-->
                    
                        
                        
                        
                        
                        
                        <!--DOIT ETRE VU UNUQUEMENT PAR CREATEUR-->
                        <?php
                        $nom = htmlspecialchars($_GET['nom']);
                        $id=$_SESSION['ID'];
        
                        $reponse=$bdd->prepare('Select nompage From page Where createur="'.$id.'" AND nompage="'.$nom.'"');
                        $nom=htmlspecialchars($_GET['nom']);
                        $reponse->execute(array('.$nom.'=>htmlspecialchars($_GET['nom'])));
                        $reponse2=$reponse->fetch();
                        //$_GET['nom'] =$_POST['nompage'];                           
                        if($reponse2){    
                        
                        ?>   
                        
                        
                        <?php $nom=htmlspecialchars($_GET['nom']); ?>

                        <a href='modifpage.php?nom=<?php echo $nom;?>'><button style="left:62%; top:34%;" type="submit" class="btn">Mettre à jour ma page</button></a>
                
                        <?php }else{ ?>
                        
                        
                        <a href='aimepage.php?nom=<?php echo $nom;?>'><button style="left:52%; top:34%;" type="submit" class="btn">J'aime</button></a>
                        
                        <?php }  ?>
                        
                        <p>cette page a <?php 
                            $reponse = $bdd->query('select count(idutil) FROM  aimepage WHERE nompage="'.$nom.'"'); 
                            $row=$reponse->fetch();  
                            echo $row[0];
                
                            
                            ?>   j'aime</p>
                    </div>

                </div>

        </div>
        <div id="PanneauDroit">
            <div id="conteneur_du_post">

                <div id="conteneur_du_post_2">

                    <img class="img-circle" src="Images/profil.png" />


                    <form method="post" action="traitement_news.php">
                        <textarea cols="46" row='10' name="message" placeholder="Quoi de neuf ?"></textarea>
                        <input class="form-control" value="Craquetter" type="submit" name="craquetter"/>
                    </form>
                </div>
            <?php include ('news_accueil.php') ; ?>
            </div>           
        </div>

</section>
</body>
</html>

