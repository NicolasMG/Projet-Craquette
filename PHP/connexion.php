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

        
        session_start();

        $_SESSION['mail']=$mail;
        
        $response =$bdd->query('SELECT id,imageprofil FROM profil WHERE email="'.$mail.'"'); 
        $row = $response->fetch();
       
        $_SESSION['ID']= $row['id'];
        $_SESSION['imageprofil']=$row['imageprofil'];
       
        $droitconnexion="./accueil.php";

        
            }
        }
    }
}
echo "<script>window.location = "."'".$droitconnexion."'"."</script>";
?>
        

