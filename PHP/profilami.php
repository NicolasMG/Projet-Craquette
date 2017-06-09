<p><br><br><br></p>
<?php

   
    include('header_profil.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); 
    }
        
    //session_start();
    $mail=$_GET['id'];
    
    
    //$imageprofil=$bdd->query('SELECT imageprofil FROM profil WHERE email="'.$mail.'"');
    //$photoprofil="Images/Cigogne%20proposition%20logo%201.png";

    //$photocouverture="Images/Portrait_Unfallen_a.png";
?>



<div id="Page">
    <div id="photosduprofil">
            <img style="height:315px; width:851px;" alt="phto de couverture" id="PhotoDeCouverture" src="<?php 
                    $response =$bdd->query('SELECT imagecouverture FROM profil WHERE id="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imagecouverture']);                                              
                                             ?>">
            
            
            
            
            
            <img id="PhotoDeProfil" alt="photo de couverture" src="<?php 
                    $response =$bdd->query('SELECT imageprofil FROM profil WHERE id="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imageprofil']);               
                                         ?>" >  
        
        <!--BOUTON DEMANDE AMI-->
        <!--<form action='message.php?idutil=<?php echo $mail ; ?>'>-->
            <a href='message.php?idutil=<?php echo $mail ; ?>'><input name="envoyer un message" type="submit" class="btn"/></a>
        <!--</form>-->
    </div>
    <div id="PanneauGauche">
        <p>A propos :</p>
            <div id="Information">
                <div id="Infogenerale">
                    <p>Nom : <?php  $response =$bdd->query('SELECT nom FROM profil WHERE id="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['nom']);
                    
                    
                    ?> 
                    
                   <p>Prénom : <?php $response = $bdd->query('SELECT prenom FROM profil WHERE id="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['prenom']); 
                        ?> </p>
                    
                    <p>Filière : <?php  $response =$bdd->query('SELECT filiere FROM profil WHERE id="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['filiere']);
                    ?></p>
                    
                    <p>Promo : <?php  $response =$bdd->query('SELECT promo FROM profil WHERE id="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['promo']);
                    ?></p>
                    
                    <p>Adresse mail : <?php  
                                        echo($mail);
                    ?></p>
                     <p>Date de naissance : <?php  $response =$bdd->query('SELECT datenaissance FROM profil WHERE id="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['datenaissance']);
                    ?></p>
                    
                    <p>Compétences :</p>
                    <p>CV : <a href="Documents/Mon%20CV.txt">Mon CV</a></p>    
                </div>
            </div>
    </div>
       
</div>


<?php include('footer.php'); ?>