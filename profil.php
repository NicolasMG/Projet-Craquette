<p><br><br><br></p>
<?php

    include('header.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
        
    session_start();
    $mail=$_SESSION['mail'];
    //$imageprofil=$bdd->query('SELECT imageprofil FROM profil WHERE email="'.$mail.'"');
    //$photoprofil="Images/Cigogne%20proposition%20logo%201.png";

    //$photocouverture="Images/Portrait_Unfallen_a.png";
?>


<!DOCTYPE html>
<html land="fr">
    <br>
    <br>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link rel="stylesheet" type="text/css" href="styleprofil.css">
        <title>Page de profil</title>
    </head>
<body>
<div id="Page">
    <div id="PanneauGauche">
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="forum.html">Forum</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div id="Body">
        <div id="photosduprofil">
            <img id="PhotoDeCouverture" src="<?php 
                    $response =$bdd->query('SELECT imagecouverture FROM profil WHERE email="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imagecouverture']);                                              
                                             ?>">
            
            
            
            
            
            <img id="PhotoDeProfil" src="<?php 
                    $response =$bdd->query('SELECT imageprofil FROM profil WHERE email="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imageprofil']);               
                                         ?>" >   
        </div>
        <div id="Core">
            <h2>Á propos :</h2>
            <div id="Information">
                <div id="Infogenerale">
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
                    
                    <p>Adresse mail : <?php  
                                        echo($mail);
                    ?></p>
                </div>
                <div id : Infopousse>
                    <p>Date de naissance : <?php  $response =$bdd->query('SELECT datenaissance FROM profil WHERE email="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['datenaissance']);
                    ?></p>
                    
                    <p>Compétences :</p>
                    <p>CV : <a href="Documents/Mon%20CV.txt">Mon CV</a></p>    
                </div>
            </div>
            <section>
                
            <a href='modifprofil.php'><button type="submit" class="btn">Mettre à jour mon profil</button></a>
            </section>
            <p><br></p>
        </div>
        <div id="Emploidutemps">
            <img id="EmploiDuTEmpsDeLaSemaine" src="Images/Emloi_du_temps/29-05-2017.png">   
        </div>
        <p><br></p>
       
    </div>
</div>
</body>

</html> 