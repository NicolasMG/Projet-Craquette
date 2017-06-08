<p><br><br><br></p>
<?php
    include('header_profil.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
        
    session_start();
    $mail=$_SESSION['mail'];
   
?>


    <div class="vide_gaucheprofil" style="display:inline-block;"></div>
    <div style="display:inline-block;" id="Page">
        <div id="photosduprofil">
                <img style="height:315px; width:851px;"id="PhotoDeCouverture" src="<?php 
                        $response =$bdd->query('SELECT imagecouverture FROM profil WHERE email="'.$mail.'"'); 
                        $row = $response->fetch();
                        echo($row['imagecouverture']);                                              
                                                 ?>">





                <img id="PhotoDeProfil" src="<?php 
                        $response =$bdd->query('SELECT imageprofil FROM profil WHERE email="'.$mail.'"'); 
                        $row = $response->fetch();
                        echo($row['imageprofil']);               
                                             ?>" >  
            <a href='modifprofil.php'><button style="left:62%; top:34%;" type="submit" class="btn">Mettre à jour mon profil</button></a>
            <p style="display:block; position:absolute; left:3%; top:35%;font-weight: bold; color:white; font-size:20px;"><?php $response = $bdd->query('SELECT nom FROM profil WHERE email="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['nom']); 
                        ?>  <?php  $response =$bdd->query('SELECT prenom FROM profil WHERE email="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['prenom']);
                ?>
        </div>
        <div style="display:inline-block;" id="PanneauGauche">
                <div id="Information">
                    <div id="Infogenerale">
                        <p><h2 style="font-size:20px;" >A propos :</h2></p>

                        <p>Nom : <?php  $response =$bdd->query('SELECT nom FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['nom']);


                        ?> 

                       <p>Prénom : <?php $response = $bdd->query('SELECT prenom FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['prenom']); 
                            ?> </p>

                        <p>Filière : <?php  $response =$bdd->query('SELECT filiere FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['filiere']);
                        ?></p>

                        <p>Promo : <?php  $response =$bdd->query('SELECT promo FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['promo']);
                        ?></p>

                    
                        <p>Date de naissance : <?php  $response =$bdd->query('SELECT datenaissance FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['datenaissance']);
                        ?></p>
                    
                
                    
                    
                        <p>Adresse mail : <?php  
                                            echo($mail);
                        ?></p>
                        
                    
                        
                    
                        <p>Téléphone : <?php  $response =$bdd->query('SELECT telephone FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['telephone']);
                        ?></p>
                    
                    
                        
                        <p>Compétences :<?php  $response =$bdd->query('SELECT commentaire FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['commentaire']);
                    
                        ?>
                        </p>
                        <p>CV : <a href="Documents/Mon%20CV.txt">Mon CV</a></p>    
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