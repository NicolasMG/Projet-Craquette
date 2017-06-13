<?php

   
    include('header_accueil.php');
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

<section id="section_profil">

<div id="Page">
    <div id="photosduprofil">
            <img style="height:270px; width:851px;" alt="phto de couverture" id="PhotoDeCouverture" src="<?php 
                    $response =$bdd->query('SELECT imagecouverture FROM profil WHERE id="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imagecouverture']);                                              
                                             ?>">
            
            
            
            
            
            <img id="PhotoDeProfil" alt="photo de couverture" src="<?php 
                    $response =$bdd->query('SELECT imageprofil FROM profil WHERE id="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imageprofil']);               
                                         ?>" >  
        
            <form method="post" action="message.php?idutil=<?php echo $mail ; ?>">
                <input class="form-control" style=" display:block; position:absolute; width:170px; display:inline; left:680px; top:280px;" value="Envoyer un message" type="submit" name="envoyer un message"/>
            </form>  
         <p style="display:block; position:absolute; left:25%; top:88%;font-weight: bold; color:black; font-size:20px;"><?php  $response =$bdd->query('SELECT nom FROM profil WHERE id="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['nom']); 
                        ?>  <?php $response = $bdd->query('SELECT prenom FROM profil WHERE id="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['prenom']);
                ?>
        
    </div>
    <div id="PanneauGauche">
        <p><h2 style="font-size:20px;" >A propos :</h2></p>
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
                    
                    <p>Adresse mail : <?php  $response =$bdd->query('SELECT email FROM profil WHERE id="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['email']);
                                        
                    ?></p>
                     <p>Date de naissance : <?php  $response =$bdd->query('SELECT datenaissance FROM profil WHERE id="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['datenaissance']);
                    ?></p>
                    
                    <p>Compétences :</p>
                    <p>CV : <a href="Documents/Mon%20CV.txt">Mon CV</a></p> 
                    
                    <form method="post" action="album.php?id=<?php echo $mail; ?>">
                            <input class="form-control" style=" display:block; position:absolute; width:130px; display:inline;" value="Album" type="submit" name="ablum"/>
                    </form>
                    
                    
                    <form method="post" action="video.php?id=<?php echo $mail; ?>">
                            <input class="form-control" style=" display:block; position:absolute; width:50px; display:inline;" value="Video" type="submit" name="video"/>
                    </form>
                </div>
            </div>
    </div>
       
</div>
</section>

<?php include('footer.php'); ?>