<?php
 try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }




$droitconnexion="erreurconnexion.php"; //SI UN DES IF N'EST PAS VERIFIER RENVOIE SUR L'EURREUR
//verification de l'adress mail :
if(!empty($_POST['mail'])) {
    $mail=$_POST['mail'];
    //$requete='Select email From profil Where email="'.$mail.'"';
    $reponse=$bdd->prepare('Select email From profil Where email="'.$mail.'"');
    $mail=htmlentities($_POST['mail']);
    $reponse->execute(array('.$email.'=>$_POST['mail']));
    $reponse2=$reponse->fetch();
    
        echo $_POST['MDP'];
        $MDP=$_POST['MDP'];
        echo $MDP;
    if(!empty($MDP)){
        echo 'test2';
        $sql=$bdd->prepare('Select motDePasse,Nom,Prenom,id From profil Where email="'.$mail.'"');
        $sql->execute(array('.$email.'=>$_POST['mail']));
        $sel = $sql->fetch();
        
        echo "<br>";
        echo $sel['motDePasse'];

        $self=$sel['motDePasse'];
        
        echo $sel['id'];
        
            $option = [
                $sel['Nom']=> $sel['id'],
                $sel['Prenom'] => $sel['id'] + 5,
            ];
            $MDPS = password_hash($MDP,PASSWORD_DEFAULT, $option);


        
        if(password_verify($MDPS, $self)) {
                
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
        $_SESSION['mail']=$_POST['mail'];//s="rachel.noireau@uha.fr";
        echo $_SESSION['mail'];
        echo "<br>";
         $_SESSION['MDPS']= $MDPS;
        $response =$bdd->query('SELECT id FROM profil WHERE email="'.$mail.'"'); 
        $row = $response->fetch();
        echo($row['id']);
         $_SESSION['ID']= $row['id'];
        
       // <a href="./profil.php">mon compte</a>
        $droitconnexion="./profil.php";
//}   // pas sur si on doit d'arreter ici ou plus loin (doute de mon niveau de php)
        
            }
        }
    }
}
echo "<script>window.location = "."'".$droitconnexion."'"."</script>";
?>
        

