<?php include('header_non_co.php');
 try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }

$droitconnexion="erreurconnexion.php";
if(!empty($_POST['mail'])) {
    $mail=htmlspecialchars($_POST['mail']);
    $reponse=$bdd->prepare('Select email From profil Where email= ? ');
    $reponse->execute(array($mail));
    $reponse2=$reponse->fetch();
    
    $MDP=htmlspecialchars($_POST['MDP']);
    
    if(!empty($MDP)){
        $sql=$bdd->prepare('Select motDePasse,Nom,Prenom,id From profil Where email= ? ');
        $sql->execute(array($mail));
        $sel = $sql->fetch();
        

        $self=$sel['motDePasse'];
        
                
        if(password_verify($MDP, $self)) {
                
            if($reponse2){




        //verification du mot de passe ici :
        //$motDePass = /*  */;
        //$sel = /*  */;
        //$testMotDePass = password_verify($motDePass, $sel);
        //if($testMotDePass == 0) {
        // Mauvais mot de passe
        //renvoyer sur page de connexion avec message d'erreur;
        //}
        //else {    //PAS DE ELSE:FAIRE UNE SUITE DES DIFFERANTES CONDITION
            //test
        
        session_start();

        $_SESSION['mail']=$mail;
        //s="rachel.noireau@uha.fr";
        //echo $_SESSION['mail'];
        $response =$bdd->query('SELECT id,imageprofil FROM profil WHERE email="'.$mail.'"'); 
        $row = $response->fetch();
        //echo($row['id']);
         $_SESSION['ID']= $row['id'];

                $_SESSION['imageprofil']=$row['imageprofil'];
		 
        
       // <a href="./profil.php">mon compte</a>
        $droitconnexion="./accueil.php";
//}   // pas sur si on doit d'arreter ici ou plus loin (doute de mon niveau de php)
        
            }
        }
    }
}
echo "<script>window.location = "."'".$droitconnexion."'"."</script>";
?>
        

