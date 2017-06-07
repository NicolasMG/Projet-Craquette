<p><br><br><br></p>
<?php
    include('protection_session.php');
   
    include('header_groupe.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
        
    session_start();
    $mail=$_SESSION['mail'];
    
?>
<?php

//CREATION DE LA PAGE
if(isset($_POST['creepage'])){ 
	if(!empty($_POST['nompage'])){
        
        $nom = htmlspecialchars($_POST['nompage']);
        $_SESSION['nompage']=htmlspecialchars($_POST['nompage']);
        $id=$_SESSION['ID'];

        
        $reponse=$bdd->prepare('Select nompage From groupe Where nompage="'.$nom.'"');
        $nom=htmlentities($_POST['nompage']);
        $reponse->execute(array('.$nom.'=>htmlspecialchars($_POST['nompage'])));
        $reponse2=$reponse->fetch();
        $_GET['nom'] =$_POST['nompage'];                           
        if($reponse2){
            echo "Se nom est deja prit il faut en choisir un autre";
            $pbnom="creepage.php";
            echo "<script>window.location = "."'".$pbnom."'"."</script>";
        }else{
            
        
            $couverture="NULL";
            if(!$_FILES['couverturepage']['error']>0){
            if(!empty($_FILES['couverturepage'])){ 
                $imagecouverture = $_FILES['couverturepage']; 
                   
                $nom1=md5(uniqid(rand(),true)); 
                $couverture="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['couverturepage']['tmp_name'], $couverture);
            }}
        
            $profil="NULL";
             if(!$_FILES['profilpage']['error']>0){
                 if(!empty($_FILES['profilpage'])){ 
                    $imagecouverture = $_FILES['profilpage']; 
                   
                     $nom1=md5(uniqid(rand(),true)); 
                    $profil="Images/$nom1";
                    $resultat=move_uploaded_file($_FILES['profilpage']['tmp_name'], $profil);
            }}
            

            
            $insertion = $bdd->query('insert into page values("'.$nom.'","'.$id.'","'.$profil.'","'.$couverture.'")'); 
            $insertion->execute();    
        }
                  
    
    }else{
        echo "il faut choisir un nom";
        $pbnom="creepage.php";
        echo "<script>window.location = "."'".$pbnom."'"."</script>";
        
    }
}

?>
    <?php $nom=$_GET['nom']; ?>
    <div class="vide_gaucheprofil" style="display:inline-block;"></div>
    <div style="display:inline-block;" id="Page">
        <div id="photosduprofil">
                <img style="height:315px; width:851px;"id="PhotoDeCouverture" src="<?php 
                        $response =$bdd->query('SELECT imagecouverture FROM page WHERE nompage="'.$nom.'"'); 
                        $row = $response->fetch();
                        echo($row['imagecouverture']);                                              
                                                 ?>">





                <img id="PhotoDeProfil" src="<?php 
                        $response =$bdd->query('SELECT imageprofil FROM page WHERE nompage="'.$nom.'"'); 
                        $row = $response->fetch();
                        echo($row['imageprofil']);               
                                             ?>" >  
            <p style="display:block; position:absolute; left:3%; top:35%;font-weight: bold; color:white; font-size:20px;"><?php echo $_GET['nom'];
                        ?>  
        </div>
        <div style="display:inline-block;" id="PanneauGauche">
                <div id="Information">
                    <div id="Infogenerale">
                        <!--<p><h2 style="font-size:20px;" >Membres du groupe :</h2></p>-->
   
                        <!--<a href='gestionmembres.php'><button style="left:30.2%; top:95%;" type="submit" class="btn">Gérer des membres</button></a>-->


                    
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

    <div class="vide_droitprofil" style="display:inline-block;"></div>


<?php include('footer.php'); ?>